<?php

namespace DesignPatterns\Structural\Facade;

use DesignPatterns\Structural\Facade\Modules\{
  ClientController,
  StockController,
  Email,
  Sms
};


class LibraryFacades
{
    /**
     * @param string $codeProduct
     * @param string $clientCPF
     * 
     * @return boolean
     */
    public static function makeBook(string $codeProduct, string $clientCPF): bool
    {
        $stock = new StockController();

        if($stock->validateStock($codeProduct)) {
            return $stock->withdraw($codeProduct, $clientCPF);
        }

        return false;
    }

    public static function sendMessage(string $clientCPF, string $codeProduct, string $apiKey, string $password)
    {
        $sms = new Sms();
        $mail = new Email();
        $clientController = new ClientController();

        $client = $clientController->find($clientCPF);
        $hasServiceEmail = $mail->validateService();
        $token = $sms->generateToken($apiKey, $password);

        if(!$client || !$hasServiceEmail || !$token) {
            return false;
        }

        $mail->send(
            $client['name'],
            $client['email'],
            "Aviso da biblioteca!",
            "{$client['name']}, o produto $codeProduct foi retirado do estoque com sucesso!"
        );

        $sms->send(
            $token,
            $client['name'],
            '45353454354',
            "{$client['name']}, o produto $codeProduct foi retirado do estoque com sucesso!"
        );

        return true;
    }
}