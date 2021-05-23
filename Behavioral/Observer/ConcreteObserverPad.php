<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer;

class ConcreteObserverPad implements ObserverInterface
{
    public function update(SubjectInterface $subject)
    {
        if ($subject instanceof ConcreteSubject) {
            $state = $subject->getState();

            echo "Pad display: " . $state . "<br/>";
        }
    }
}
