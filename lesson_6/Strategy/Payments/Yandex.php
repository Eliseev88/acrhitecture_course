<?php

namespace Lesson_6\Payments;

use Lesson_6\Interfaces\PayStrategy;

class Yandex implements PayStrategy
{
    public function pay($amount = 0, $phone) {
        echo "Paying ". $amount. " using Yandex Money";
    }
}
