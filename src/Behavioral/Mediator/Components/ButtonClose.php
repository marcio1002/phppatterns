<?php

namespace DesignPatterns\Behavioral\Mediator\Components;

class ButtonClose extends Component
{
    public function click(): void
    {
        $this->mediator->notify($this, 'close');
    }
}