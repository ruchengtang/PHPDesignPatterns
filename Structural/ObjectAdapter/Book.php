<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\ObjectAdapter;

interface Book
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}
