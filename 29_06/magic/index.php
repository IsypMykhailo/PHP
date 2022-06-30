<?php

require_once ('MyMagic.php');

$obj = new MyMagic();

echo "<pre>\n";
$obj->doSomething('arg1','arg2');

//$obj->newVar = "newVal";
//echo $obj->getNoVar;

echo "<hr>";
print_r($obj);
echo "</pre>";