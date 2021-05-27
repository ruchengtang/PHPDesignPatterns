<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\AbstractFactory;

interface MarkdownFactory
{
    public function createHtml();

    public function createPdf();

    public function createWord();
}
