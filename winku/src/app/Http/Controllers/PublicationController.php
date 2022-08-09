<?php

namespace App\Http\Controllers;

use App\Helpers\Redirect;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function like(Request $request){
        Like::create([
            'publication_id'=>$request->publication_id,
            'user_id'=>$request->user_id
        ]);
        return response()->json(['success'=>count(Publication::query()->where('id',$request->publication_id)->first()->likes->all())]);
        //return redirect(url()->previous());
    }

    public function unlike(Request $request){
        Like::query()->where('publication_id', $request->get('publication_id'))->where('user_id', $request->get('user_id'))->first()->delete();
        return response()->json(['success'=>count(Publication::query()->where('id',$request->publication_id)->first()->likes->all())]);
    }

    public function comment(Request $request){
        Comment::create([
            'publication_id'=>$request->publication_id,
            'user_id'=>$request->user_id,
            'text'=>$request->text
        ]);
        $comment = Comment::query()->where('publication_id',$request->publication_id)->first();
        return response()->json(['success'=>$comment]);
    }
}
