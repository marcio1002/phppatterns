<?php

namespace DesignPatterns\Behavioral\Command\Others;

class Editor
{
    private string $text = '';


    public function getSelection(): string
    {
        return $this->text;
    }

    public function deleteSelection(): void
    {
        $this->text = '';
    }

    public function replaceSelection(string $text): void
    {
        $this->text = $text;
    }
}
