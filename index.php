<?php 
declare(strict_types=1);

namespace App;


require_once('./src/View.php');
require_once('./src/Controllers/DataBaseController.php');
include('./src/Utils/dotEnvParser.php');

// use Section
use App\DotEnv;
(new DotEnv(__DIR__ . '/.env'))->load();

$dbController = new DataBaseController(getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD'), getenv('DATABASE_NAME'));

const DEFAULTPAGE = 'home';
$pageParam = $_GET['page'] ?? DEFAULTPAGE ;

$view = new View();
$view->render(htmlentities($pageParam));