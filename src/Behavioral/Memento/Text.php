<?php

namespace DesignPatterns\Behavioral\Memento;

use 
    DesignPatterns\Behavioral\Memento\TextCareTaker,
    DesignPatterns\Behavioral\Memento\TextMemento;

/**
 * The Memento class
 */
class Text
{
    private string $text;
    private TextCareTaker $careTaker;

    public function __construct()
    {
        $this->careTaker = new TextCareTaker();
        $this->text = '';
    }

    public function write(string $text): self
    {
        $this->careTaker->add(new TextMemento($this->text));
        $this->text .= $text;
        return $this;
    }

    public function undo(): string
    {
        return $this->careTaker->returnLastState()->getText();
    }

    public function getText(): string
    {
        return $this->text;
    }
}