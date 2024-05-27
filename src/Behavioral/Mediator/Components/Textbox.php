<?php

namespace DesignPatterns\Behavioral\Mediator\Components;

class Textbox extends Component
{
    public string $text = '';

    public function keypress(string $text): void
    {
        $this->text .= $text;

        $this->mediator->notify($this, 'keypress');
    }

    public function clear(): void
    {
        $this->text = '';
    }
}