<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Cache;

class RelController extends Controller
{
    public function ManyToMany(){
        //$tags = Tag::all();
        // вывести все посты с метками
        //$posts = Tag::find(2)->posts;
        $posts = Tag::query()->where('id',1)->first()->posts;
        Debugbar::info($posts);

        $tags = Tag::query()->where('id', 1)->with('posts')->get();
        Debugbar::info($tags);

        foreach ($tags as $tag){
            foreach($tag->posts as $post){
                Debugbar::info($post->toArray());
            }
        }

        return view('home');
    }

    public function OneToMany(){
        $laravelPost = Category::query()->where('slug', 'laravel')->first()->posts;
        Debugbar::info($laravelPost->toArray());

        /*$laravelPost2 = Post::query()->where('category_id', 3)->get();
        Debugbar::info($laravelPost2->toArray());*/

        return view('home');
    }

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
        Debugbar::info($profile->toArray());
        Debugbar::info($profile->user->toArray());

        return view('home');
    }
}
