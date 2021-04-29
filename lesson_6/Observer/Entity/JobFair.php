<?php

declare(strict_types=1);

namespace Observer\Entity;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class JobFair implements SplSubject
{
    /**
     * @var string
     */
    private $vacation;
    private $observers;

    public function __construct(string $vacation)
    {
        $this->vacation = $vacation;
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getVacation(): string
    {
        return $this->vacation;
    }

    public function updateVacation(string $vacation): void
    {
        $this->vacation = $vacation;
        $this->notify();
    }
}
