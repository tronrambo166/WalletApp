@extends('content-layout.layout')
@section('thecontents')


<!--Hidden Cart view-->

        <div class="modal fade  float-right pr-0" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Basket </h5>  
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
       
     @if($currentMap)  @foreach($currentMap as $map)
       <div class="row  py-2 border"> 
        <div class="col-sm-6">
        <div class="poster  border-4 border-white shadow"><img width="190" height="250" src="{{ asset('/') }}assets/orderimg/{{$map->map_name}}"></div> </div>

        <div class="poster_info col-sm-6"> 

             <a href="{{url('delmap/'.$map->id) }}" class=" d-inline-block float-right "   class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto"><small class="text-danger bg-light font-weight-bold">remove</small></a>


            <h6 class="">{{$map->posterSize}} - </h6>
            <h6 class="">{{$map->orientation}}(Starmap)</h6>

            <p class="text-mute mt-3 "><small>{{$map->message}}</small> </p>
            <p class="text-mute "><small>{{$map->place}}</small> </p>
            <p class="text-mute "><small>{{$map->date}} </small> </p>
            <p class="text-mute "><small>{{$map->latlon}}</small> </p>


            
<div class="row"> <div class="col-md-3">
            
             </div> <div class="col-sm-5 mt-2 h6"> €{{$map->price}}  </div> </div>


        </div>
           </div>
           @endforeach  @endif


             <a href="{{url('/editor')}}" class="btn w-100 bg-light ">+ Add another poster</a>
           <div class="clearfix py-2"></div>




   <!--  For Frames -->

 @if($frames) @foreach($frames as $frame) 

   <div class="row  py-2 border"> 
        <div class="col-sm-6">
        <div class="poster  border-4 border-white shadow"><img src="{{ asset('/') }}assets/img/@if($frame->fm_name == 'Black Frame')2.png"> 
             @elseif($frame->fm_name == 'White Frame')1.png"> @endif


        </div> </div>

        <div class="poster_info col-sm-6">

             <a href="{{url('delframe/'.$frame->id) }}" class=" d-inline-block float-right "   class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto"><small class="text-danger bg-light font-weight-bold">remove</small></a>

            
            <h6 class=""> {{$frame->fm_name}} - {{$frame->fm_size}} </h6>

            
<div class="row mt-4"> <div class="col-md-3">
        </div> <div class="col-sm-2 mt-2">  <h6>${{$frame->fm_price}}</h6> </div> 
    </div>

            <div class="clearfix "></div>


        </div>

   </div>
   @endforeach @endif


   <!--  For Frames -->



<div class="row  py-2 mt-3  border"> 
    <h6 class="w-100 text-center py-2"> You may also like... <br> <small>Add a frame and make your home more you!</small></h6>

       <div class="col-sm-2"></div>    <div class="col-sm-4">
        <div class="poster  border-4 border-white shadow mb-2"><img width="110px" height="110px" src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">White Frame - 30x40cm <br> 
         @php $fname='White-Frame,30cm,29'; @endphp</small>
         <small><b>Price: $29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>


        <div class="col-sm-4">
        <div class="poster  border-4 border-white shadow mb-2"><img width="110px" height="110px" src="{{ asset('/') }}assets/img/2.png"></div> 

         <small class=" ">Black Frame - 30x40cm <br>  
         @php $fname='Black-Frame,30cm,29'; @endphp</small>
         <small><b>Price: $29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>   <div class="col-sm-2"></div>  




        
   </div> <div class="bg-info h6 text-center"> see more frames on basket page...</div>




        
        

      </div> 

      <div class="modal-footer py-0">  
        <a href="{{route('basket')}}"  class=" btn w-100 bg-dark text-white my-0 py-2 w-50 mx-auto">Go To Basket</a>
      
      </div>
    </div>
  </div>
</div>

