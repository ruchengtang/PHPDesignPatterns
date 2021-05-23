<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer;

class ConcreteObserverMobile implements ObserverInterface
{
    public function update(SubjectInterface $subject)
    {
        if ($subject instanceof ConcreteSubject) {
            $state = $subject->getState();

            echo "Mobile display: " . $state . "<br/>";
        }
    }
}
