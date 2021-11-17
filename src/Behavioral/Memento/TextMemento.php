<?php
namespace DesignPatterns\Behavioral\Memento;

/**
 * The Originator class
 */
class TextMemento
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }
}