<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer\SplObserver;

class Client
{
    public function run()
    {
        $concreteSubject = new ConcreteSubject();

        $concreteObserverMobile = new ConcreteObserverMobile();
        $concreteObserverPc = new ConcreteObserverPC();
        $concreteObserverPad = new ConcreteObserverPad();

        $concreteSubject->attach($concreteObserverMobile);
        $concreteSubject->attach($concreteObserverPc);

        $concreteSubject->setState('state 1');

        $concreteSubject->setState('state 2');

        $concreteSubject->detach($concreteObserverMobile);
        $concreteSubject->setState('state 3');

        $concreteSubject->attach($concreteObserverPad);
        $concreteSubject->setState('state 4');
    }
}
