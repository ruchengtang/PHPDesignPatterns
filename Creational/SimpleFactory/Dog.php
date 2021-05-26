<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\SimpleFactory;

class Dog implements Animal
{
    public function say()
    {
        echo 'woof woof woof <br/>';
    }
}
