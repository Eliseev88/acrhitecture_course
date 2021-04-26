<?php

namespace Decorator\NotificationTypes;

use Decorator\Classes\MainDecorator;

class SMSNotification extends MainDecorator
{
    public function sendNotification()
    {
        echo 'This is additional SMS notification method';
        $this->MainInterface->sendNotification();
    }
}
