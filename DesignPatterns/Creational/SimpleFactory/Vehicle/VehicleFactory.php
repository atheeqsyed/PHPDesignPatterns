<?php
/**
 * factory
 */
namespace DesignPatterns\Creational\SimpleFactory\Vehicle;

class VehicleFactory
{
    public static function getVehicle(string $type): AbstractVehicle
    {
        switch ($type) {
            case 'Luxurious':
                return new Luxurious(['Mercedes', 'BMW']);
            case 'Low-cost':
                return new Lowcost(['Fiat', 'Renault']);
            default:
                throw new \Exception('Type is not invalid');

        }
    }

}