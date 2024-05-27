<?php

namespace DesignPatterns\Behavioral\Mediator\Components;

class Checkbox extends Component
{
    public bool $checked = false;

    public function toggleChecked(bool $checked): void
    {
        $this->checked = $checked;

        $this->mediator->notify($this, 'checked');
    }
}