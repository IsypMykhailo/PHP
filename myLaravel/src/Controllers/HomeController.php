<?php

namespace App\Controllers;

use App\Database\DB;
use App\Views\Render;

class HomeController
{
    /**
     * Построить главную страницу сайта
     */
    public function index(){

        $varBug['names'] = [
            "Вася", "Петя", "Коля"
        ];
        $varBug['header']['pageName'] = "Главная страница";

        $users = DB::getInstance()->query('SELECT * from users');

        echo "<pre>";
        print_r($users);

        foreach($users as $row) {
            print_r($row);
        }

        echo "</pre>";

        Render::view('home', $varBug);
        //echo "Work";
    }

}