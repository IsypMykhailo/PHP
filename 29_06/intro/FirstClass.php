<?php

class FirstClass
{
    static private $instance = null;
    static public function getInstance (){
        if(is_null(self::$instance)){
            self::$instance = new FirstClass();
        }
        return self::$instance;
    }

    public function __construct(){
        echo __FUNCTION__ . " <br>";
    }

    public function FirstClass(){
        echo __FUNCTION__ . " <br>";
    }
    private $priv = "Private";
    protected $prot = "Protected";
    public $pub = "Public";
    var $someVar = "SomeVar";
}