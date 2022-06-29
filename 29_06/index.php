<?php
require_once ('FirstClass.php');

//$c = new FirstClass();
$c = FirstClass::getInstance();
$c->var = "new Var";
$c->FirstClass();

function f1($c){
    $c->someVar = "changeInFun";
}
?>

<pre><?php
    print_r($c);
?></pre>

<?php
f1($c);
?>

<pre><?php
    print_r($c);
    ?></pre>