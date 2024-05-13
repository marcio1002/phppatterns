<?php

namespace DesignPatterns\Behavioral\Command\Commands;

class CutCommand extends Command 
{
    public function execute(): mixed
    {
        $this->saveBackup();
        $this->app->clipboard = $this->editor->getSelection();

        $this->editor->deleteSelection();

        return true;
    }
}