<?php
namespace DesignPatterns\Behavioral\Observer\Subjects;

use 
    DesignPatterns\Behavioral\Observer\Interfaces\SubjectInterface,
    DesignPatterns\Behavioral\Observer\Interfaces\ObserverInterface;

class InventoryStock implements SubjectInterface
{
    private array $observers = [];

    public function updateStock(string $code, int $quantity): void
    {
        if($quantity == 0) {
            $this->notify($code);
        }
    }

    public function add(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function remove(ObserverInterface $observer): bool
    {
        $key = array_search($observer, $this->observers, true);

        if (!is_bool($key) && $key != false) {
            unset($this->observers[$key]);
            return true;
        }

        return false;
    }

    public function notify(string $code): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($code);
        }
    }
}