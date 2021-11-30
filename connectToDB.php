<?php 
declare(strict_types=1);
// Includes/require section
include('./src/Utils/dotEnvParser.php');

// use Section
use App\DotEnv;

(new DotEnv(__DIR__ . '/.env'))->load();

echo getenv('DATABASE_DNS');
// mysql:host=localhost;dbname=test;

?>