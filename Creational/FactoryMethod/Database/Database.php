<?php
/**
 * abstract db prduct
 */

namespace DesignPatterns\Creational\FactoryMethod\Database;
abstract class Database
{
    abstract public function connect($host, $ip);

    public function select($sql)
    {
        echo "execute success";
    }
}