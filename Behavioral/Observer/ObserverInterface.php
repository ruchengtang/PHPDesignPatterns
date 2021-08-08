<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Observer;

interface ObserverInterface
{
    public function update(SubjectInterface $subject);
}
