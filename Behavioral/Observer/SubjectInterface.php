<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer;

interface SubjectInterface
{
    public function attach(ObserverInterface $observer);

    public function detach(ObserverInterface $observer);

    public function notify();
}
