<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\FactoryMethod;

class DatabaseLogger implements Logger
{
    public function writeLog(string $message)
    {
        echo 'Database logging: ' . $message;
    }
}
