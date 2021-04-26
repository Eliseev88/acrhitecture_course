<?php

namespace Decorator;

use Decorator\Classes\Notification;
use Decorator\NotificationTypes\ChromeNotification;
use Decorator\NotificationTypes\EmailNotification;
use Decorator\NotificationTypes\SMSNotification;

// Standard notification method
$notification = new Notification();
$notification->sendNotification(); // This is standard notification method

// CN notification method
$cnNotification = new ChromeNotification($notification);
$cnNotification->sendNotification(); // This is additional CN notification method

// SMS notification method
$smsNotification = new SMSNotification($notification);
$smsNotification->sendNotification(); // This is additional SMS notification method

// Email notification method
$emailNotification = new EmailNotification($notification);
$emailNotification->sendNotification(); // This is additional Email notification method
