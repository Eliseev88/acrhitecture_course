<?php

declare(strict_types=1);

namespace Observer\Observer;

use Observer\Entity\JobFair;
use SplObserver;

class NewVacationObserver implements SplObserver
{
    public function update($subject)
    {
        echo 'New vacation is available - {$subject->getVacation()}';
    }
}
