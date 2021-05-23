<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer\SplObserver;

class ConcreteObserverPad implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        if ($subject instanceof ConcreteSubject) {
            $state = $subject->getState();

            echo "Spl Pad display: " . $state . "<br/>";
        }
    }
}
