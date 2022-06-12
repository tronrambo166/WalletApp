@extends('content-layout.layout')
@section('thecontents') 


        

<!--Hidden Cart view-->

        
  <div class="" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ml-5 pl-5" id="exampleModalLabel">Your Basket </h5>  <a href="{{url('/editor')}} "  class=" btn  bg-light text-dark my-0 py-2 w-50 mx-auto">Go Back</a>
       
      </div>
      <div class=" row"> <div class="col-sm-1"> </div> <div class="col-sm-5">
        @php $sub=0; $sub2=0; $t=0; @endphp
       
      @if($currentMap)  @foreach($currentMap as $map) 
       <div class="row  py-2 border"> 
        <div class="col-sm-6">
        <div class="poster  border-4 border-white shadow"><img width="232" height="300" src="{{ asset('/') }}assets/orderimg/{{$map->map_name}}"></div> </div>

        <div class="poster_info col-sm-6">
             <a href="{{url('delmap/'.$map->id) }}" class=" d-inline-block float-right "   class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto"><small class="text-danger bg-light font-weight-bold">remove</small></a>

            
            <h6 class="">{{$map->posterSize}} - </h6>
            <h6 class="">{{$map->orientation}}(Starmap)</h6>

            <p class="text-mute mt-3 "><small>{{$map->message}}</small> </p>
            <p class="text-mute "><small>{{$map->place}}</small> </p>
            <p class="text-mute "><small>{{$map->date}} </small> </p>
            <p class="text-mute "><small>{{$map->latlon}}</small> </p>


            
<div class="row"> <div class="col-md-5">
            <form action="{{url('map_quantity/'.$map->id)}}" method="post"> @csrf

                <select  name="map_quantity">
        <option  selected value="{{$map->quantity}} ">{{$map->quantity}}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>  

       <input type="submit" class="small" name="submit" value="Change"/>

            </select></form> 
        </div> <div class="col-sm-1 mt-1"><small>x</small></div><div class="col-sm-5 mt-2 h6"> ${{$map->price}}  </div> </div>


        </div>
           </div> 
            @php $sub= $sub+($map->price*$map->quantity); @endphp

           @endforeach  @endif  


             <a href="{{url('/editor')}}" class="btn my-2 w-100 bg-light ">+ Add another poster</a>
           <div class="clearfix py-4"></div>




   <!--  For Frames -->

 @if($frames) @foreach($frames as $frame) 

   <div class="row  py-2 border"> 
        <div class="col-sm-5">
        <div class="poster  border-4 border-white shadow"><img src="{{ asset('/') }}assets/img/@if($frame->fm_name == 'Black Frame')2.png"> 
             @elseif($frame->fm_name == 'White Frame')1.png"> @endif


        </div> 


    </div> <div class="col-sm-1"> </div>

        <div class="poster_info col-sm-6">

            <a href="{{url('delframe/'.$frame->id) }}" class=" d-inline-block float-right "   class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto"><small class="text-danger bg-light font-weight-bold">remove</small></a>


            
            <h6 class=""> {{$frame->fm_name}} - {{$frame->fm_size}} </h6>

            
<div class="row"> <div class="col-md-5">
            <form action="{{url('frame_quantity/'.$frame->id)}}" method="post"> @csrf

                <select  name="frame_quantity">
 <option  selected value="{{$frame->fm_quantity}} ">{{$frame->fm_quantity}}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>  

       <input type="submit" class="small" name="submit" value="Change"/>

            </select></form> 
        </div> <div class="col-sm-1 mt-1"><small>x</small></div><div class="col-sm-2 mt-2">  <h6>${{$frame->fm_price}}</h6> </div> </div>

            <div class="clearfix "></div>


        </div>

   </div>  @php $sub2= $sub2+($frame->fm_price*$frame->fm_quantity); @endphp
   @endforeach @endif


   <!--  For Frames -->

   </div>


   <!--  For Frames -->

   <div class="col-sm-6 text-center"> 

    <div class="row"> <h5 class=" text-center w-100 bg-light py-3 mt-5">
    Total  = Map(${{$sub}}) + Frame(${{$sub2}}) = ${{$sub+$sub2}} </h5></div>
        

      <div class=" py-0">  
        <a href="{{ url('checkouts') }}"  class=" btn w-100 bg-dark text-white my-0 py-2 w-50 mx-auto">Go To Checkout</a>
      
      </div>
      </div>



    </div>


