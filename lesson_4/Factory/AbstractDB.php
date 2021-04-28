<?php

namespace Lesson_4\Factory;

abstract class AbstractDB 
{
    abstract public function connect();
    abstract public function build();
    abstract public function record();
}
