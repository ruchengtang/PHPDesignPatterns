<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\FactoryMethod;

class FileLogger implements Logger
{
    public function writeLog(string $message)
    {
        echo 'File logging: ' . $message . '<br/>';
    }
}
