<?php

namespace DesignPatterns\Behavioral\Command\Others;

use DesignPatterns\Behavioral\Command\Commands\Command;

class App
{
    public string $clipboard = '';
    /**
     *
     * @var Array<Editor> array 
     */
    public array $editors = [];
    public Editor $active_editor;
    public CommandHistory $history;

    public function __construct()
    {
        $this->history = new CommandHistory();
    }

    public function executeCommand(Command $command): self
    {
        $command->execute();
        $this->history->push($command);

        return $this;
    }

    public function undo(): self
    {
        if (!$this->history->isEmpty())
            $this->history->pop()->undo();

        return $this;
    }
}
