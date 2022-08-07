<?php

namespace App\Http\Controllers;

use App\Helpers\Redirect;
use App\Models\Like;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function like(Request $request){
        Like::create([
            'publication_id'=>$request->get('publication_id'),
            'user_id'=>$request->get('user_id')
        ]);
        return redirect(url()->previous());
    }
}
