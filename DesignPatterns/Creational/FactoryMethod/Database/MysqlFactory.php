<?php
/**
 * concrete mysql factory
 */
namespace DesignPatterns\Creational\FactoryMethod\Database;

class MysqlFactory extends AbstractFactory
{

    public function getDb()
    {
        $mysql = new Mysql();
        $mysql->connect('127.0.0.1', 6379);
        return $mysql;
    }
}

/*$MysqlFactory = new MysqlFactory();
$mysql = $MysqlFactory->getDb();*/

