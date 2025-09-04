<?php
 
namespace magichomes\Http\Controllers;
 
use Illuminate\Http\Request;
use Razorpay\Api\Api;
 
class PayController extends Controller
{
   
   public function index()
   {
        return view('event');
   }
   public function pay(Request $request){
 
     $api = new \Instamojo\Instamojo(
            config('services.instamojo.api_key'), 
            config('services.instamojo.auth_token'),
            config('services.instamojo.url')
        );
 
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => "FIFA 16",
            "amount" => $request->amount,
            "buyer_name" => "$request->name",
            "send_email" => true,
            "email" => "$request->email",
            "phone" => "$request->mobile_number",
            "redirect_url" => "http://job.test/pay-success"
            ));
             
            header('Location: ' . $response['longurl']);
            exit();
    }catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
 }
 
 public function success(){
    return view('success');
  }
 public function successful(){
  
  }
}
