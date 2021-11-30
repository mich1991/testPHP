<?php 

declare(strict_types=1);

use DevCoder\DotEnv;

(new DotEnv(__DIR__ . '/.env'))->load();

echo getenv('APP_ENV');
// dev
echo getenv('DATABASE_DNS');
// mysql:host=localhost;dbname=test;

class Macho{

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function muah():void
    {
        echo('Hey babe I am ' . $this->name . ' ' . $this->surname);
    }
};

$jolero = new Macho('Georgio', 'Banani');
// $jolero->muah();
var_dump(getenv());
?>