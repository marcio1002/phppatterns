<?php

namespace DesignPatterns\Behavioral\Command\Commands;

class CopyCommand extends Command
{
    public function execute(): mixed
    {
        $content =  $this->editor->getSelection();

        $this->app->clipboard = $content;

        return !!$content;
    }
}