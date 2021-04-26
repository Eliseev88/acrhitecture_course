<?php

namespace Decorator\Classes;

use Decorator\Interfaces\MainInterface;

class Notification implements MainInterface
{
    public function sendNotification()
    {
        echo 'This is standard notification method';
    }
}
