<?php

namespace App\Controllers;

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

        Render::view('home', $varBug);
        //echo "Work";
    }

}