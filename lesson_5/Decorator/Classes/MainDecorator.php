<?php

namespace Decorator\Classes;

use Decorator\Interfaces\MainInterface;

abstract class MainDecorator implements MainInterface
{
    protected $notificationMessage;

    public function __construct(MainInterface $notificationMessage)
    {
        $this->notificationMessage = $notificationMessage;
    }

    abstract public function sendNotification();
}
