<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\SimpleFactory;

class Client
{
    public function run()
    {
        $animalFactory = new SimpleFactory();

        $dog = $animalFactory->createAnimal('dog');
        $dog->say();

        $bee = $animalFactory->createAnimal('bee');
        $bee->say();

        $duck = $animalFactory->createAnimal('duck');
        $duck->say();
    }
}
