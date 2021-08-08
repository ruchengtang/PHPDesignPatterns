<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\FactoryMethod;

class Client
{
    public function run()
    {
        $fileLoggerFactory = new FileLoggerFactory();
        $fileLogger = $fileLoggerFactory->createLogger();
        $fileLogger->writeLog('Be yourself; everyone else is already taken.');

        $databaseLoggerFactory = new DatabaseLoggerFactory();
        $databaseLogger = $databaseLoggerFactory->createLogger();
        $databaseLogger->writeLog('But how could you live and have no story to tell?');
    }
}
