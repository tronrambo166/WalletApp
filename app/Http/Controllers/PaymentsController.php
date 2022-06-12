<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class PaymentsController extends Controller
{
   

public function orders(){
    $orders=DB:: table('orders')->get();

  

        return view('orders', compact('orders'));
     
    }


    public function cancel_order($id){
        
         DB::table('orders')->where('id', $id)->delete();
        return redirect('orders/admin')->with('success', "Order Cancelled!");
    }









public function editor(){

    $currentMap= DB:: table('mapinfos')
            ->join('images', 'mapinfos.id', '=', 'images.map_id')
            ->select('mapinfos.*', 'images.map_name')
            ->get();

            $frames= DB:: table('map_frames')->get()->toArray();

        return view('editor', compact('currentMap', 'frames'));
     
    }


    public function paymentPage(){

$currentMap= DB:: table('mapinfos')
            ->join('images', 'mapinfos.id', '=', 'images.map_id')
            ->select('mapinfos.*', 'images.map_name')
            ->get();

            $frames= DB:: table('map_frames')->get()->toArray();;

        return view('payment', compact('currentMap', 'frames'));
     
    }






  public function basketPage(){
$currentMap= DB:: table('mapinfos')
            ->join('images', 'mapinfos.id', '=', 'images.map_id')
            ->select('mapinfos.*', 'images.map_name')
            ->get();

            $frames= DB:: table('map_frames')->get()->toArray();;

        return view('basket', compact('currentMap', 'frames'));
     

     
    }



     

    // Post Methods to add or update / quantity
    public function addframe($fname){
        
        //Breaking ids and quantities, getting product names and joining them

       
        $fname=explode(',', $fname);  
       
            $name=$fname[0];//$name =str_replace("-"," ",$name);
            $size=$fname[1]; 
            $price=$fname[2];
            $total_price=$price; 

           
          // return $names;

         $data= array();
          $name=str_replace('-',' ',$name);
         $data['fm_name'] = $name;
         $data['fm_size'] = $size;
         $data['fm_price'] = $price;
         $data['fm_total_price'] = $total_price;
        
         DB::table('map_frames')->insert($data);
         
        return redirect('basket')->with('success', "One item added to basket!");
    }



 // Checkout Route
    public function payment(Request $request)
    {
$data = $request->posterIsReady;
//Decode the JSON string and convert it into a PHP associative array.
$decoded = json_decode($data, true); //return $decoded['posterSize'];;
//if(!empty($decoded)) $id=$decoded['posterSize']; else $id="YES";


$message=$decoded['message'];
$place=$decoded['place'];
$date=$decoded['date'];
$latlon=$decoded['latlon'];
$orientation=$decoded['orientation'];
$posterSize=$decoded['posterSize'];
$posterTheme=$decoded['posterTheme'];
$posterStyle=$decoded['posterStyle'];
$price=$decoded['price'];
$total_price=$decoded['price'];

 $data=array();
          $data['message']=strtoupper($message);
          $place=str_replace(',',', ',$place);
          $data['place']=strtoupper($place); 
          $data['date']=$date;
          $data['latlon']=$latlon;
          $data['orientation']=$orientation;

          //Poster size string
     if ($posterSize == 'sInche24x36')  $posterSize='A2 (size)';
     else if ($posterSize == 'sa1')  $posterSize='A1 (size)';
     else if ($posterSize == 'sInche18x24')  $posterSize='A3 (size)';
     else if ($posterSize == 'sInche11x17')  $posterSize='A4 (size)';

         else $posterSize=str_replace('size','',$posterSize);
          $size=$posterSize;
          $data['posterSize']=$size;
         
          $data['posterTheme']=$posterTheme;
          $data['posterStyle']=$posterStyle;

          $price=str_replace('$','',$price);
          $data['price']=$price;
          $data['total_price']=$price;
        DB::table('mapinfos')->insert($data);

        return response()->json(['message' => 'Info Inserted!'.$decoded['posterSize']]);


//return response()->json(['message' => 'Info Inserted!');
//return redirect('/checkouts')->with('message',$id);

        
    }



// Savelist Route
    public function savlist(Request $request)
    {
$data = $request->posterIsReady;
//Decode the JSON string and convert it into a PHP associative array.
$decoded = json_decode($data, true);
//if(!empty($decoded)) $id=$decoded['posterSize']; else $id="YES";


$message=$decoded['message'];
$place=$decoded['place'];
$date=$decoded['date'];
$latlon=$decoded['latlon'];
$orientation=$decoded['orientation'];
$posterSize=$decoded['posterSize'];
$posterTheme=$decoded['posterTheme'];
$posterStyle=$decoded['posterStyle'];
$price=$decoded['price'];
$total_price=$decoded['price'];

 $data=array();
          $data['message']=strtoupper($message);
          $place=str_replace(',',', ',$place);
          $data['place']=strtoupper($place); 
          $data['date']=$date;
          $data['latlon']=$latlon;
          $data['orientation']=$orientation;

          //Poster size string
     if ($posterSize == 'sInche24x36')  $posterSize='A2 (size)';
     else if ($posterSize == 'sa1')  $posterSize='A1 (size)';
     else if ($posterSize == 'sInche18x24')  $posterSize='A3 (size)';
     else if ($posterSize == 'sInche11x17')  $posterSize='A4 (size)';

         else $posterSize=str_replace('size','',$posterSize);
          $size=$posterSize;
          $data['posterSize']=$size;
         
          $data['posterTheme']=$posterTheme;
          $data['posterStyle']=$posterStyle;

          $price=str_replace('$','',$price);
          $data['price']=$price;
          
        DB::table('savelists')->insert($data);

        return response()->json(['message' => 'Info Inserted!'.$size]);


//return response()->json(['message' => 'Info Inserted!');
//return redirect('/checkouts')->with('message',$id);

        
    }




// Savelist to cart Route
    public function saveToCart( $saveid)
    {


$decoded = DB:: table('savelists')->where('id', $saveid)->first();
$img_name=DB:: table('images')->where('savelist_id', $saveid)->first();
$img_name=$img_name->map_name;
           
$lastMap = DB:: table('mapinfos')->orderBy('id','DESC')->first();
$lastMapId=$lastMap->id+1;
//if(!empty($decoded)) $id=$decoded['posterSize']; else $id="YES";

//return $decoded->map_name;
$message=$decoded->message;
$place=$decoded->place;
$date=$decoded->date;
$latlon=$decoded->latlon;
$orientation=$decoded->orientation;
$posterSize=$decoded->posterSize;
$posterTheme=$decoded->posterTheme;
$posterStyle=$decoded->posterStyle;
$price=$decoded->price;


 $data=array();
          $data['message']=$message;
          
          $data['place']=$place; 
          $data['date']=$date;
          $data['latlon']=$latlon;
          $data['orientation']=$orientation;

          //Poster size string
          $data['posterSize']=$posterSize; 
          $data['posterTheme']=$posterTheme;
          $data['posterStyle']=$posterStyle;
          
          $data['price']=$price;
          $data['total_price']=$price;
          
        DB::table('mapinfos')->insert($data);

        $data_img=array();
          $data_img['map_name']=$img_name;
          $data_img['map_id']=$lastMapId;

          DB::table('images')->insert($data_img);

       return redirect('basket')->with('success',' Item added to cart!');


//return response()->json(['message' => 'Info Inserted!');
//return redirect('/checkouts')->with('message',$id);

        
    }






   




 public function imagUrl( Request $request){

   $currentMap= DB::table('mapinfos')->orderBy('id', 'DESC')->first();
   $map_id=$currentMap->id; $size=$currentMap->posterSize; 
   $map_name=$map_id.'-'.$size.'.jpeg';

$image= $request->x; 
$image=explode(';', $image); 
$image=explode(',', $image[1]); 
$image=str_replace(' ', '+' , $image[1]);
$image=base64_decode($image);
file_put_contents('assets/orderimg/'.$map_name, $image);

$data=array();
          $data['map_id']=$map_id;

          $data['map_name']=$map_name;
DB::table('images')->insert($data);

 return response()->json(['message' => 'Image Insertedddd!']);
     
    }





    public function imagSave( Request $request){

   $currentMap= DB::table('savelists')->orderBy('id', 'DESC')->first();
   $map_id=$currentMap->id; $size=$currentMap->posterSize; $email=$currentMap->user_email;
   $map_name=$map_id.'-'.$email.'-'.$size.'.jpeg';

$image= $request->x; 
$image=explode(';', $image); 
$image=explode(',', $image[1]); 
$image=str_replace(' ', '+' , $image[1]);
$image=base64_decode($image);
file_put_contents('assets/orderimg/'.$map_name, $image);

$data=array();
          $data['savelist_id']=$map_id;

          $data['map_name']=$map_name;
DB::table('images')->insert($data);

 return response()->json(['message' => 'Imagesave Insertedddd!']);
     
    }



      public function saveOnlyEmail($email)
    { 
        $remail=$email;   
        $id= DB::table('savelists')->orderBy('id', 'DESC')->first(); $id=$id->id;
        
        $data=array();
        $data['user_email']=$remail;
       
        DB::table('savelists')->where('id',$id)->update($data);

        // Send Email

        $info=['Name'=>'Dele', 'email' => $remail];
        $user['to']= $remail;
        Mail::send('mail', $info, function($msg) use ($user){

            $msg->to($user['to']);
            $msg->subject('Test Mail');

        });

        // Send Email



        return response()->json(['message' => 'Email Saved!'.$remail]);

    }


// Saved email and design
     public function saved($email)

    {

        $currentMap= DB:: table('savelists')
            ->join('images', 'savelists.id', '=', 'images.savelist_id')
            ->select('savelists.*', 'images.map_name')
            ->get();

            $frames= DB:: table('map_frames')->get();

        $user_email=$email;
        return view('saved', compact('currentMap', 'frames', 'user_email'));
    }



    // delete and update

    public function delmap($id)

    {    $img=DB::table('images')->where('map_id',$id)->first();     
         $img_loc=$img->map_name; 
         $img_loc='assets/orderimg/'.$img_loc;
         if(file_exists($img_loc))    
         unlink($img_loc);

         DB::table('images')->where('map_id',$id)->delete();  
         DB::table('mapinfos')->where('id',$id)->delete();               
    return redirect('basket')->with('success',' Item Deleted!');
       
    }



     public function delSavedItem($id, $email)

    {    $img=DB::table('images')->where('savelist_id',$id)->first();     
         $img_loc=$img->map_name; 
         $img_loc='assets/orderimg/'.$img_loc;
         if(file_exists($img_loc))    
         unlink($img_loc);

         DB::table('images')->where('savelist_id',$id)->delete();  
         DB::table('savelists')->where('id',$id)->delete();               
    return redirect('save/'.$email)->with('success',' Item Deleted!');
       
    }



     public function delframe($id)

    {    DB::table('map_frames')->where('id',$id)->delete();     
    return redirect('basket')->with('success',' Frame Deleted!');
       
    }




    public function map_quantity(Request $request, $id)

    {   
        $q=$request->map_quantity;

        $data['quantity']=$q;
        DB:: table('mapinfos')->where('id',$id)->update($data);
      return redirect('basket')->with('success',' Quantity Changed!');
        //return redirect('admin/manage-product');
    }



public function frame_quantity(Request $request, $id)

    {   
        $q=$request->frame_quantity;

        $data['fm_quantity']=$q;
        DB:: table('map_frames')->where('id',$id)->update($data);
      return redirect('basket')->with('success',' Quantity Changed!');
        //return redirect('admin/manage-product');
    }





}
