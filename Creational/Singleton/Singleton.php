<?php

namespace Ruchengtang\PHPDesignPatterns\Creational\Singleton;

use Exception;

final class Singleton
{
    private static $instance = null;

    public static function getInstance() : Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {

    }

    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
}
