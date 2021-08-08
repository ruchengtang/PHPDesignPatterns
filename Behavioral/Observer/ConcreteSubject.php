<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer;

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
