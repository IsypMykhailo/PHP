<?php

namespace App\Controllers;

use App\Views\Render;

class AvatarController
{
    public function form(){
        Render::view('forms/avatar');
    }

    public function store(){
        var_dump($_FILES);
    }
}