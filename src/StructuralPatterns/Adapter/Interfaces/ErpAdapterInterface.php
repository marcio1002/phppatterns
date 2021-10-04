<?php

namespace PHPpatterns\StructuralPatterns\Adapter\Interfaces;

use 
    PHPpatterns\StructuralPatterns\Adapter\Erps\Erp,
    PHPpatterns\StructuralPatterns\Adapter\Models\Order;

interface ErpAdapterInterface
{

    public function __construct(Erp $erp);

    public function generateToken(string $apiKey, string $user): string;

    public function sendOrder(Order $order, string $apiToken): bool;

}
