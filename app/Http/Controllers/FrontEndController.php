<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Reg;
use Session;
use Auth;

class FrontEndController extends Controller
{
    public function index()
    {

        $govts = Post::where("category", "like", "Govt Job")
            ->orderBy('created_at', 'desc')
            ->paginate(25);

        $privates = Post::where("category", "like", "Private Job")
            ->orderBy('created_at', 'desc')
            ->paginate(30);

        $results = Post::where("category", "like", "Result")
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('index')
            ->with('govts', $govts)
            ->with('privates', $privates)
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('four_post', Post::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
            ->with('five_post', Post::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
            ->with('six_post', Post::orderBy('created_at', 'desc')->skip(5)->take(1)->get()->first())
            ->with('seven_post', Post::orderBy('created_at', 'desc')->skip(6)->take(1)->get()->first())
            ->with('eight_post', Post::orderBy('created_at', 'desc')->skip(7)->take(1)->get()->first())
            ->with('nine_post', Post::orderBy('created_at', 'desc')->skip(8)->take(1)->get()->first())
            ->with('results', $results);

        // $posts = Post::where("category", "like", "sell")
        // ->orderBy('created_at', 'desc')
        // ->paginate(5);

        // return view('index')
        //             ->with('first_post', Post::orderBy('created_at', 'desc')->first())
        //             ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
        //             ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
        //             ->with('fourth_post', Post::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
        //             ->with('fifth_post', Post::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
        //             ->with('rents', $rents)
        //             ->with('posts', Post::all()
        //             ->paginate(5);

        // $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        // // return view('admin.posts.index')->with('posts', Post::all());
        // return view('index', ['posts'=>$posts]);
    }

    // public function singlepost($slug) 
    // {


    //     $post = Post::where('slug', $slug)->first();

    //     $next_id = Post::where('id', '>', $post->id)->min('id');
    //     $prev_id = Post::where('id', '<', $post->id)->max('id');

    //     return view('single')->with('post', $post)
    //                         ->with('project_name', $post->title)
    //                         ->with('next', Post::find($next_id))   
    //                         ->with('prev', Post::find($prev_id));
    // }

    public function singlepost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('onlysingle')->with('post', $post);
    }

    public function private()
    {
        $posts = Post::latest()
            ->where("category", "like", "Private Job")
            ->paginate(50);
        return view('private', ['posts' => $posts]);
    }
    public function govt()
    {
        $posts = Post::latest()
            ->where("category", "like", "Govt Job")
            ->paginate(50);
        return view('private', ['posts' => $posts]);
    }
    public function onlyresult()
    {
        $posts = Post::latest()
            ->where("category", "like", "Result")
            ->paginate(50);
        return view('onlyresult', ['posts' => $posts]);
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function appprivacy()
    {
        return view('app-privacy-policy');
    }

    public function appterm()
    {
        return view('app-terms');
    }

    public function disclaimer()
    {
        return view('disclaimer');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function reg($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('reg')->with('post', $post);
    }


}
