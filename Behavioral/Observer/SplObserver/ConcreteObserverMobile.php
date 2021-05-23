<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer\SplObserver;

class ConcreteObserverMobile implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        if ($subject instanceof ConcreteSubject) {
            $state = $subject->getState();

            echo "Spl Mobile display: " . $state . "<br/>";
        }
    }
}
