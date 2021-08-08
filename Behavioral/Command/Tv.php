<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Command;

class Tv
{
    private $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on()
    {
        echo sprintf('turn on the tv in the %s<br/>', $this->location);
    }

    public function off()
    {
        echo sprintf('turn off the tv in the %s<br/>', $this->location);
    }

    public function setVolume($value)
    {
        echo sprintf('Set the volume of the TV in the %s to %s<br/>', $this->location, $value);
    }
}
