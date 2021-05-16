<?php

/* 3. Подсчитать практически количество шагов при поиске описанными в методичке алгоритмами. */

// Линейный поиск
function LinearSearch ($myArray, $num) {
    $count = count($myArray);
    
    for ($i=0; $i < $count; $i++) {
       if ($myArray[$i] == $num) return $i;
       elseif ($myArray[$i] > $num) return null;
    }
    return null;
}

// Бинарный поиск
function binarySearch ($myArray, $num) {

    //определяем границы массива
    $left = 0;
    $right = count($myArray) - 1;
    $n = 0;
    
    while ($left <= $right) {
        $n++;
        //находим центральный элемент с округлением индекса в меньшую сторону
        $middle = floor(($right + $left)/2);
        //если центральный элемент и есть искомый   
        if ($myArray[$middle] == $num) {
            echo 'Количество итераций: ' . $n;
            return $middle;
        }
        
        elseif ($myArray[$middle] > $num) {
        //сдвигаем границы массива до диапазона от left до middle-1
            $right = $middle - 1;
        }
        elseif ($myArray[$middle] < $num) {
            $left = $middle + 1;
        }
    }
    return null;
}

// Интерполяционный поиск
function InterpolationSearch($myArray, $num) {
    $start = 0;
    $last = count($myArray) - 1;
    $n = 0;

    while (($start <= $last) && ($num >= $myArray[$start]) && ($num <= $myArray[$last])) {
        $n++;
        $pos = floor($start + ((($last - $start) / ($myArray[$last] - $myArray[$start]))* ($num - $myArray[$start])));
        if ($myArray[$pos] == $num) {
            echo 'Количество итераций: ' . $n;
            return $pos;
        }
        if ($myArray[$pos] < $num) $start = $pos + 1;
        else $last = $pos - 1;
    }
    return null;
}

$arr = range(1, 10000);
$num = 9878;

binarySearch ($arr, $num);
InterpolationSearch($arr, $num);
