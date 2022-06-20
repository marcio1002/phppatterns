<?php

namespace DesignPatterns\Structural\Facade\Modules;

use Helpers\Console;

class Sms
{
    private string $token;
    
    /**
     *
     * @param string $apiKey
     * @param string $password
     * @return string
     */
    public function generateToken(string $apiKey, string $password): string
    {
        $this->token = $generateToken = uniqid($apiKey) .  (string) (rand(0, 200 * strlen($password) ** 2) + time());

        return $generateToken;
    }

    public function send(string $apiToken, string $sendName, string $destTell, string $message): bool
    {
        if($this->token === $apiToken) {
            Console::log('SMS enviado com sucesso' . PHP_EOL, Console::FG_BLUE);
            return true;
        }

        return false;
    }
}