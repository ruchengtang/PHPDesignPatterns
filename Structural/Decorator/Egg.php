<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\Decorator;

class Egg extends CakeDecorator
{
    public function getDescription(): string
    {
        return $this->cake->getDescription() . ', egg';
    }

    public function price(): float
    {
        return (float) $this->cake->price() + 1.0;
    }
}
