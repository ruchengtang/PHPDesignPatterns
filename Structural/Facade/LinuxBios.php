<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\Facade;

class LinuxBios implements Bios
{
    public function execute()
    {
        echo 'execute' . '<br>';
    }

    public function waitForKeyPress()
    {
        echo 'wait for key press' . '<br>';
    }

    public function launch(OperatingSystem $os)
    {
        echo $os->getName() . ' launch' . '<br>';
    }

    public function powerDown()
    {
        echo 'power down' . '<br>';
    }
}
