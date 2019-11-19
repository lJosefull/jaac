<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StreamingController extends Controller
{
    public function createvideo(Request $request){

        $validator = Validator::make($request->all(),[
            'file'=>'mimetypes:video/avi,video/mpeg,video/quicktime'
             ]);

             if ($validator->fails()) {
                return back()
                ->withErrors($validator)
                ->withInput()
                ->with('flash_message_errors','Algun problema  Paso');
              }
            $url = request()->file->storeAs('uploads', request()->file->getClientOriginalName());

            $user=Auth::user()->id;
            $verifi=Video::where('user_id',$user)->count();
            if($verifi==0){

            $video= new Video();
            $video->user_id=$user;
            $video->url=$url;
            $video->save();
        }

        return redirect()->back();

    }
}