<!--Hidden Cart view-->









 

    @section('title') Let's just checkout here please @endsection
        <!-- Header-area START -->
        <div class="Header-area white-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>DISCOUNT 20% ALL ITEM - READ MORE
                            


                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-2 d-block d-lg-none">
                            <div class="menu-icon">
                                <div class="in-mobile"> 
                                    <a href="javascript:void(0)" class="humg-btn"><span></span></a> 
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-2 col-8">
                            <div class="logo-area">
                                <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 d-none d-lg-block text-center">
                            <div class="menu-area">
                                <nav>
                                   
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-2 text-right">
                            <div class="header-action">
                                <ul>
                                    <li class="poster-btn"><a href="{{url('/editor')}} ">Create your poster</a></li>
                                    <li>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         <!-- mobile-menu -->
         <div class="mobile-menu">
            <a href="javascript:void(0)" class="humg-btn"><i class="fal fa-times"></i></a> 
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li> 
                    <li><a href="services.html">tearms</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav> 
        </div> 
        <!-- Header-area END -->
           
        <!-- main START -->
        <main class="bellingPage"> 


            <!-- cart-area START -->
            <div class="cart-area">
                <div class="container">

                    <!-- section-title -->
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <div class="section-title">
                                <h1>COMPLETE YOUR PURCHASE</h1>  
                            </div>
                        </div>
                    </div> 
                    
                    <!-- carts -->
                    

                   <!--Hidden Cart view-->

        
  <div class="" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ml-5 pl-5" id="exampleModalLabel">Products </h5>  <a href="{{url('/basket')}} "  class=" btn  bg-light text-dark my-0 py-2 w-50 mx-auto">Go Back</a>
       
      </div>
      <div class=" row"> <div class="col-sm-1"> </div> <div class="col-sm-5">
        @php $sub=0; $sub2=0; $t=0; $map_ids=''; $fm_ids='';@endphp
       
      @if($currentMap)  @foreach($currentMap as $map) 
       <div class="row  py-2 border"> 
        <div class="col-sm-6">
        <div class="poster  border-4 border-white shadow"><img width="222" height="300" src="{{ asset('/') }}assets/orderimg/{{$map->map_name}}"></div> </div>

        <div class="poster_info  col-sm-6">
             <a href="{{url('delmap/'.$map->id) }}" class=" d-inline-block float-right "   class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto"><small class="text-danger bg-light font-weight-bold">remove</small></a>

            
            <h6 class="">{{$map->posterSize}} - </h6>
            <h6 class="">{{$map->orientation}}(Starmap)</h6>

            <p class="text-mute mt-3 "><small>{{$map->message}}</small> </p>
            <p class="text-mute "><small>{{$map->place}}</small> </p>
            <p class="text-mute "><small>{{$map->date}} </small> </p>
            <p class="text-mute "><small>{{$map->latlon}}</small> </p>


            
<div class="row"> <div class="col-md-3"></div> <div class="col-md-2 mt-2"> {{$map->quantity}}
            
        </div> <div class="col-sm-1 mt-1"><small>x</small></div><div class="col-sm-5 mt-2 h6"> ${{$map->price}}  </div> </div>


        </div>
           </div> 
            @php $sub= $sub+($map->price*$map->quantity);

            $map_ids=$map_ids.$map->id.'-'; @endphp

           @endforeach  @endif  


             <a href="" class="btn my-2 w-100 bg-light ">+ Add another poster</a>
           <div class="clearfix py-4"></div>




   <!--  For Frames -->

 @if($frames) @foreach($frames as $frame) 

   <div class="row  py-2 border"> 
        <div class="col-sm-5">
        <div class="poster  border-4 border-white shadow"><img src="{{ asset('/') }}assets/img//@if($frame->fm_name == 'Black Frame')2.png"> 
             @elseif($frame->fm_name == 'White Frame')1.png"> @endif



        </div> </div> <div class="col-sm-1"> </div>

        <div class="poster_info col-sm-6">

            <a href="{{url('delframe/'.$frame->id) }}" class=" d-inline-block float-right "   class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto"><small class="text-danger bg-light font-weight-bold">remove</small></a>


            
            <h6 class=""> {{$frame->fm_name}} - {{$frame->fm_size}} </h6>

            
<div class="row"> <div class="col-md-3"></div> <div class="col-md-2 mt-2"> {{$frame->fm_quantity}}
            
        </div> <div class="col-sm-1 mt-1"><small>x</small></div><div class="col-sm-2 mt-2">  <h6>${{$frame->fm_price}}</h6> </div> </div>

            <div class="clearfix "></div>


        </div>

   </div>  @php $sub2= $sub2+($frame->fm_price*$frame->fm_quantity);
             $fm_ids=$fm_ids.$frame->id.'-'; @endphp
   @endforeach @endif


   <!--  For Frames -->

   </div>


   <!--  For Frames -->

   <div class="col-sm-6 text-center"> 

    @php $total = $sub+$sub2; $map_ids=$map_ids; $fm_ids=$fm_ids;  @endphp

    <div class="row"> <h5 class=" text-center w-100 bg-light py-3 mt-5">
    Total  = Map(${{$sub}}) + Frame(${{$sub2}}) = ${{$sub+$sub2}} </h5></div>


        

      
      </div>



    </div>




  </div>
