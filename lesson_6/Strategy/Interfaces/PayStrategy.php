<?php

namespace Lesson_6\Interfaces;

interface PayStrategy
{
    public function pay($amount, $phone);
}
