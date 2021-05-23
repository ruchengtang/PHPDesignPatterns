<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\Decorator;

class Sausage extends CakeDecorator
{
    public function getDescription(): string
    {
        return $this->cake->getDescription() . ', sausage';
    }

    public function price(): float
    {
        return (float) $this->cake->price() + 1.5;
    }
}
