<?php

declare(strict_types=1);

namespace App;

class DataBaseController{

    private static $dbusername;
    private static $dbpassword;
    private static $dbname;

    public function __construct($name, $password, $dbname){
        self::$dbusername = $name;
        self::$dbpassword = $password;     
        self::$dbname = $dbname;     
    }

    public function createDB():void{
        try {
            $pdo = new PDO("mysql:host=localhost", $this->dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
            $pdo->query("use $this->dbname");
            echo"success";
        } catch (Excepetion $e) {
            throw $e;
        }
    }
}
