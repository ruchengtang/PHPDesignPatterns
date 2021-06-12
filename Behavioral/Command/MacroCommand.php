<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Command;

class MacroCommand implements Command
{
    private $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {
        foreach ($this->commands as $key => $command) {
            $command->execute();
        }
    }

    public function undo()
    {
        foreach ($this->commands as $key => $command) {
            $command->undo();
        }
    }
}
