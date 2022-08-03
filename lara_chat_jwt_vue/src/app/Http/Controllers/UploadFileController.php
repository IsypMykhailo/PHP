<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use App\Http\Requests;

class UploadFileController extends Controller
{


    public function showUploadFile(Request $request) {
        $file = $request->file('image');

        $response = [];

        $response['File Name'] = $file->getClientOriginalName();
        $response['File Ext'] = $file->getClientOriginalExtension();
        $response['File Real Path'] =  $file->getRealPath();
        $response['File Size'] =  $file->getSize();
        $response['File Mime Type'] =  $file->getMimeType();

        Storage::disk()->put('public/users/'.date('FY'),$file);

        return $response;



//        //Display File Name
//        echo 'File Name: '.$file->getClientOriginalName();
//        echo '\n';

//        //Display File Extension
//        echo 'File Extension: '.$file->getClientOriginalExtension();
//        echo '\n';

//        //Display File Real Path
//        echo 'File Real Path: '.$file->getRealPath();
//        echo '\n';

//        //Display File Size
//        echo 'File Size: '.$file->getSize();
//        echo '\n';

//        //Display File Mime Type
//        echo 'File Mime Type: '.$file->getMimeType();

//        //Move Uploaded File
//        $destinationPath = 'uploads';
//        $file->move($destinationPath,$file->getClientOriginalName());
    }

}
