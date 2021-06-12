<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Command;

class TvOnCommand implements Command
{
    private $tv;

    public function __construct(Tv $tv)
    {
        $this->tv = $tv;
    }

    public function execute()
    {
        $this->tv->on();
        $this->tv->setVolume(36);
    }

    public function undo()
    {
        $this->tv->off();
    }
}
