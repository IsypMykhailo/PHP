<?php

namespace App\Controllers;

use App\Views\Render;

class HomeController
{
    public function index(){
        Render::view('home', []);
        //echo "Work";
    }
}