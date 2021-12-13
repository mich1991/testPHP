<?php 
declare(strict_types=1);

namespace App;

require_once('./src/View.php');
require_once('./config/config.php');
require_once('./src/Models/User.php');
require_once('./src/Controllers/DataBaseController.php');

$request = [
    'get' => $_GET,
    'post' => $_POST
  ];
  

$dbController = new DataBaseController(DB_USER, DB_PASS,DB_NAME);

// $dbController->createDB();
const DEFAULTPAGE = 'home';
$pageParam = $_GET['page'] ?? DEFAULTPAGE ;

$view = new View();
$view->render(htmlentities($pageParam));