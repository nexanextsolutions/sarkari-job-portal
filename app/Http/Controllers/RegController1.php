<?php

namespace magichomes\Http\Controllers;

use Exception;
use magichomes\Reg;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use magichomes\Mail\SendRegMail;
use Illuminate\Support\Facades\Redirect;
use Razorpay\Api\Api;

class RegController extends Controller
{
    private $amount;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Reg::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.posts.reg', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = $request->fees; 
        $posts = $posts * 100;
        $obc = $request->obc; 
        $obc = $posts * 100;
        $sc = $request->sc; 
        $sc = $posts * 100;
        $female = $request->female; 
        $female = $posts * 100;
        
        $category = $request->category; 

        if($category == "General"){
            $this->amount = $posts;
        }
        else if($category == "OBC"){
            $this->amount = $obc;
        }
        else if($category == "SC"){
            $this->amount = $sc;
        }


        $key_id = "rzp_test_653yiePeZPstG5";
        $key_secret = "R2zCaL2TghPxN4CiTz9IPYMh";

        $receiptId = Str::random(20);
        $api = new Api($key_id, $key_secret);
        // Create A Order
        $order = $api->order->create(array(
            'receipt' => $receiptId,
            'amount' => $posts,
            'payment_capture' => 1,
            'currency' => 'INR'
            )
          );

        Reg::create($request->all());

        $data = array(
            'post_applied' => $request->post_applied,
            'post_code' => $request->post_code,
            'full_name' => $request->full_name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'aadhaar' => $request->aadhaar,
            'aadhaar' => $request->fees,
            'pan' => $request->pan,
            'father' => $request->father,
            'location' => $request->location,
            'experience' => $request->experience,
            'qualification' => $request->qualification,
        );

        $response = [
            'orderId' => $order['id'],
            'key_id' => $key_id,
            'amount' => $posts,
            'name' => $request->full_name,
            'contactNumber' => $request->mobile,
            'email' => $request->email,
            'address' => $request->location,
            'description' => 'Applying For Job',
        ];

        $guestEmail = $request->email;
        $guest = ['jobalertpatna@gmail.com', $guestEmail];
        // Mail::to($guest)->send(new SendRegMail($data));

        // return view('success')->with('posts', $posts);
        return view('success',compact('response'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \magichomes\Reg  $reg
     * @return \Illuminate\Http\Response
     */
    public function show(Reg $reg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \magichomes\Reg  $reg
     * @return \Illuminate\Http\Response
     */
    public function edit(Reg $reg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \magichomes\Reg  $reg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reg $reg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \magichomes\Reg  $reg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Reg::findOrFail($id);
        $user->delete();
        Session::flash('success', 'The post was just deleted.');
        return redirect()->back();
    }
}
