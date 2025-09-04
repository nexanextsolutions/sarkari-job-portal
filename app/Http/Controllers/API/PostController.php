<?php

namespace magichomes\Http\Controllers\API;

use Illuminate\Http\Request;
use magichomes\Http\Controllers\Controller;
use magichomes\Post; 


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function postdata()
    {
        // $data = Post::latest()->get();
        $data = Post::select('id','examname','vacancy','gallery_one')
       ->orderBy('created_at', 'desc')->get();
        return response()->json($data); 
    }
    public function postresults()
    {
        // $data = Post::latest()->get();
        $data = Post::select('id','examname','vacancy','gallery_one')
        ->where("category", "like", "Result")
       ->orderBy('created_at', 'desc')->get();
        return response()->json($data); 

        // $posts = Post::where("examname", "like", "%".request("examquery")."%")
        // ->orderBy('created_at', 'desc')
        // ->paginate(10);
    }
    public function postrailway()
    {
        // $data = Post::latest()->get();
        $data = Post::select('id','examname','vacancy','gallery_one')
        ->where("jobbyprof", "like", "Railway")
       ->orderBy('created_at', 'desc')->get();
        return response()->json($data); 
    }
    public function postbank()
    {
        // $data = Post::latest()->get();
        $data = Post::select('id','examname','vacancy','gallery_one')
        ->where("jobbyprof", "like", "Banking")
       ->orderBy('created_at', 'desc')->get();
        return response()->json($data); 
    }
    public function postadmitcards()
    {
        // $data = Post::latest()->get();
        $data = Post::select('id','examname','vacancy','gallery_one')
        ->where("category", "like", "Admit Card")
       ->orderBy('created_at', 'desc')->get();
        return response()->json($data); 
    }
    public function postgov()
    {
        // $data = Post::latest()->get();
        $data = Post::select('id','examname','vacancy','gallery_one')
        ->where("jobbyprof", "like", "Government")
       ->orderBy('created_at', 'desc')->get();
        return response()->json($data); 
    }

    // public function citydata()
    // {

    //     $data = City::select('city')
    //     ->orderBy('created_at', 'desc')->get();

    //     return response()->json($data);
    // } 

}
