<?php
namespace DesignPatterns\Behavioral\Memento;

/**
 * The CareTaker class
 */
class TextCareTaker
{
    private array $textStates = [];


    public function add(TextMemento $memento): void
    {
        $this->textStates[] = $memento;
    }

    public function returnLastState(): TextMemento
    {
        return array_pop($this->textStates);
    }
}
