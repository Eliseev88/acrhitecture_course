<?php

namespace Decorator\NotificationTypes;

use Decorator\Classes\MainDecorator;

class ChromeNotification extends MainDecorator
{
    public function sendNotification()
    {
        echo 'This is additional CN notification method';
        $this->MainInterface->sendNotification();
    }
}
