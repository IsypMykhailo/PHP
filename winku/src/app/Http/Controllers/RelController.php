<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\User;

class RelController
{
    public function OneToOne(){
        $allUser = User::all();
        //dd($allUser);
        $firstUser = User::all()->first();
        //dd($firstUser);

        //$allPost = Post::all()->first();
        //$a = Post::query()->first();
        //$a = Post::query()->take(1)->get();
        //dd($a);

        /*$mikeis = User::query()
            ->where('email', 'mikeisisyp@gmail.com')
            //->with('profile')
            //->get();
            ->first();

        //$mikeis = User::find(1);
        Debugbar::info($mikeis->toArray());
        echo $mikeis->profile;
        Debugbar::info($mikeis->toArray());*/

        /*$mikeis = Cache::get('mikeis', function(){
            $putToCache = User::query()
                ->where('email', 'mikeisisyp@gmail.com')
                ->with('profile')
                ->first();

            Cache::put('mikeis', $putToCache, 360);

            return $putToCache;
        });*/

        //Cache::forget('mikeis');
        //Debugbar::info($mikeis->toArray());

        $profile = Profile::find(1);
        echo $profile->toArray();
        echo $profile->user->toArray();

        return view('home');
    }
}
