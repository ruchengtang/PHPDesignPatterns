<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\SimpleFactory;

class Duck implements Animal
{
    public function say()
    {
        echo 'quack quack quack <br/>';
    }
}
