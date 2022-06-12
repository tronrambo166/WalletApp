<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Session;
use Stripe;
use DB;
use App\Mapinfo;
use App\MapFrames;
class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
   
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        //return $request;
         $curr=$request->currency; 
         $price=$request->price;
          $amount=($price*100);
                $amount=round(($amount));


                // adding to DB
                $map_ids=$request->map_ids;
                $fm_ids=$request->fm_ids;
                $email=$request->email;
                $firstname=$request->firstname;
                $lastname=$request->lastname;
                $country=$request->country;
                $company=$request->company;
                $address=$request->address;
                $postcode=$request->postcode;
                $price=$request->price;

                      $data= array();
         $data['map_ids'] = $map_ids;
         $data['fm_ids'] = $fm_ids;
         $data['email'] = $email;
         $data['firstname'] = $firstname;
         $data['lastname'] = $lastname;
         $data['country'] = $country;
         if($company!='') $data['company'] = $company;
         $data['address'] = $address;
         $data['postcode'] = $postcode;
         $data['price'] = $price;

         DB::table('orders')->insert($data);
          Mapinfo::query()->delete();
           MapFrames::query()->delete();
         


                 // adding to DB



        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([ 

                //"billing_address_collection": null,
                "amount" => $amount, //100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose phpcodingstuff.com"
        ]);
   
       // Session::flash('success', 'Payment Received successfully!');
        return redirect('basket')->with('success', "Payment Received successfully!");
           
        //return back();
    }
}