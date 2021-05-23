<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer\SplObserver;

class ConcreteObserverPC implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        if ($subject instanceof ConcreteSubject) {
            $state = $subject->getState();

            echo "Spl PC display: " . $state . "<br/>";
        }
    }
}
