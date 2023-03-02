<?php
/**
 * abstract facroty
 */
namespace DesignPatterns\Creational\FactoryMethod\Database;

abstract class AbstractFactory

{
    abstract public function getDb();
}