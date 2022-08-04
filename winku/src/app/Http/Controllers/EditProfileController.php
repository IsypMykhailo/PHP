<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use InvalidArgumentException;
use App\Helpers\ImageResize;

class EditProfileController extends Controller
{
    public function editAvatar(Request $request, $username){
        $username = Auth::user()->username;
        $user = Auth::user();
        $filename = $request->file('avatar')->store('public/users/'.date('FY'));
        //$filename = Storage::put('public/users/'.date('FY'),$request->file('avatar'));
        $filename = Storage::url($filename);
        $filename = str_replace('/storage','',$filename);
        /*$new_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($new_image, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
        $image = $new_image;*/
        (new \App\Helpers\ImageResize)->cutImage($filename, 400, 400);

        $user->avatar = $filename;
        $user->save();
        $this->redirect('/'.$username);
        return view('profile');
    }

    public function editBackground(Request $request, $username){
        $username = Auth::user()->username;
        $profile = Auth::user()->profile;
        $filename = $request->file('background')->store('public/profiles/'.date('FY'));
        //$filename = Storage::put('public/users/'.date('FY'),$request->file('avatar'));
        $filename = Storage::url($filename);
        $filename = str_replace('/storage','',$filename);
        /*$new_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($new_image, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
        $image = $new_image;*/
        (new \App\Helpers\ImageResize)->cutBackground($filename, 1366, 400);

        $profile->profileBackground = $filename;
        $profile->save();
        $this->redirect('/'.$username);
        return view('profile');
    }

    function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }
}
