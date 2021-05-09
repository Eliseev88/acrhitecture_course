<?php

namespace Lesson_6;

use Lesson_6\Classes\PayOrder;

$orderPaying = new PayOrder(500, 89094435689);
$orderPaying->payOrder(); // Paying with Yandex

$orderPaying2 = new PayOrder(1090, 89778323456);
$orderPaying2->payOrder(); // Paying with WebMoney

$orderPaying3 = new PayOrder(1000, 89063428934);
$orderPaying3->payOrder(); // Paying with Qiwi;
