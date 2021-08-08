<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\ClassAdapter;

class Kindle implements EBook
{
    private $page = 1;
    private $totalPages = 100;

    public function unlock()
    {

    }

    public function pressNext()
    {
        $this->page++;
    }

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return int[]
     */
    public function getPage()
    {
        return [$this->page, $this->totalPages];
    }
}
