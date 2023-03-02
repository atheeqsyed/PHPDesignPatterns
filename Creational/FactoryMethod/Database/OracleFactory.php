<?php

/**
 * concrete mysql factory
 */

namespace DesignPatterns\Creational\FactoryMethod\Database;

class OracleFactory extends AbstractFactory
{
    public function getDb()
    {
        $oracle = new Oracle();
        $oracle->connect('127.0.0.1', 1521);
        return $oracle;
    }
}
/*$OracleFactory = new OracleFactory();
$oracle = $OracleFactory->getDb();*
