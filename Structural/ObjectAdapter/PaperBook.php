<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\ObjectAdapter;

class PaperBook implements Book
{
    private $page;

    public function turnPage()
    {
        $this->page++;
    }

    public function open()
    {
        $this->page = 1;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
