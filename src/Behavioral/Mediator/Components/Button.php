<?php
namespace DesignPatterns\Behavioral\Mediator\Components;

class Button extends Component
{
    public function click(): void
    {
        $this->mediator->notify($this, 'click');
    }
}