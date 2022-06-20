<?php

namespace DesignPatterns\Structural\Facade\Modules;

use Helpers\Console;

class Email
{
    /**
     * @return boolean
     */
    public function validateService(): bool
    {
        return true;
    }

    /**
     * @param string $sendName
     * @param string $email
     * @param string $subject
     * @param string $message
     * @return boolean
     */
    public function send(string $sendName, string $email, string $subject, string $message): bool
    {
        Console::log('Email enviado com sucesso' . PHP_EOL, Console::FG_BLUE);
        return true;
    }
}