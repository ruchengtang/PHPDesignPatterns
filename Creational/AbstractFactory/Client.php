<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\AbstractFactory;

class Client
{
    public function run()
    {
        $fastMarkdownFactory = new FastMarkdownFactory();
        $fastHtml = $fastMarkdownFactory->createHtml();
        echo $fastHtml->toHtml();
        $fastHtml->save();
        $fastPdf = $fastMarkdownFactory->createPdf();
        $fastPdf->save();
        $fastWord = $fastMarkdownFactory->createWord();
        $fastWord->save();

        $goodMarkdownFactory = new GoodMarkdownFactory();
        $goodHtml = $goodMarkdownFactory->createHtml();
        echo $goodHtml->toHtml();
        $goodHtml->save();
        $goodPdf = $goodMarkdownFactory->createPdf();
        $goodPdf->save();
        $goodWord = $goodMarkdownFactory->createWord();
        $goodWord->save();
    }
}
