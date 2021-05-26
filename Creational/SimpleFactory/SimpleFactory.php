<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\SimpleFactory;

class SimpleFactory
{
    public function createAnimal($type)
    {
        $animal = null;

        if ($type === 'dog') {
            $animal = new Dog();
        } elseif ($type === 'bee') {
            $animal = new Bee();
        } elseif ($type === 'duck') {
            $animal = new Duck();
        }

        return $animal;
    }
}
