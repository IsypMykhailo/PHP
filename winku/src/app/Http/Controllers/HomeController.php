<?php

namespace App\Http\Controllers;

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


}
