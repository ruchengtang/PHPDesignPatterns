<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Command;

interface Command
{
    public function execute();

    public function undo();
}
