<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer\SplObserver;

class ConcreteSubject extends SubjectAbstract
{
    private $state;

    public function setState($state)
    {
        $this->state = $state;

        $this->notify();
    }

    public function getState()
    {
        return $this->state;
    }
}
