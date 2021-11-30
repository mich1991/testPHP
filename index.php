<?php 
declare(strict_types=1);

namespace App;

require_once('./src/View.php');

$pageParam = htmlentities($_GET['page']) ?? 'home';

$view = new View();
$view->render($pageParam);