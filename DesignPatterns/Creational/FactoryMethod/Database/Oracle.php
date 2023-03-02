<?php


/**
 * concrete product: mysql
 */

namespace DesignPatterns\Creational\FactoryMethod\Database;
class Oracle extends Database
{

    public function connect($host, $ip)
    {
        echo "oracle connect success\n";
    }
}