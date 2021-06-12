<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Command;

class TvOffCommand implements Command
{
    private $tv;

    public function __construct(Tv $tv)
    {
        $this->tv = $tv;
    }

    public function execute()
    {
        $this->tv->off();
    }

    public function undo()
    {
        $this->tv->on();
        $this->tv->setVolume(36);
    }
}
