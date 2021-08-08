<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\ObjectAdapter;

class Client
{
    public function run()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        echo 'Book current page is ' . $book->getPage() . '<br>';

        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        echo 'Book current page is ' . $book->getPage() . '<br>';
    }
}
