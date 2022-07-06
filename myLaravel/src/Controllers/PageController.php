<?php

namespace App\Controllers;

use App\Views\Render;

class PageController
{
    public function about(){
        Render::view('about');
    }

    public function contact(){
        Render::view('contact');
    }
}