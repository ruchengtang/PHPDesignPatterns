<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\AbstractFactory;

class GoodWord implements Word
{
    public function save()
    {
        echo 'Good markdown save word. <br/>';
    }
}
