<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\AbstractFactory;

class FastMarkdownFactory implements MarkdownFactory
{
    public function createHtml()
    {
        return new FastHtml();
    }

    public function createPdf()
    {
        return new FastPdf();
    }

    public function createWord()
    {
        return new FastWord();
    }
}
