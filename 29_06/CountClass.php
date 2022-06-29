<?php

class CountClass
{
    static private $count = 0;
    public function __construct(){
        self::$count++;
        echo "Count " . self::$count;

        $this->f1();
        self::f2();
        CountClass::f2();
    }

    public function f1(){}
    public static function f2(){}
}

$c = new CountClass();