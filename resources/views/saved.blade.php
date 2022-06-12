 
	
      

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


             <a href="" class="btn w-100 bg-light ">+ Add another poster</a>
           <div class="clearfix py-2"></div>




   <!--  For Frames -->

 @if($frames) @foreach($frames as $frame) 

   <div class="row  py-2 border"> 
        <div class="col-sm-6">
        <div class="poster  border-4 border-white shadow"><img src="{{ asset('/') }}assets/img/1.png"></div> </div>

        <div class="poster_info col-sm-6">

             <a href="{{url('delframe/'.$frame->id) }}" class=" d-inline-block float-right "   class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto"><small class="text-danger bg-light font-weight-bold">remove</small></a>

            
            <h6 class=""> {{$frame->fm_name}} - {{$frame->fm_size}} </h6>

            
<div class="row mt-4"> <div class="col-md-3">
        </div> <div class="col-sm-2 mt-2">  <h6>€{{$frame->fm_price}}</h6> </div> 
    </div>

            <div class="clearfix "></div>


        </div>

   </div>
   @endforeach @endif


   <!--  For Frames -->



<div class="row  py-2 mt-3 border"> 
    <h6 class="w-100 text-center py-2"> You may also like... <br> <small>Add a frame and make your home more you!</small></h6>

        <div class="col-sm-4">
        <div class="poster  border-4 border-white shadow mb-2"><img src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">Poster hanger wood - 30cm 
         @php $fname='Poster-hanger-wood,30cm,29'; @endphp</small>
         <small><b>Price: €29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>


        <div class="col-sm-4">
        <div class="poster  border-4 border-white shadow mb-2"><img src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" "> Frame normal - 30cm 
         @php $fname='Poster-hanger-normal,30cm,29'; @endphp</small>
         <small><b>Price: €29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>


         <div class="col-sm-4">
        <div class="poster  border-4 border-white shadow mb-2"><img src="{{ asset('/') }}assets/img/frame.png"></div> 

         <small class=" ">Poster hanger wall - 30cm 
         @php $fname='Poster-hanger-wall,30cm,29'; @endphp</small>
         <small><b>Price: €29</b></small>

         
         <a href="{{url('addframe/'.$fname) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add</a>

        </div>


        
   </div> <div class="bg-info h6 text-center"> see more frames on basket page...</div>




    <div class="row"> <h5 class=" text-center w-100 bg-light py-3 mt-5">Total  =  €49 </h5></div>
        
        

      </div> 

      <div class="modal-footer py-0">  
        <a href="{{route('basket')}}"  class=" btn w-100 bg-dark text-white my-0 py-2 w-50 mx-auto">Go To Basket</a>
      
      </div>
    </div>
  </div>
</div>

<!--Hidden Cart view-->









 

    @section('title')  @endsection
        <!-- Header-area START -->
        <div class="Header-area white-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>
                            


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
                                    <li class="poster-btn"><a href="{{url('/editor')}} ">Edit/Create new poster</a></li>
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
                                <h1>We Stored Your Saved Designs!</h1>  
                            </div>
                        </div>
                    </div> 
                    
                    <!-- carts -->
                    

                   <!--Hidden Cart view-->

        
  <div class="" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ml-5 pl-5" id="exampleModalLabel">Saved </h5>  <a href="{{url('/editor')}} "  class=" btn  bg-light text-dark my-0 py-2 w-50 mx-auto">Go to Editor Page</a>
       
      </div>
      <div class=" row"> <div class="col-sm-1"> </div> <div class="col-sm-5">
        @php $sub=0; $sub2=0; $t=0; @endphp
       
      @if($currentMap)  @foreach($currentMap as $map) @if($map->user_email == $user_email)
       <div class="row  py-2 border"> 
        <div class="col-sm-6">
        <div class="poster  border-4 border-white shadow"><img width="232" height="300" src="{{ asset('/') }}assets/orderimg/{{$map->map_name}}"></div> </div>

        <div class="poster_info col-sm-6">
             <a href="{{url('delSavedItem/'.$map->id.'/'.$user_email) }}" class=" d-inline-block float-right "   class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto"><small class="text-danger bg-light font-weight-bold">remove</small></a>

            
            <h6 class="">{{$map->posterSize}} - </h6>
            <h6 class="">{{$map->orientation}}(Starmap)</h6>

            <p class="text-mute mt-3 "><small>{{$map->message}}</small> </p>
            <p class="text-mute "><small>{{$map->place}}</small> </p>
            <p class="text-mute "><small>{{$map->date}} </small> </p>
            <p class="text-mute "><small>{{$map->latlon}}</small> </p>


            
<div class="row"> <div class="col-md-3"></div> <div class="col-md-2 mt-2"> {{$map->quantity}}
            
        </div> <div class="col-sm-1 mt-1"><small>x</small></div><div class="col-sm-5 mt-2 h6"> ${{$map->price}}  </div> </div>


        </div>
		 <a href="{{url('saveToCart/'.$map->id) }}"  class=" btn  bg-secondary text-white my-0 py-0  w-100 mx-auto">Add to cart</a>
           </div> 
            @endif  @endforeach  @endif


             





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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