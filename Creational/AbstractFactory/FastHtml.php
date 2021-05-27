<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\AbstractFactory;

class FastHtml implements Html
{
    public function toHtml(): string
    {
        return 'Fast markdown to html. <br/>';
    }

    public function save()
    {
        echo 'Fast markdown save html. <br/>';
    }
}
