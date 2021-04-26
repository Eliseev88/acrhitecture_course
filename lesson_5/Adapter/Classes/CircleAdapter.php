<?php

namespace Adapter\Classes;

use Adapter\API\CircleAreaLib;
use Adapter\Interfaces\ICircle;

class CircleAdapter implements ICircle
{
    private $circle;

    public function __construct(CircleAreaLib $circle)
    {
        $this->circle = $circle;
    }

    public function circleArea(int $circumference)
    {
        $this->circle->getCircleArea($circumference);
    }
}
