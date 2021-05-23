<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\Decorator;

class HandCake implements Cake
{
    public function getDescription(): string
    {
        return 'hand cake';
    }

    public function price(): float
    {
        return 3.0;
    }
}
