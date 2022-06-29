<?php

class Table
{
    public function select(){
        return $this;
    }

    public function where(){
        return $this;
    }

    public function order(){
        return $this;
    }

    public function get(){
        return [];
    }
}

$tblPost = new Table();

$result = $tblPost
    ->select()
    ->where()
    ->where()
    ->order()
    ->get();