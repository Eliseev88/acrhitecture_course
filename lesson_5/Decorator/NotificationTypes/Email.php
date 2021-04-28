<?php

namespace Decorator\NotificationTypes;

use Decorator\Classes\MainDecorator;

class EmailNotification extends MainDecorator
{
    public function sendNotification()
    {
        echo 'This is additional email notification method';
        $this->MainInterface->sendNotification();
    }
}
