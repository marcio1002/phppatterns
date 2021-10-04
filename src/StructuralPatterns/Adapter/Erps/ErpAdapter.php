<?php

namespace PHPpatterns\StructuralPatterns\Adapter\Erps;

use 
    PHPpatterns\StructuralPatterns\Adapter\Interfaces\ErpAdapterInterface,
    PHPpatterns\StructuralPatterns\Adapter\Erps\Erp,
    PHPpatterns\StructuralPatterns\Adapter\Models\Order;

class ErpAdapter  implements ErpAdapterInterface {

    private Erp $erp;
    private string $user;

    public function __construct(Erp $erp)
    {
        $this->erp = $erp;
    }

    public function generateToken(string $apiKey, string $user): string
    {
        $this->user = $user;
        return $this->erp->token($apiKey);
    }

    public function sendOrder(Order $order, string $apiToken): bool
    {
        $methods = ['getProducts', 'getNumberOrder', 'getTotalProducts'];
        $keys = ['produts', 'number_order', 'total_products'];

        $orderModified = [];

        foreach($methods as $i => $method)
                $orderModified[$keys[$i]] = $order->$method();
        
        echo "\e[00;44;4mUSER:\e[m\n\e[00;33;1m{$this->user}\e[m\n";
        return $this->erp->order($orderModified, $apiToken);
    }
}