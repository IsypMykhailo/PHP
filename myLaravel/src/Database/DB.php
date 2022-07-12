<?php

namespace App\Database;

use Config\MySql;
use PDO;
use PDOException;

class DB{
    private PDO $dbh;
    private function __construct()
    {
        try{
            $dbh = new PDO(
                'mysql:host=' . MySql::$mySql_Host
                . ';dbname=' . MySql::$mySql_Db,
                MySql::$mySql_User, MySql::$mySql_Password
            );
        }catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function query($sqlQuery){
        try{
            return $this->dbh->query($sqlQuery);
        }catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    private static DB $instance;

    public static function getInstance(){
        if(is_null(DB::$instance)) DB::$instance = new DB;
        return DB::$instance;
    }
}