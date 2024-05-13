<?php

namespace DesignPatterns\Behavioral\Command\Commands;

class PasteCommand extends Command
{
    public function execute(): mixed
    {
        $this->saveBackup();
        $this->editor->replaceSelection($this->app->clipboard);

        return true;
    }
}