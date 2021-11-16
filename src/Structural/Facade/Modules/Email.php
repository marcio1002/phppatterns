<?php

namespace DesignPatterns\Structural\Facade\Modules;

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
        echo "\e[00;32;1mEmail enviado com sucesso!\e[m" . PHP_EOL;
        return true;
    }
}