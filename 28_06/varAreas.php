<?php

$varOut = 10;

f1();

function f1 (){
    GLOBAL $varOut;
    echo "varOut in Fun = " . $varOut . "<br>";
    echo "PHP_SELF = " . $_SERVER['PHP_SELF'];
}

function f2 ($var){
    var_dump($var);
    return $var;
}

$v1 = f2("string");
var_dump($v1);
$v2 = f2(10);
var_dump($v2);