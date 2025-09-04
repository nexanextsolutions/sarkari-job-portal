<?php

namespace magichomes\Http\Controllers;

use Illuminate\Http\Request;
use magichomes\User;
use Mail;

class mailController extends Controller
{
    public function send()
    {
        // Mail::send(['text'=>'mail'],['name','MagicHomes'],function($message){
        //     $message->to('trickuweb@gmail.com','To Trickuweb')->subject('MagicHomes Password Reset');
        //     $message->from('trickuweb@gmail.com','To Trickuweb');
        // });
        $user = Auth::id();

        $posts = Post::where("user_id", "=", $user)
                        ->orderBy('created_at', 'desc')
                        ->onlyTrashed()
                        ->paginate(10);

        return view('admin.posts.trashed', ['posts'=>$posts]);

        return view('mail')
        ->with('user', User::orderBy('created_at', 'desc')->first());
    }
}
