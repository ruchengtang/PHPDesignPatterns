<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Command;

class Light
{
    private $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on()
    {
        echo sprintf('turn on the light in the %s<br/>', $this->location);
    }

    public function off()
    {
        echo sprintf('turn off the light in the %s<br/>', $this->location);
    }
}
