<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\AbstractFactory;

class FastWord implements Word
{
    public function save()
    {
        echo 'Fast markdown save word. <br/>';
    }
}
