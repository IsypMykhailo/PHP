<?php
$a = [];
$a[0] = 1;
$a[1] = 2;
$a[2] = 3;

$a['key'] = 'value';

$a[] = 4;

foreach($a as $key => $element){
    echo "$key => $element ";
}

//for($i=0;$i<sizeof($a);$i++){
//    echo "$a[$i]";
//}
//var_dump($a);
//print_r($a);