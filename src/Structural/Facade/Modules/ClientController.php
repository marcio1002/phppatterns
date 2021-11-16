<?php

namespace DesignPatterns\Structural\Facade\Modules;

class ClientController
{
    /**
     *
     * @param string $cpf
     * @return null|array
     */
    public function find(string $cpf): ?array
    {
        $clients = require_once dirname(__DIR__, 1) . '/usersSeed.php';

        $client = array_filter($clients['users'], fn($users) => $users['cpf'] == $cpf);

        return count($client) > 0  ? array_pop($client) : null;
    }
}