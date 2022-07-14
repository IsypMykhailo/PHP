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

    public function blog(){
        Render::view('blog');
    }

    public function blog_single(){
        Render::view('blog-single');
    }

    public function gallery(){
        Render::view('gallery');
    }

    public function schedule(){
        Render::view('schedule');
    }
}