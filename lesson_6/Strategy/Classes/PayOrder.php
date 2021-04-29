<?php

namespace Lesson_6\Classes;
use Lesson_6\Payments\Qiwi;
use Lesson_6\Payments\Yandex;
use Lesson_6\Payments\WebMoney;

class PayOrder
{
    public $amount;
    public $phone;

    public function __construct(int $amount = 0, $phone = 89998887766) {
        $this->amount = $amount;
        $this->phone = $phone;
    }

    public function getAmount(): int {
        return $this->amount;
    }

    public function setAmount(int $amount = 0): void {
        $this->amount = $amount;
    }

    public function payOrder() {
        if($this->amount > 500 && $this->amount <= 1000) {
            $payment = new Qiwi();
        } else if($this->amount <= 500) {
            $payment = new Yandex();
        } else {
            $payment = new WebMoney();
        }

        return $payment->pay($this->amount, $this->phone);
    }
}
