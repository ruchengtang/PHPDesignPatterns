<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\Decorator;

abstract class CakeDecorator implements Cake
{
    protected $cake;

    public function __construct(Cake $cake)
    {
        $this->cake = $cake;
    }
}
