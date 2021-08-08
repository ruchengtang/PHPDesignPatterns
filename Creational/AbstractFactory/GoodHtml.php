<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\AbstractFactory;

class GoodHtml implements Html
{
    public function toHtml(): string
    {
        return 'Good markdown to html. <br/>';
    }

    public function save()
    {
        echo 'Good markdown save html. <br/>';
    }
}
