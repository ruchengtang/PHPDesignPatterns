<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\ObjectAdapter;

class EBookAdapter implements Book
{
    private $eBook;

    public function __construct(EBook $eBook)
    {
        $this->eBook = $eBook;
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function open()
    {
        $this->eBook->unlock();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}
