<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\AbstractFactory;

class GoodMarkdownFactory implements MarkdownFactory
{
    public function createHtml()
    {
        return new GoodHtml();
    }

    public function createPdf()
    {
        return new GoodPdf();
    }

    public function createWord()
    {
        return new GoodWord();
    }
}
