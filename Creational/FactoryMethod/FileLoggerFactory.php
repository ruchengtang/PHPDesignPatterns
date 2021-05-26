<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\FactoryMethod;

class FileLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new FileLogger();
    }
}
