<?php

namespace Adapter;

use Adapter\API\CircleAreaLib;
use Adapter\API\SquareAreaLib;
use Adapter\Classes\CircleAdapter;
use Adapter\Classes\SquareAdapter;

// Circle
$circle = new CircleAdapter(new CircleAreaLib());
$circle->circleArea(10);

// Square
$square = new SquareAdapter(new SquareAreaLib());
$square->squareArea(10);
