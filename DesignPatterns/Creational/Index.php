<?php
// Creational Design Patternn
use DesignPatterns\Creational\SimpleFactory\AbstractVehicle\ParserFactory;

return __DIR__ . './../../vendor/autoload.php';
function simpleFactory()
{
    $luxurious = \DesignPatterns\Creational\SimpleFactory\VehicleFactory::getVehicle('Luxurious');
    echo $luxurious->call() . '<br>';

    $lowCost = \DesignPatterns\Creational\SimpleFactory\VehicleFactory::getVehicle('low-Cost');
    echo $lowCost->call() . '<br>';
}

simpleFactory();
