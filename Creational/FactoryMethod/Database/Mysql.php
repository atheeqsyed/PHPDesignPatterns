<?php

/**
 * concrete product: mysql
 */

namespace DesignPatterns\Creational\FactoryMethod\Database;
class Mysql extends Database
{

    public function connect($host, $ip)
    {
        echo "mysql connect success\n";
    }
}