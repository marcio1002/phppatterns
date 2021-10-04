<?php

namespace PHPpatterns\StructuralPatterns\Adapter\Erps;

class Erp
{

    private $token;

    public function token($apiKey)
    {
        $this->token = $generateToken = uniqid($apiKey) .  (string) (rand(0, 200 * 4 ** 2) + time());

        return $generateToken;
    }

    public function order($order, $apiToken)
    {
        if (($this->token <=> $apiToken) == 0) {
            foreach($order as $key => $item) {
                if(is_array($item))
                    echo "\e[00;44;4m{$key}:\e[m\n\e[00;33;1m"  . join("\n", $item) . "\e[m \n";
                else 
                    echo "\e[00;44;4m{$key}:\e[m\n\e[00;33;1m{$item}\e[m \n";
            }
            return true;
        }

        return false;
    }
}
