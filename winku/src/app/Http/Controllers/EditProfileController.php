<?php

namespace App\Http\Controllers;

use App\Helpers\Redirect;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use InvalidArgumentException;
use App\Helpers\ImageResize;

class EditProfileController extends Controller
{
    public function editProfileBasic($username)
    {
        $username = Auth::user()->username;
        if (str_replace('/edit-profile-basic', '', $_SERVER['REQUEST_URI']) !== '/' . Auth::user()->username)
            return view('no_user');
        else
            return view('editProfileBasic');
    }

    public function editAvatar(Request $request, $username)
    {
        $username = Auth::user()->username;
        $user = Auth::user();
        $filename = $request->file('avatar')->store('public/users/' . date('FY'));
        //$filename = Storage::put('public/users/'.date('FY'),$request->file('avatar'));
        $filename = Storage::url($filename);
        $filename = str_replace('/storage', '', $filename);
        /*$new_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($new_image, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
        $image = $new_image;*/
        (new ImageResize)->cutImage($filename, 400, 400);

        $user->avatar = $filename;
        $user->save();
        (new Redirect)->redirect('/'.$username);
        //$this->redirect('/' . $username);
        return view('profile');
    }

    public function editBackground(Request $request, $username)
    {
        $username = Auth::user()->username;
        $profile = Auth::user()->profile;
        $filename = $request->file('background')->store('public/profiles/' . date('FY'));
        //$filename = Storage::put('public/users/'.date('FY'),$request->file('avatar'));
        $filename = Storage::url($filename);
        $filename = str_replace('/storage', '', $filename);
        /*$new_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($new_image, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
        $image = $new_image;*/
        (new ImageResize)->cutBackground($filename, 1366, 400);

        $profile->profileBackground = $filename;
        $profile->save();
        (new Redirect)->redirect('/'.$username);
        //$this->redirect('/' . $username);
        return view('profile');
    }

    public function updateProfileBasic(Request $request, $username)
    {
        $user = Auth::user();
        $username = Auth::user()->username;
        $profile = Auth::user()->profile;
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $profile->phone = $request->get('phone');
        $profile->location = $request->get('location');
        $profile->description = $request->get('description');
        $profile->interests = $request->get('interests');
        $profile->languages = $request->get('languages');
        $user->save();
        $profile->save();
        $username = Auth::user()->username;
        (new Redirect)->redirect('/'.$username);
        //$this->redirect('/' . $username);
        return view('profile');
    }

    public function changePassword($username)
    {
        $username = Auth::user()->username;
        if (str_replace('/changePassword', '', $_SERVER['REQUEST_URI']) !== '/' . Auth::user()->username)
            return view('no_user');
        else
            return view('changePassword');
    }

    public function updatePassword(Request $request, $username){
        $user = Auth::user();
        $username = Auth::user()->username;
        $user->password = Hash::make($request->get('password'));
        $user->save();
        (new Redirect)->redirect('/'.$username);
        //$this->redirect('/' . $username);
        return view('profile');
    }

    /*function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }*/
}
