<?php

namespace DesignPatterns\Behavioral\Mediator\Mediators;

use DesignPatterns\Behavioral\Mediator\Components\Button;
use DesignPatterns\Behavioral\Mediator\Components\ButtonClose;
use DesignPatterns\Behavioral\Mediator\Components\Checkbox;
use DesignPatterns\Behavioral\Mediator\Components\Component;
use DesignPatterns\Behavioral\Mediator\Components\Textbox;

use Helpers\Console;

class Dialog implements MediatorInterface
{
    private ?Button $button;
    private ?Checkbox $checkbox;
    private ?Textbox $textbox;
    private ?ButtonClose $buttonClose;

    public function notify(Component $sender, string $event): void
    {
        match (true) {
            $event === 'click' && $sender === $this->button => $this->notifyButton(),
            $event === 'close' && $sender === $this->buttonClose => $this->notifyCloseDialog(),
            $event === 'checked' && $sender === $this->checkbox => $this->notifyCheck(),
            $event === 'keypress' && $sender === $this->textbox => $this->notifyTextbox(),
            default => null
        };
    }

    public function setButton(Component $button): void
    {
        $this->button = $button;
    }

    public function setButtonClose(Component $buttonClose): void
    {
        $this->buttonClose = $buttonClose;
    }

    public function setCheckbox(Component $checkbox): void
    {
        $this->checkbox = $checkbox;
    }

    public function setTextbox(Component $textbox): void
    {
        $this->textbox = $textbox;
    }

    private function notifyButton()
    {
        Console::log("Button pressed" . PHP_EOL, Console::FG_GREEN);
    }

    private function notifyCheck()
    {
        Console::log(
            "Check pressed " . ($this->checkbox->checked ? 'true' : 'false') . PHP_EOL, 
            Console::FG_GREEN
        );
    }

    private function notifyTextbox()
    {
        Console::log("Textbox pressed {$this->textbox->text}" . PHP_EOL, Console::FG_GREEN);
    }

    private function notifyCloseDialog()
    {
        Console::log("Dialog closed" . PHP_EOL, Console::FG_GREEN);
    }
}