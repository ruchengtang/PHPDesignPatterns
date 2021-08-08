<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\Facade;

class Client
{
    public function run()
    {
        $bios = new LinuxBios();
        $os = new Linux();
        $facade = new Facade($bios, $os);

        $facade->turnOn();
        $facade->turnOff();
    }
}
