<?php
/*
|--------------------------------------------------------------------------
| Точка входа
|--------------------------------------------------------------------------
|
| Все запросы на мой сайт теперь будут ходить через этот файл
|
*/
require_once ('../vendor/autoload.php');

if(isset($_GET['controller'])){
    $cName="\App\Controllers\\" . $_GET['controller'];
    $mName = $_GET['method'];
} else {
    $cName="\App\Controllers\HomeController";
    $mName = "index";
}

$c = new $cName;
$c->$mName();

// Временно, что бы понять MVC и шаблоны
//$c = new \App\Controllers\HomeController();
//$c->index();