</div>

<!--Hidden Cart view-->




                </div>
            </div>
            <!-- cart-area END --> 

            <!-- shoping-method START -->
            <div class="shoping-method">
                <div class="container"> 
                    <!-- section-title -->
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                            <div class="section-title">
                                <h1>SHIPPING METHOD</h1>  
                            </div>
                        </div>
                    </div>
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-4 offset-lg-2 col-md-6">
                                <div class="method-blk">  
                                    <input type="radio" value="First Class Shipping" id="fruit1" name="fruit-1" checked>
                                    <label for="fruit1">
                                        <h5>1ST CLASS SHIPPING <span>$2.00</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </label>   
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="method-blk">  
                                    <input type="radio" value="Second Class Shipping" id="nd" name="fruit-1">
                                    <label for="nd">
                                        <h5>2nd CLASS SHIPPING <span>$1.50</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </label>   
                                </div>
                            </div>
                        </div>
                    </fieldset>    
                </div>
            </div>
            <!-- shoping-method END -->

            <!-- billin-details-area START -->
            <div class="billin-details-area">
                <div class="abcd">
                    <!-- section-title -->
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                            <div class="section-title">
                                <h1>BILLING DETAILS</h1>  
                            </div>
                        </div>
                    </div> 
                    

                   
                        
                            <div class="contact-from billing">
                                <div class="row ml-5"> <form action="" class="w-75 m-auto" method="post"> @csrf

                                    


                                   
                                               

                                                     </form>

                                                     <!-- Stripe Payment Section -->

                                                     @include('stripe')
                                                    
                                                    <!-- Stripe Payment Section Ends -->



                                                
                                            </div> 

                                      
                                   
                                </div>
                            </div>


            <!-- billin-details-area END -->

            <!-- features-area START -->
            <div class="features-area"> 
                <div class="container"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-blks"> 
                                <div class="feature-blk">
                                    <span><i class="fas fa-globe-americas"></i></span>
                                    <h4>WORLD WIDE SHIPPING <p>Fast and reliable deliveries</p></h4> 
                                </div> 
                                <div class="feature-blk">
                                    <span><i class="fas fa-gift"></i></span>
                                    <h4>THE PERFECT GIFT <p>Unique and personal</p></h4> 
                                </div> 
                                <div class="feature-blk">
                                    <span><i class="fas fa-star"></i></span>
                                    <h4>HIGH QUALITY PRODUCTS <p>Our Product stands the test of time</p></h4> 
                                </div> 
                                <div class="feature-blk">
                                    <span><i class="fas fa-comments"></i></span>
                                    <h4>OUTSTANDING SUPPORT <p>Always here to help when needed</p></h4> 
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
            <!-- features-area END -->
 

        </main>
        <!-- main END -->



         


          <script src="{{ asset('/') }}assets/js/vendor/jquery-3.4.1.min.js"></script>


 <script type="text/javascript"> /*
                // Currency

            $("select[name='currency']").on('change', function(e){  

      var value = $(this).val();
      var amount =document.getElementById("stripBtn");
    var j = document.getElementById("paynow");
    if(value=='usd'){ j.innerHTML = "$"; amount.innerHTML = "{{$total}}"; }
    else if(value=='gbp') { j.innerHTML = "£"; amount.innerHTML = "{{$total*0.73}}"; }
    
    
     });   
            // Currency  */

   </script>




 

        <script>
 
            function ValidePage() { 
                let rmBtn = document.querySelector('.removeThisProduct') 
                let upThis        = JSON.parse(localStorage.getItem('finalPosterSend'))
                if (upThis.cartActivat === 'no') {
                    window.location.replace(window.location.origin+"/editor");
                }
                rmBtn.addEventListener("click", () => {
                    localStorage.removeItem("finalPosterSend");
                    window.location.replace(window.location.origin+"/editor");
                })
            }
            ValidePage()

            function postRend() {
                let thatBox = document.querySelector('.myProductHere');
                let thatBIm = thatBox.querySelector('img'); 

                let upThis        = JSON.parse(localStorage.getItem('finalPosterSend'))
                thatBIm.src       = upThis.posterImage; 

            } 
            postRend()




        </script>

@endsection