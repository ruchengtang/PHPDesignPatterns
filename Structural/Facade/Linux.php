<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\Facade;

class Linux implements OperatingSystem
{
    public function halt()
    {
        echo 'halt' . '<br>';
    }

    public function getName(): string
    {
        return 'Linux';
    }
}
