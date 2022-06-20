<?php

namespace DesignPatterns\Structural\Facade\Modules;

use Helpers\Console;

class StockController
{
    /**
     *
     * @param string $code
     * @return boolean
     */
    public function validateStock(string $code): bool
    {
        $products = require_once dirname(__DIR__, 1) . '/productSeed.php';

        $product = array_filter($products['products'], fn ($p) => $p['code'] == $code);

        return count($product) > 0;
    }

    /**
     *
     * @param string $code
     * @param string $clientCPF
     * @return boolean
     */
    public function withdraw(string $code, string $clientCPF): bool
    {
        Console::log(
            'Registro $code do cliente $clientCPF de retirada efetuado com sucesso!' . PHP_EOL, 
            Console::FG_GREEN
        );
        return true;
    }
}