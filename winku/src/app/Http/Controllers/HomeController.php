<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Follower;
use App\Models\Like;
use App\Models\Profile;
use App\Models\Publication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function terms()
    {
        return view('terms');
    }

    public function notifications(){
        return view('notifications');
    }

    public function messages(){
        return view('messages');
    }

    public function deleteNotification(Request $request){
        $notification = $request->get('notification');
        $notification = \App\Models\Notification::query()->where('id',$notification)->first();
        $notification->read_at = date('Y-m-d h:i:s');
        $notification->save();
        return redirect(url()->previous());
    }

    public function search()
    {
        return view('search');
    }

    public function search_form(Request $request){
        $users = User::query()->where('username', 'like', '%' . $request->username . '%')->get();
        return response()->json(['success'=>$users]);
    }

    public function profile($username){
        if(User::query()->where('username', $username)->first() === null){
            return view('no_user');
        }
        else {
            $username = Auth::user()->username;
            //$username = User::query()->where('username', '===', '');
            return view('profile');
        }
    }

    public function emailConfirmation($username){
        $user = User::query()->where('username', $username)->first();
        $user->email_verified_at = date('Y-m-d h:i:s a', time());
        $user->save();
        return view('email_success');
    }

    public function deleteAccount($username){
        if ($username !== Auth::user()->username)
            return view('no_user');
        else{
            $username=Auth::user()->username;
            Profile::query()->where('user_id',Auth::user()->id)->first()->delete;
            Like::query()->where('user_id',Auth::user()->id)->delete();
            Comment::query()->where('user_id',Auth::user()->id)->delete();
            $publications = Publication::query()->where('user_id',Auth::user()->id)->get();
            foreach($publications as $publication) {
                Like::query()->where('publication_id', $publication->id)->first()->delete();
                Comment::query()->where('publication_id', $publication->id)->first()->delete();
                Publication::query()->where('id', $publication->id)->first()->delete();
            }
            Follower::query()->where('follower_id',Auth::user()->id)->delete();
            Follower::query()->where('user_id',Auth::user()->id)->delete();
            User::query()->where('username',$username)->first()->delete();
            return view('welcome');
        }
    }


}
