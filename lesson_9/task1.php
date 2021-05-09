<?php

// 1. Создать массив на сто тысяч элементов и отсортировать его различными способами. 
// Сравнить скорости.

function getArray(int $arrayNumber): array {
    $arr = range(1, $arrayNumber);
    shuffle($arr);
    return $arr;
}

$arr = getArray(100000);

// Метод сортировки Пузырьковый

function bubbleSort($array)
{

    for ($i = 0; $i < count($array); $i++) {
        $count = count($array);
        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
    return $array;
}

// Метод Быстрой сортировки

function quickSort(array $arr)
{
    $arrCount = count($arr);

    if ($arrCount <= 1) {
        return $arr;
    }

    $base = $arr[0];
    $left = [];
    $right = [];

    for ($i = 1; $i < $arrCount; $i++) {

        if ($base >= $arr[$i]) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    $left = quickSort($left);
    $right = quickSort($right);

    return array_merge($left, [$base], $right);
}

// Метод сортировки Расческой

function combSort($arr)
{
    $gap = count($arr);
    $swap = true;
    while ($gap > 1 || $swap) {
        if ($gap > 1) {
            $gap /= 1.25;
        }
        $swap = false;
        $i = 0;
        while ($i + $gap < count($arr)) {
            if ($arr[$i] > $arr[$i + $gap]) {
                list($arr[$i], $arr[$i + $gap]) = array($arr[$i + $gap], $arr[$i]);
                $swap = true;
            }
            ++$i;
        }
    }
    return $arr;
}

$start = microtime(true);
bubbleSort($arr);
echo "Сортировка пузырьком: ".( microtime(true) - $start).PHP_EOL;

$start = microtime(true);
combSort($arr);
echo "Сортировка расческой: ".( microtime(true) - $start).PHP_EOL;

$start = microtime(true);
quickSort($arr);
echo "Быстрая сортировка: ".( microtime(true) - $start).PHP_EOL;

// Cортировка пузырьком НЕ справилась с сортировкой ста тысяч числей в массиве - 
// Fatal error: Maximum execution time of 30 seconds exceeded
