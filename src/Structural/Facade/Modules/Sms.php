<?php

namespace DesignPatterns\Structural\Facade\Modules;

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
            echo "\e[00;34;1mSMS enviado com sucesso\e[m" . PHP_EOL;
            return true;
        }

        return false;
    }
}