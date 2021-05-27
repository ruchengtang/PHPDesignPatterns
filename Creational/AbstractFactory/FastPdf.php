<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\AbstractFactory;

class FastPdf implements Pdf
{
    public function save()
    {
        echo 'Fast markdown save pdf. <br/>';
    }
}
