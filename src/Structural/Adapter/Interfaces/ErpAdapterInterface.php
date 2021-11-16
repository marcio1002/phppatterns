<?php

namespace DesignPatterns\Structural\Adapter\Interfaces;

use 
    DesignPatterns\Structural\Adapter\Erps\Erp,
    DesignPatterns\Structural\Adapter\Models\Order;

interface ErpAdapterInterface
{

    public function __construct(Erp $erp);

    public function generateToken(string $apiKey, string $user): string;

    public function sendOrder(Order $order, string $apiToken): bool;

}
