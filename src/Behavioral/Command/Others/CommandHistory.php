<?php

namespace DesignPatterns\Behavioral\Command\Others;

use DesignPatterns\Behavioral\Command\Commands\Command;

class CommandHistory
{
    /**
     *
     * @var \SplQueue<Command> 
     */
    private \SplQueue $history;

    public function __construct()
    {
        $this->history = new \SplQueue();
    }

    public function push(Command $command): void
    {
        $this->history->enqueue($command);
    }

    public function pop(): Command
    {
        return $this->history->dequeue();
    }

    public function isEmpty(): bool
    {
        return $this->history->isEmpty();
    }
}