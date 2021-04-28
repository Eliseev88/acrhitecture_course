<?php

namespace Adapter\Classes;

use Adapter\API\SquareAreaLib;
use Adapter\Interfaces\ISquare;

class CircleAdapter implements ISquare
{
    private $square;

    public function __construct(SquareAreaLib $square)
    {
        $this->square = $square;
    }

    public function squareArea(int $sideSquare)
    {
        $this->square->getSquareArea($sideSquare);
    }
}
