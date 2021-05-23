<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer;

class ConcreteObserverPC implements ObserverInterface
{
    public function update(SubjectInterface $subject)
    {
        if ($subject instanceof ConcreteSubject) {
            $state = $subject->getState();

            echo "PC display: " . $state . "<br/>";
        }
    }
}
