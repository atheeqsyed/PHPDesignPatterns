<?php

/**
 * abstract vehicle class
 */
namespace DesignPatterns\Creational\SimpleFactory\Vehicle;

abstract class AbstractVehicle 
{
    protected $cars = [];

    public function __construct(array $cars)
    {
        $this->cars = $cars;
    }

    abstract public function call();

}