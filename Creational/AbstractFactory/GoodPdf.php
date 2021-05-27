<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\AbstractFactory;

class GoodPdf implements Pdf
{
    public function save()
    {
        echo 'Good markdown save pdf. <br/>';
    }
}
