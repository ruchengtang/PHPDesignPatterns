<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\ClassAdapter;

class KindleAdapter extends Kindle implements Book
{
    public function turnPage()
    {
        $this->pressNext();
    }

    public function open()
    {
        $this->unlock();
    }

    public function getPage()
    {
        return parent::getPage()[0];
    }
}
