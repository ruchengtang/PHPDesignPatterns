<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer;

abstract class SubjectAbstract implements SubjectInterface
{
    private $observers = [];

    public function attach(ObserverInterface $observer)
    {
        array_push($this->observers, $observer);
    }

    public function detach(ObserverInterface $observer)
    {
        $key = array_search($observer, $this->observers, true);

        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
