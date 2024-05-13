<?php

namespace DesignPatterns\Behavioral\Command\Commands;

use DesignPatterns\Behavioral\Command\Others\App;
use DesignPatterns\Behavioral\Command\Others\Editor;

abstract class Command
{
    protected string $text_backup = '';

    abstract public function execute(): mixed;

    public function __construct(protected App $app, protected Editor $editor)
    {
    }

    public function saveBackup(): void
    {
        $this->text_backup = $this->editor->getSelection();
    }

    public function undo(): void
    {
        $this->editor->replaceSelection($this->text_backup);
    }
}
