<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\Decorator;

class Lettuce extends CakeDecorator
{
    public function getDescription(): string
    {
        return $this->cake->getDescription() . ', lettuce';
    }

    public function price(): float
    {
        return (float) $this->cake->price() + 0.5;
    }
}