<div class="row  py-2 mt-3 mx-3 border"> 
    <h6 class="w-100 text-center py-2"> You may also like... <br> <small>Add a frame and make your home more you!</small></h6>

       
        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">White Frame - 30x40cm <br> 
         @php $fname='White-Frame,30cm,29'; @endphp</small>
         <small><b>Price: $29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>



        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">White Frame - 50x70cm <br> 
         @php $fname='White-Frame,50cm,49'; @endphp</small>
         <small><b>Price: $49</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>



        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">White Frame - 70x100cm <br> 
         @php $fname='White-Frame,70cm,69'; @endphp</small>
         <small><b>Price: $69</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>


<!-- Black Frames -->


        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/2.png"></div> 

         <small class=" ">Black Frame - 30x40cm <br>  
         @php $fname='Black-Frame,30cm,29'; @endphp</small>
         <small><b>Price: $29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>




        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/2.png"></div> 

         <small class=" ">Black Frame - 50x70cm <br> 
         @php $fname='Black-Frame,50cm,49'; @endphp</small>
         <small><b>Price: $49</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>



        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/2.png"></div> 

         <small class=" ">Black Frame - 70x100cm <br> 
         @php $fname='Black-Frame,70cm,69'; @endphp</small>
         <small><b>Price: $69</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>


<div class="col-sm-12 inch my-5"> <div class="row">
    

    <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">White Frame - 11x17in <br> 
         @php $fname='White-Frame,11x17in,29'; @endphp</small>
         <small><b>Price: $29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>



        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">White Frame - 18x24in <br> 
         @php $fname='White-Frame,18x24in,49'; @endphp</small>
         <small><b>Price: $49</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>



        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">White Frame - 24x36in <br> 
         @php $fname='White-Frame,24x36in,69'; @endphp</small>
         <small><b>Price: $69</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>


<!-- Black Frames -->


        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/2.png"></div> 

         <small class=" ">Black Frame - 11x17in <br>  
         @php $fname='Black-Frame,11x17in,29'; @endphp</small>
         <small><b>Price: $29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>




        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/2.png"></div> 

         <small class=" ">Black Frame - 18x24in <br> 
         @php $fname='Black-Frame,18x24in,49'; @endphp</small>
         <small><b>Price: $49</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>



        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/2.png"></div> 

         <small class=" ">Black Frame - 24x36in <br> 
         @php $fname='Black-Frame,24x36in,69'; @endphp</small>
         <small><b>Price: $69</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>



</div></div>





<div class="col-sm-12 A4 A3 A2 A1 my-5"> <div class="row">
    

    <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">White Frame - A4 <br> 
         @php $fname='White-Frame,A4,29'; @endphp</small>
         <small><b>Price: $29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>


        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">White Frame - A3 <br> 
         @php $fname='White-Frame,A3,29'; @endphp</small>
         <small><b>Price: $29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>



        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">White Frame - A2 <br> 
         @php $fname='White-Frame,A2,49'; @endphp</small>
         <small><b>Price: $49</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>



        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">White Frame - A1 <br> 
         @php $fname='White-Frame,A1,69'; @endphp</small>
         <small><b>Price: $69</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>


<!-- Black Frames -->


        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/2.png"></div> 

         <small class=" ">Black Frame - A4 <br>  
         @php $fname='Black-Frame,A4,29'; @endphp</small>
         <small><b>Price: $29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>


         <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/2.png"></div> 

         <small class=" ">Black Frame - A3 <br>  
         @php $fname='Black-Frame,A3,29'; @endphp</small>
         <small><b>Price: $29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>




        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/2.png"></div> 

         <small class=" ">Black Frame - A2 <br> 
         @php $fname='Black-Frame,A2,49'; @endphp</small>
         <small><b>Price: $49</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>



        <div class="col-sm-2">
        <div class="poster  border-4 border-white shadow mb-2"><img width="180px" height="180px" src="{{ asset('/') }}assets/img/2.png"></div> 

         <small class=" ">Black Frame - A1 <br> 
         @php $fname='Black-Frame,A1,69'; @endphp</small>
         <small><b>Price: $69</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>



</div></div>



        


        
   </div> 


  </div>
</div>

<!--Hidden Cart view-->


        

        
        @endsection('thecontents')