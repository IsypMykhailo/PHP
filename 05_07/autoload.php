<?php

spl_autoload_register(function ($class_name) {
    echo " \n Ищу класс: " . $class_name . "\n";
    require_once ("lib/" . $class_name . ".php");
});