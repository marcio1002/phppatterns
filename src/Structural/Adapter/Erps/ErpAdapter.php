<?php

namespace DesignPatterns\Structural\Adapter\Erps;

use 
    DesignPatterns\Structural\Adapter\Contracts\ErpAdapterInterface,
    DesignPatterns\Structural\Adapter\Erps\Erp,
    DesignPatterns\Structural\Adapter\Models\Order;

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
        echo "\e[00;44;4mUSER:\e[m\n\e[00;33;1m{$this->user}\e[m\n";
        return $this->erp->order($order->toArray(), $apiToken);
    }
}