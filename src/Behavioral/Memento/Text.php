<?php

namespace DesignPatterns\Behavioral\Memento;

use 
    DesignPatterns\Behavioral\Memento\TextCareTaker,
    DesignPatterns\Behavioral\Memento\TextMemento;

/**
 * The Text class
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

    /**
     * @param string $text
     * @return self
     */
    public function write(string $text): self
    {
        $this->careTaker->add(new TextMemento($this->text));
        $this->text .= $text;
        return $this;
    }

    /**
     * @return string
     */
    public function undo(): string
    {
        return $this->careTaker->returnLastState()->getText();
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}