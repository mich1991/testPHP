<?php

declare(strict_types=1);

namespace App;



class DataBaseController{

    private static $dbusername;
    private static $dbpassword;
    private static $dbname;
    private array $request;

    public function __construct($name, $password, $dbname, $request){
        self::$dbusername = $name;
        self::$dbpassword = $password;     
        self::$dbname = $dbname;
        $this->request = $request;

        try {
            $pdo = new \PDO("mysql:host=localhost", self::$dbusername, self::$dbpassword);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
            $pdo->query("use " . $dbname);
            echo"success";
            var_dump($request);
        } catch (Excepetion $e) {
            throw $e;
        }
    }

    public function run(){
        
    }    
}
