<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\ClassAdapter;

class Client
{
    public function run()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        echo 'Book current page is ' . $book->getPage() . '<br>';

        $book = new KindleAdapter();

        $book->open();
        $book->turnPage();

        echo 'Book current page is ' . $book->getPage() . '<br>';
    }
}
