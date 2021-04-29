<?php

namespace Lesson_6\Payments;

use Lesson_6\Interfaces\PayStrategy;

class WebMoney implements PayStrategy
{
    public function pay($amount = 0, $phone) {
        echo "Paying ". $amount. " using WebMoney";
    }
}
