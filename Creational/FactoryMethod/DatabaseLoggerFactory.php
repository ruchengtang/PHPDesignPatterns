<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\FactoryMethod;

class DatabaseLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new DatabaseLogger();
    }
}
