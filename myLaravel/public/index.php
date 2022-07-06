<?php

require_once ('../vendor/autoload.php');

// Временно, что бы понять MVC и шаблоны
$c = new \App\Controllers\HomeController();
$c->index();