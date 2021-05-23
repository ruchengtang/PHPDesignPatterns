<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Strategy;

interface ComparatorInterface
{
    public function compare($a, $b): int;
}
