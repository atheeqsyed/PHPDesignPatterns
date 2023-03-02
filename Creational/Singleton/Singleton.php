<?php

class Singledp
{
    private static $instance = NULL;
    public $dbconn;

    private function __construct()
    {
        echo "DB Connected <br/>";
    }

    public static function getInstance()
    {
        if (self::$instance == NULL) {
            self::$instance = new static();
        } else {
            echo "already connected <br>";
        }
        return self::$instance;
    }

    public static function getDBConn()
    {
        try {
            $db = self::$instance;
            $db->dbconn = new mysqli('localhost', 'magento', 'magento', 'talis');
            return $db->dbconn;
        } catch (Exception $e) {
            echo "error:-" . $e->getMessage();
        }
    }
}

$obj = Singledp::getDBConn();

$sql = "select * from core_config_data";
$result =$obj->query($sql);

$response = $result->fetch_all();
echo "<pre>"; print_r($response);

/*
$obj = new Singledp();
$obj = new Singledp();
$obj = new Singledp(); */