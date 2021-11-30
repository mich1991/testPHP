<?php 
declare(strict_types=1);

namespace App;

require_once('./src/View.php');

const DEFAULTPAGE = 'home';
$pageParam = $_GET['page'] ?? DEFAULTPAGE ;

$view = new View();
$view->render(htmlentities($pageParam));