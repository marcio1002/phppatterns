<?php

namespace DesignPatterns\Behavioral\Command\Commands;

class UndoCommand extends Command
{
    public function execute(): mixed
    {
        $this->app->undo();

        return true;
    }
}