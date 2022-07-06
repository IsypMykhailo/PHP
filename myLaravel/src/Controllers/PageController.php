<?php

namespace App\Controllers;

class PageController
{
    public function about(){
        Render::view('about');
    }

    public function contact(){
        Render::view('contact');
    }
}