<?php
require_once('Base.php');
class Child extends Base
{
    public function sayMay(){
        echo " May ";
    }

    public function __toString()
    {
        return " Child string";
    }
}