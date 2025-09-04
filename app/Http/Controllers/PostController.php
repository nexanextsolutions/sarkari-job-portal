<?php

namespace magichomes\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use magichomes\Post;
use magichomes\User;
use Session;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */

    public function result()
    {
        $posts = Post::where("jobbyprof", "like", "%" . request("query1") . "%")
            ->orwhere("jobbyedu", "like", "%" . request("query1") . "%")
            ->orderBy('created_at', 'desc')
            ->paginate(25);

        return view('result', ['posts' => $posts->appends(request()->input())]);
    }

    public function postdata()
    {
        $data = Post::latest()->get();
        return response()->json($data);
    }

    public function examsearch()
    {
        $posts = Post::where("examname", "like", "%" . request("examquery") . "%")
            ->orderBy('created_at', 'desc')
            ->paginate(25);

        return view('result', ['posts' => $posts->appends(request()->input())]);
    }

    public function rents()
    {
        $posts = Post::where("category", "like", "rent")
            ->orderBy('created_at', 'desc')
            ->paginate(25);
        return view('results', ['posts' => $posts]);
    }

    public function allexams()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('results', ['posts' => $posts]);
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        // return view('admin.posts.index')->with('posts', Post::all());
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function mypost()
    {
        $user = Auth::id();
        // $posts = Post::where("user_id", "=", $user)->get();
        $posts = Post::where("user_id", "=", $user)
            ->orderBy('created_at', 'desc')
            ->paginate(25);

        // return view('admin.posts.index')->with('posts', $posts);
        return view('admin.posts.index')->with('posts', $posts);
    }

    public function mysearch()
    {
        $posts = Post::where("examname", "like", "%" . request("examquery") . "%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.posts.index', ['posts' => $posts->appends(request()->input())]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'examname' => 'required|min:3|unique:posts,examname|max:191',
        ]);

        if ($request->gallery_one) {
            $gallery_one = $request->gallery_one;
            $gallery_one_new_name = time() . $gallery_one->getClientOriginalName();
            $image_resize = Image::make($gallery_one->getRealPath());
            $image_resize->resize(200, 200);
            $image_resize->save('uploads/posts/' . $gallery_one_new_name);

            $request->merge(['gallery_one' => $gallery_one_new_name]);
        }


        $post = Post::create([
            'examname' => $request->examname,
            'postname' => $request->postname,
            'category' => $request->category,
            'description' => $request->description,
            'fees' => $request->fees,
            'obc' => $request->obc,
            'sc' => $request->sc,
            'female' => $request->female,
            'slug' => str_slug($request->examname),
            'user_id' => Auth::id() 
        ]);

        Session::flash('success', 'Post created succesfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('admin.posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $this->validate($request, [
            'examname' => 'required|string|max:191|unique:posts,examname,' . $post->id,
        ]);

        if ($request->hasFile('gallery_one')) {

            $gallery_one = $request->gallery_one;
            $gallery_one_new_name = time() . $gallery_one->getClientOriginalName();

            $image_resize = Image::make($gallery_one->getRealPath());
            $image_resize->resize(200, 200);
            $image_resize->save('uploads/posts/' . $gallery_one_new_name);
            // $post->gallery_one = 'uploads/posts/'.$gallery_one_new_name; 

            $request->merge(['gallery_one' => $gallery_one_new_name]);
        }

        //  $post->examname = $request->examname;
        //  $post->examdate = $request->examdate;
        //  $post->postname = $request->postname;
        //  $post->category = $request->category;
        //  $post->vacancy = $request->vacancy;
        //  $post->startingdt = $request->startingdt;
        //  $post->lastday = $request->lastday;
        //  $post->lastmonth = $request->lastmonth;
        //  $post->lastyear = $request->lastyear;
        //  $post->lastpayday = $request->lastpayday;
        //  $post->admitcarddt = $request->admitcarddt;
        //  $post->joblocation = $request->joblocation;
        //  $post->payscale = $request->payscale;
        //  $post->fees = $request->fees;
        //  $post->agelimitason = $request->agelimitason;
        //  $post->agelimitmin = $request->agelimitmin;
        //  $post->agelimitmax = $request->agelimitmax;
        //  $post->agerelaxation = $request->agerelaxation;
        //  $post->eduqualification = $request->eduqualification;
        //  $post->howtoapply = $request->howtoapply;
        //  $post->modeofselection = $request->modeofselection;
        //  $post->applylink = $request->applylink;
        //  $post->paylink = $request->paylink;
        //  $post->websitelink = $request->websitelink;
        //  $post->jobbyedu = $request->jobbyedu;
        //  $post->jobbyprof = $request->jobbyprof;
        //  $post->jobbystate = $request->jobbystate;
        //  $post->save();
        
        $post->update($request->all());

        Session::flash('success', 'Post updated successfully');

        return redirect()->route('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'The post was just deleted.');
        return redirect()->back();
    }

    public function trashed()
    {
        $user = Auth::id();

        $posts = Post::where("user_id", "=", $user)
            ->orderBy('created_at', 'desc')
            ->onlyTrashed()
            ->paginate(10);

        return view('admin.posts.trashed', ['posts' => $posts]);
    }

    public function trashedall()
    {

        $posts = Post::orderBy('created_at', 'desc')
            ->onlyTrashed()
            ->paginate(10);

        return view('admin.posts.trashedall', ['posts' => $posts]);
    }

    public function kill($id)
    {
        $post =  Post::withTrashed()->where('id', $id)->first();

        $post->forceDelete();

        Session::flash('success', 'Post deleted permanently.');

        return redirect()->back();
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();
        Session::flash('success', 'Post restored successfully.');
        return redirect()->route('post');
    }
}
