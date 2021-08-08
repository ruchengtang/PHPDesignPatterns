<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\Facade;

class Facade
{
    private $bios;
    private $operatingSystem;

    public function __construct(Bios $bios, OperatingSystem $operatingSystem)
    {
        $this->bios = $bios;
        $this->operatingSystem = $operatingSystem;
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->operatingSystem);
    }

    public function turnOff()
    {
        $this->operatingSystem->halt();
        $this->bios->powerDown();
    }
}
