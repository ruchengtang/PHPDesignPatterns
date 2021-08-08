<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\Decorator;

class EggCake implements Cake
{
    public function getDescription(): string
    {
        return 'egg cake';
    }

    public function price(): float
    {
        return 5.0;
    }
}
