<pre>
<?php
require_once ("vendor/autoload.php");

use Mike\Class1 as Mike;
use Pv021\Class1 as Pv;

$v = new \Mike\Class1();
echo $v;

$v2 = new \Pv021\Class1();
echo $v2;

$v3 = new Mike();
echo $v3;

$v4 = new Pv();
echo $v4;
?>
</pre>