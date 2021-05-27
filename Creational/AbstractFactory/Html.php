<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\AbstractFactory;

interface Html
{
    public function toHtml(): string;

    public function save();
}
