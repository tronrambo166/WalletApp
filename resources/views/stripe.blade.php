
   <head>
      <title> Payment Via Stripe </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


      <style type="text/css">
         .panel-title {
         display: inline;
         font-weight: bold;
         }
         .display-table {
         display: table;
         }
         .display-tr {
         display: table-row;
         }
         .display-td {
         display: table-cell;
         vertical-align: middle;
         width: 61%;
         }
      </style>
   </head>
   
   
      <div class="container text-center">
         <h3>Pay with your Credit / Debit Card via Stripe</h3>
         <div class="row  py-5">
            <div class="col-md-9 col-md-offset-3">
               <div class="panel m-auto panel-default credit-card-box">
                  <div class="panel-heading display-table" >
                     <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                           
                        </div>
                     </div>
                  </div>
                  <div class="panel-body">
                     @if (Session::has('success'))
                     <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                     </div>
                     @endif



                        <!-- Form Starts Here -->
                     <form     
                        role="form"
                        action="{{ route('stripe.post') }}"
                        method="post"
                        class="require-validation"
                        data-cc-on-file="false"
                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                        id="payment-form">
                        @csrf


                        <!-- Shipping address  starts -->

                         <div class="col-lg-6">


                           <input hidden value="{{$total}}" id="price "type="number" name="price"/>
                           <input hidden value="{{$map_ids}}" type="text" name="map_ids"/>
                           <input hidden value="{{$fm_ids}}" type="text" name="fm_ids"/>
                                       
                                       
                                        <p>Email Address</p>
                                        <input  class="form-control" type="text" name="email" placeholder="Your Email" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <p>First Name</p>
                                        <input class="form-control" type="text" name="firstname" placeholder="Your First Name" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Last Name</p>
                                        <input  class="form-control" type="text" name="lastname" placeholder="Your Last Name" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Company Name ( Optional )</p>
                                        <input class="form-control" type="text" name="company" placeholder="Your Company Name">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Country</p>
                                        <input class="form-control" type="text" name="country" placeholder="Your County Name" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Postcode</p>
                                        <input class="form-control" name="postcode"type="text" placeholder="Your Postcode" required="">
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <p></p>
                                        <textarea rows="3" cols="30" class="message form-control" name="address" placeholder="Provide your full shipping address here..." required=""></textarea>
                                    </div>
                                    <div class="col-lg-12"> 
                                        <div id="accordion"> 
                                            <div class="card">
                                                <div class="card-header" id="headingOne"> 
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <input type="checkbox" id="Card" checked>
                                                        <label for="Cardss"> 
                                                            <p> Credit / Debit Card ( Stripe )</p>
                                                        </label> 
                                                    </button> 
                                                </div> 

                                            </div>



                        <!-- Shipping address  ends --> 




                        <div class='form-row row my-2'>
                           <div class='col-sm-7  form-group required'>
                              <label class='control-label'><b> Name on Card </b></label> <input
                                 class='form-control' size='4' type='text'>
                           </div>

                         <!--  <div class="col-sm-5 mt-4"><select  name="currency" id="currency" class="w-75 m-auto form-control" >
            
            <option hidden value="usd">Change currency</option>
            <option value="usd">(USD)</option>
            <option value="gbp">(GBP)</option>
            
            </select></div> -->


                        </div>
                        <div class='form-row row my-2'>
                           <div class='col-sm-7 form-group card required'>
                              <label class='control-label'><b> Card Number </b></label> <input
                                 autocomplete='off' class='form-control card-number' size='20'
                                 type='text'>

                                          

                           </div>

                           <div class=" col-sm-3 mt-3"> <i  class="fab fa-cc-mastercard fa-3x"></i> <i style="color:red" class="fab fa-cc-visa fa-3x"></i> </div>

                        </div>
                        <div class='form-row row my-2'>
                           <div class='col-xs-12 col-md-4 form-group cvc required'>
                              <label class='control-label'><b> CVC </b></label> <input autocomplete='off'
                                 class='form-control card-cvc' placeholder='ex. 311' size='4'
                                 type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'><b> Expiration Month </b></label> <input
                                 class='form-control card-expiry-month' placeholder='MM/Ex.  07' size='2'
                                 type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'><b> Expiration Year </b></label> <input
                                 class='form-control card-expiry-year' placeholder='YYYY/Ex. 2022' size='4'
                                 type='text'>
                           </div>
                        </div>
                        <div class='form-row row my-1'>
                           <div class='col-md-12 error form-group hide'>
                              <div class='alert-danger alert'>Please correct the errors and try
                                 again.
                              </div>
                           </div>
                        </div>


                        <div class="privacy-wrp my-2 py-2">
                                            <p>Your personal data will be used to process your order, support your experience
                                                throughout this website and for other purposes described in our <a href="services.html"><b><i>privacy policy.</i></b></a></p> 
                                                <input type="checkbox" required="" id="AND">
                                                <label for="AND" class="allterms"> 
                                                    <p>I HAVE READ AND AGREE TO THE WEBSITE <a href="#" disbaled> TERMS AND CONDITIONS</a></p>
                                                </label>  </div>


                        <div class="row">
                           <div class="col-sm-12 text-center">
                              <button id ="" class=" font-weight-bold btn btn-dark m-auto btn-lg btn-block" type="submit" >Pay Now (<span id="paynow">$</span><span id="stripBtn">{{$total}}</span>)</button>
                           </div>
                        </div>

                     </form>


                  </div>
               </div>
            </div>
         </div>
      </div>




   
      

   
  <!-- Stripe built in Js starts here! -->

   <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
   <script type="text/javascript">
      $(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                'input[type=text]', 'input[type=file]',
                'textarea'
            ].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
    });
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});
   </script>




  

