<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\Singleton;

class Client
{
    public function run()
    {
        $instance1 = Singleton::getInstance();
        $instance2 = Singleton::getInstance();

        var_dump($instance1);
        echo '<br/>';
        var_dump($instance2);
        echo '<br/>';

        var_dump(@unserialize(serialize(Singleton::getInstance())));
    }
}
