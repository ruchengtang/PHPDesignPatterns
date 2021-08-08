<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\SimpleFactory;

class Bee implements Animal
{
    public function say()
    {
        echo 'buzz buzz buzz <br/>';
    }
}
