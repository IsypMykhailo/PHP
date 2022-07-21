<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    public function readAll(){
        $all = Entity::all();
        dd($all);
    }
}
