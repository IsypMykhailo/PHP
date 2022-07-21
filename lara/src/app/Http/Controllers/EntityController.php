<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    public function index(){
        $all = Entity::all();
        //dd($all);
        return view('entity.index', [
            'entities' => $all
        ]);
    }

    public function store(Request $request){
        //dd($request);
        $newEntity = new Entity;
        $newEntity->name = $request->name;
        $newEntity->url = $request->url;
        $newEntity->description = $request->description;
        $newEntity->save();
        dd($newEntity);
    }
}
