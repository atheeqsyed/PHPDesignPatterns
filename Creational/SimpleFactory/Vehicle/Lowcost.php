<?php
/**
 * concrete LowCost class
 */
namespace DesignPatterns\Creational\SimpleFactory\Vehicle;

class Lowcost extends AbstractVehicle
{
    public function call()
    {
        return 'A ' . $this->cars[array_rand($this->cars)] .
            'car is coming to get you (low-cost)';
    }

}