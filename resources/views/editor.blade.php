@extends('content-layout.layout')
@section('thecontents') 







        <!-- Hidden Email Modal --> 
        <div class="modalE fade m-auto" id="reminderModal" tabindex="-1" aria-labelledby="reminderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content"> 
                    <div class="modal-body">
                        <div class="reminder-modalcontent">
                            <h2>Save design  <button type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16"><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></span> </button></h2>
                            <p>By entering your email you will receive a link to a saved digital preview of your design, so that you can continue editing it later.</p>
                            
                             <form action="" id="formEmail" method="post"> 
                                <label for="#">
                                <input type="text" name="remail" id="remail" placeholder="Your e-mail" class="form-control" required="">
                            </label>
                            
                            <button type="submit" class="btn btn-primary">Save and remind me later</button>

                        </form>

                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <!-- Hidden Email Modal --> 



<!-- MAIN CODE STARTS HERE -->



    <div class="editor-header">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 offset-lg-4 text-end">
                    <div class="HeaderEditorContent float-right">
                        <div class="eHeadertext">
                            <h5>Customize your design</h5>
                            <p>Change location, labels and appearance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="celestial-form"></div>

    <!-- editor-area START -->
    <form id="bythis" action="" method="get"> @csrf
        <div class="editor-area">
            <div class="outout">
                <div class="tps m-auto" id="capture"> 
                    <div class="thePoster" data-orientation="sizePortrait" data-ppss="size50x70cm" id="theModern">
                        <div class="poster-body">
                            <div id="celestial-map"></div>
                            <h3 class="thisisMessageLine">Hello world</h3>
                            <div class="posterWrp">

                                <p class="tagline">JANUARY 1st 2021</p>
                                <h4 class="text-center"><span>NEW YORK</span>,<p class="divider">UNITED STATES</p></h4> 

                                <p class="subline">40.77°N / -73.87°W</p>
                            </div>

                            <div class="posterWrpBoxes">
                                <h4>Hello world</h4>
                                <p><span class="divider">Dhaka</span>, <span class="subline">BANGLADESH</span> / <span class="taglines">JANUARY 1st 2021</span></p> 

                               
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="editor">  
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne"> 
                            <button class="btn btn-link btn-block collapsed text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span><i class="fal fa-angle-down"></i></span> Location and date 
                            </button> 
                        </div> 
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="location"> 
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for=""> 
                                                <div class="lc">
                                                    <input class="autoSuggest" id="live_search"type="text" placeholder="Start typing the name of a place" data-country="" data-city="" data-lat="" data-lon="">  <i class="fal fa-search"></i> 
                                                    <ul class="autoSuggestions"></ul>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="l-dats">   
                                                <span class="bdircts">Enter your specific date</span>
                                                <label for="" class="SelectionsHere"> 
                                                    <div class="dateSelects"> 
                                                        <select name="day" id="sDay">
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                        </select>
                                                        <select name="month" id="sMonth">
                                                            <option value="Jan">Jan</option>
                                                            <option value="Feb">Feb</option>
                                                            <option value="Mar">Mar</option>
                                                            <option value="Apr">Apr</option>
                                                            <option value="May">May</option>
                                                            <option value="Jun">Jun</option>
                                                            <option value="Jul">Jul</option>
                                                            <option value="Aug">Aug</option>
                                                            <option value="Sep">Sep</option>
                                                            <option value="Oct">Oct</option>
                                                            <option value="Nov">Nov</option>
                                                            <option value="Dec">Dec</option>
                                                        </select>
                                                        <select name="year" id="sYear">
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option> 
                                                        </select>
                                                    </div>
                                                    <div class="timesSelects"> 
                                                        <select name="hour" id="sHour">
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                        </select> 
                                                        <small>:</small>
                                                        <select name="minute" id="sMinute">
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                            <option value="32">32</option>
                                                            <option value="33">33</option>
                                                            <option value="34">34</option>
                                                            <option value="35">35</option>
                                                            <option value="36">36</option>
                                                            <option value="37">37</option>
                                                            <option value="38">38</option>
                                                            <option value="39">39</option>
                                                            <option value="40">40</option>
                                                            <option value="41">41</option>
                                                            <option value="42">42</option>
                                                            <option value="43">43</option>
                                                            <option value="44">44</option>
                                                            <option value="45">45</option>
                                                            <option value="46">46</option>
                                                            <option value="47">47</option>
                                                            <option value="48">48</option>
                                                            <option value="49">49</option>
                                                            <option value="50">50</option>
                                                            <option value="51">51</option>
                                                            <option value="52">52</option>
                                                            <option value="53">53</option>
                                                            <option value="54">54</option>
                                                            <option value="55">55</option>
                                                            <option value="56">56</option>
                                                            <option value="57">57</option>
                                                            <option value="58">58</option>
                                                            <option value="59">59</option>
                                                            <option value="60">60</option>
                                                        </select>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>  
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-header" id="headingOnet"> 
                            <button class="btn btn-link btn-block collapsed text-left" type="button" data-toggle="collapse" data-target="#collapseOnet" aria-expanded="true" aria-controls="collapseOnet">
                                <span><i class="fal fa-angle-down"></i></span> <ab>Customize the</ab> style 
                            </button> 
                        </div> 
                        <div id="collapseOnet" class="collapse" aria-labelledby="headingOnet" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="style">
                                    <div class="poster-layout">
                                        <fieldset id="layOuts">
                                            <ul>
                                                <li> 
                                                    <input type="radio" value="cicrleLayout" data-mapScale="1" id="layout1" name="layOuts" checked>
                                                    <label for="layout1"> <div class="layBox cicrcle"></div> Circle Layout</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="boxLayout" data-mapScale="1.5" id="layout2" name="layOuts">
                                                    <label for="layout2"> <div class="layBox"></div> Box Layout</label>
                                                </li> 
                                            </ul>
                                        </fieldset>
                                    </div>
                                    <div class="mapthestyles">
                                        <fieldset id="themeGroup">
                                            <ul>
                                                <li> 
                                                    <input type="radio" value="theModern" id="n1" name="themeGroup" checked>
                                                    <label for="n1"><img src="{{ asset('/') }}assets/img/themes/1.jpg" alt=""> Modern</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Asphalt" id="n2" name="themeGroup">
                                                    <label for="n2"><img src="{{ asset('/') }}assets/img/themes/2.jpg" alt=""> Asphalt</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Nautical" name="themeGroup" id="n3">
                                                    <label for="n3"><img src="{{ asset('/') }}assets/img/themes/3.jpg" alt=""> Nautical</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Retro" name="themeGroup" id="n4">
                                                    <label for="n4"><img src="{{ asset('/') }}assets/img/themes/4.jpg" alt=""> Retro</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Dark" name="themeGroup" id="n5">
                                                    <label for="n5"><img src="{{ asset('/') }}assets/img/themes/5.jpg" alt=""> Dark</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Bright" name="themeGroup" id="n6">
                                                    <label for="n6"><img src="{{ asset('/') }}assets/img/themes/6.jpg" alt=""> Bright</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Nisshoki" name="themeGroup" id="n7">
                                                    <label for="n7"><img src="{{ asset('/') }}assets/img/themes/7.jpg" alt=""> Nisshoki</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Gaia" name="themeGroup" id="n8">
                                                    <label for="n8"><img src="{{ asset('/') }}assets/img/themes/8.jpg" alt=""> <span class="gtc">Collab!</span> Gaia</label>
                                                </li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                    <div class="elements ckukblk"> 
                                        <ul>
                                            <li><span>Constellations</span> 
                                                <div class="checkboxes-and-radios">  
                                                    <input type="checkbox" name="checkbox-cats[]" id="checkbox" class="constelles" value="1" checked>
                                                    <label for="checkbox"> </label>  
                                                </div>
                                            </li>
                                            <li><span>Enable grid</span> 
                                                <div class="checkboxes-and-radios">  
                                                    <input type="checkbox" name="checkbox-cats[]" id="checkbox-2" class="enGrd" value="1" checked>
                                                    <label for="checkbox-2"> </label>  
                                                </div>
                                            </li> 
                                            <li><span>Milkyway</span> 
                                                <div class="checkboxes-and-radios">  
                                                    <input type="checkbox" name="checkbox-cats[]" id="checkbox-5" class="mlkw" value="1">
                                                    <label for="checkbox-5"> </label>  
                                                </div>
                                            </li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-header" id="headingOneth"> 
                            <button class="btn btn-link btn-block collapsed text-left" type="button" data-toggle="collapse" data-target="#collapseOneth" aria-expanded="true" aria-controls="collapseOneth">
                                <span><i class="fal fa-angle-down"></i></span> <ab>Customize the</ab> text 
                            </button> 
                        </div> 
                        <div id="collapseOneth" class="collapse" aria-labelledby="headingOneth" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="themetext">
                                    <label for="">
                                        <span>Headline</span>
                                        <input type="text" value="New York" name="" id="HeadLine" max="40">
                                    </label>
                                    <label for="">
                                        <span>Divider</span>
                                        <input type="text" value="United States" name="" id="Devider">
                                    </label>
                                    <label for="">
                                        <span>Tagline</span>
                                        <input type="text" value="January 1st 2021" name="" id="TagLine" max="40">
                                    </label>
                                    <label for="">
                                        <span>Subline</span>
                                        <input type="text" value="40.777°N / -73.873°W" name="" id="SubLine">
                                    </label>
                                    <label for="" class="theMessageField">
                                        <span>Mesage</span>
                                        <textarea name="" id="pMsg" placeholder="type your message">Hello world</textarea>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-header" id="headingOnef"> 
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOnef" aria-expanded="true" aria-controls="collapseOnef">
                                <span><i class="fal fa-angle-down"></i></span> <ab>Change the</ab> size 
                            </button> 
                        </div> 
                        <div id="collapseOnef" class="collapse show" aria-labelledby="headingOnef" data-parent="#accordionExample">
                            <div class="card-body"> 
                                <div class="ppsizes">
                                    <div class="poster-size sizesIncenti">
                                        <p>Select poster size</p>
                                        <div class="theSSZZ active" data-class="centimiterAction"> 
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".7" value="size30x40cm" name="radio-group" id="fsz">
                                            <label for="fsz">30x40cm</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".85" value="size50x70cm" name="radio-group" id="ssz">
                                            <label for="ssz">50x70cm</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling="1" value="size70x100cm" name="radio-group" id="tsz" checked>
                                            <label for="tsz">70x100cm</label> 
                                        </div>
                                        <div class="theSSZZ" data-class="inchAction"> 
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".65" value='sInche11x17' name="radio-group" id="fsz1">
                                            <label for="fsz1">11x17"</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".75" value='sInche18x24' name="radio-group" id="ssz2">
                                            <label for="ssz2">18x24"</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".9" value='sInche24x36' name="radio-group" id="tsz3">
                                            <label for="tsz3">24x36"</label>
                                        </div>
                                        <div class="theSSZZ" data-class="ALabelAction"> 
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".55" value='sInche11x17' name="radio-group" id="fsz001">
                                            <label for="fsz001">A4</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".75" value='sInche18x24' name="radio-group" id="ssz002">
                                            <label for="ssz002">A3</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".88" value='sInche24x36' name="radio-group" id="tsz003">
                                            <label for="tsz003">A2</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".95" value='sa1' name="radio-group" id="tsz004">
                                            <label for="tsz004">A1</label>
                                        </div>
                                    </div>
                                    <div class="cngIt">Switch size standards <span class="centimiterAction active">CM (EU)</span> <span class="inchAction">Inch (US)</span> <span class="ALabelAction">A4-A1</span></div>
                                    <div class="orientation">
                                        <p>Select orientation</p>
                                        <input type="radio" value="sizePortrait" checked name="radio-grouptt" id="Portrait">
                                        <label for="Portrait">Portrait</label>
                                        <input type="radio" value="sizeLandscape" name="radio-grouptt" id="landscape">
                                        <label for="landscape">Landscape</label> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>  
                <button type="button" class="save-design-text"  data-toggle="modalE" data-target="#reminderModal"><i class="fal fa-envelope"></i> Save design and remind me later</button> 





                <div class="prices ">
                    
                    

                    <button type="submit" id="cartBtn" class="py-3  w-100 bg-dark text-white text-center">
                       
            <span style=""><i id="blockSpinners" class="fas fa-circle fa-circle-notch fa-1x " style="display:none"></i></span>  <i id="blockSpinner" class="fas fa-cart-plus"></i>
            <span class="thisistheposterPrice h5 mt-2" id="theprice"> $69 </span> 
             <div >ADD TO CART <i class="fas fa-long-arrow-right"></i></div></button>

                </div>

            </div> 
        </div>
    </form>












        <script src="{{ asset('/') }}assets/js/vendor/jquery-3.4.1.min.js"></script>


<script type="text/javascript">
    
$('.cartBn').click(function() {
    $('.modal')
        .prop('class', 'modal fade') // revert to default
        .addClass( $(this).data('direction') );
    $('.modal').modal('show');
    $('.modal').modal('pr-0');
});

</script>








    <!-- editor-area END -->
    <script src="{{ asset('/') }}assets/js/mobiscroll.javascript.min.js"></script>

     <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


    <script> 
        


           
    

        // Major code starts here

        window.addEventListener('load',() => {
            
            let formEmail         = document.querySelector('#formEmail')
            let form             = document.querySelector('#bythis')
            let posterMessage    = document.querySelector('.thisisMessageLine')
            let posterPrice      = document.querySelector('.thisistheposterPrice')
            let place            = document.querySelector('.posterWrp h4')
            let TagLine          = document.querySelector('#TagLine')
            let TagLineTx        = document.querySelector('.tagline')
            let TagLineTx2       = document.querySelector('.taglines')
            let sublineId        = document.querySelector('#SubLine')
            let subline          = document.querySelector('.posterWrp .subline')
            let subline2         = document.querySelector('.posterWrpBoxes .subline')
            let adtime           = document.querySelector('#datetime')
            let here             = document.querySelector('#here')

            let dass      = document.querySelector('#demo-datetime-day')
            let AllSc     = document.querySelectorAll('.SelectionsHere select')
            let sDay      = document.querySelector('#sDay')
            let sMonth    = document.querySelector('#sMonth')
            let sYear     = document.querySelector('#sYear')
            let sHour     = document.querySelector('#sHour')
            let sMinute   = document.querySelector('#sMinute')
            let AllMonths = ['','Jan',"Feb","Mar", "Apr", 'May', "Jun", "Jul",'Aug',"Sep","Oct","Nov",'Dec']; 


            function Sm(sDay,sMonth,sYear,sHour,sMinute) { 
                let monthIndex;
                AllMonths.forEach(lMnt => {
                    if (lMnt === sMonth.value) {
                        monthIndex = AllMonths.indexOf(lMnt);
                    }
                }); 
                const cStr1 = sMonth.value+" "+sDay.value+"th "+sYear.value;
                const cStr2 = sYear.value+"-"+monthIndex+"-"+sDay.value+" "+sHour.value+":"+sMinute.value;

                TagLine.value           = cStr1
                TagLineTx.innerHTML     = cStr1
                TagLineTx2.innerHTML    = cStr1 


                adtime.value = cStr2+":00 +0600";
                here.click();
    
            }
            AllSc.forEach(aItc => {
                aItc.addEventListener('change', () => {
                    Sm(sDay,sMonth,sYear,sHour,sMinute)
                })
            }); 

 
            form.addEventListener('submit', (e) => {
                
           $('#blockSpinners').show();
            $('#blockSpinner').hide();

                e.preventDefault();   
                const myPromise = new Promise(function(myResolve, myReject) { 


                     

                
                    // This is for the Final poster SIze
                    let upThis        = JSON.parse(localStorage.getItem('finalPoster'))
                    upThis.message    = posterMessage.textContent;
                    upThis.date       = TagLineTx.textContent;
                    upThis.latlon     = subline.textContent;  
                    upThis.place      = place.textContent;
                    upThis.cartActivat= 'yes';
                    upThis.price      = posterPrice.textContent;
                     

                    localStorage.setItem('finalPoster',JSON.stringify(upThis))
                    
                    let gettingData   = JSON.parse(localStorage.getItem('finalPoster'))
                    
                    let posterIsReady =  {
                        place: gettingData.place,
                        message:gettingData.message,
                        date: gettingData.date,
                        latlon: gettingData.latlon,
                        posterStyle: gettingData.posterStyle,
                        posterTheme: gettingData.posterTheme,
                        Constellations: gettingData.Constellations,
                        Enablegrid: gettingData.Enablegrid,
                        Milkyway: gettingData.Milkyway,
                        posterSize: gettingData.posterSize,
                        orientation: gettingData.orientation,
                        price: gettingData.price,
                        cartActivat: gettingData.cartActivat,
                        posterImage: "",
                        posterMap: ""
                    }

                    var data = JSON.stringify(posterIsReady);
                    console.log(posterIsReady);

                    localStorage.setItem('finalPosterSend',JSON.stringify(posterIsReady))
                    

                        
                 /*   window.scrollTo(0, 0);   
                    html2canvas(document.getElementById("theModern")).then(function (canvas) { 
                        let upThis        = JSON.parse(localStorage.getItem('finalPosterSend'))
                        var x=canvas.toDataURL("image/jpeg", 0.9); 
                        upThis.posterImage= canvas.toDataURL("image/jpeg", 0.9)
                        localStorage.setItem('finalPosterSend',JSON.stringify(upThis))
                    });    



                    html2canvas(document.getElementById("celestial-map")).then(function (canvas) { 
                        let upThis        = JSON.parse(localStorage.getItem('finalPosterSend')) 
                        upThis.posterMap  = canvas.toDataURL("image/jpeg", 0.9)
                        localStorage.setItem('finalPosterSend',JSON.stringify(upThis))
 
                        myResolve("I love You !!")

                        localStorage.removeItem("finalPoster");

                    }); */
                    form.classList.add('loading')

                   
                   // /* 
                  
                    $.ajax({

                 url: 'http://localhost/laravel_projects/starmap/public/checkout',
                 type: 'post',
                 data: {posterIsReady:data, _token: '{{csrf_token()}}'},
                 success: function(response){
                   console.log(response);

 /*$('#cart_msg').html("<div class='bg-dark w-25 float-right text-center' style='height:42px; margin-right:170px' ><h6><span style='color:white;'>One item added to cart!</span></h6></div>"); */

    //window.location.href = 'http://localhost/laravel_projects/starmap/public/checkout';
                 }
                });  // */



                    // 2nd ajax call
                    window.scrollTo(0, 0);   
                    html2canvas(document.getElementById("capture")).then(function (canvas) { 
                       
                        var x=canvas.toDataURL("image/jpeg", 0.9) ;
                         $.ajax({

                 url: 'http://localhost/laravel_projects/starmap/public/imagUrl',
                 type: 'post',
                 data: {x, _token: '{{csrf_token()}}'},
                 success: function(response){
                   console.log(response);



                $('#cart_msg').html("<div class='text-dark alert alert-success w-25 float-right text-center' alert-dismissible role='alert' style='height:42px; margin-right:170px' ><span class='text-dark' >One item added to cart!</span> <button type='button' class='close' data-dismiss='alert'> &times;</button> </div>"); 

                //alert('One item added to cart!')
                //window.location.reload(); 
               

                  //document.getElementById("modalBtn").click();

                 }
                });
                             });    
 
 

             

                 }); //mypromise ends



                
                const lastRun   = () => { 
                   // window.location.replace(window.location.origin+"/laravel_projects/starmap/public/checkout");

                  

                }
                myPromise.then(function() {
                    lastRun()
                });


                }); //form.onsubmit ends




               /* $.ajax({
                 url: 'json-receive.php',
                 type: 'post',
                 data: {user: userStr},
                 success: function(response){
        //do whatever.
                 }
                }); */ 


                // 2ND FORM IS INSIDE THIS BLOCK



            formEmail.addEventListener('submit', (e) => {
                
           $('#blockSpinners').show();
            $('#blockSpinner').hide();

                e.preventDefault();   
                const myPromise = new Promise(function(myResolve, myReject) { 


                     

                
                    // This is for the Final poster SIze
                    let upThis        = JSON.parse(localStorage.getItem('finalPoster'))
                    upThis.message    = posterMessage.textContent;
                    upThis.date       = TagLineTx.textContent;
                    upThis.latlon     = subline.textContent;  
                    upThis.place      = place.textContent;
                    upThis.cartActivat= 'yes';
                    upThis.price      = posterPrice.textContent;
                     

                    localStorage.setItem('finalPoster',JSON.stringify(upThis))
                    
                    let gettingData   = JSON.parse(localStorage.getItem('finalPoster'))
                    
                    let posterIsReady =  {
                        place: gettingData.place,
                        message:gettingData.message,
                        date: gettingData.date,
                        latlon: gettingData.latlon,
                        posterStyle: gettingData.posterStyle,
                        posterTheme: gettingData.posterTheme,
                        Constellations: gettingData.Constellations,
                        Enablegrid: gettingData.Enablegrid,
                        Milkyway: gettingData.Milkyway,
                        posterSize: gettingData.posterSize,
                        orientation: gettingData.orientation,
                        price: gettingData.price,
                        cartActivat: gettingData.cartActivat,
                        posterImage: "",
                        posterMap: ""
                    }

                    var data = JSON.stringify(posterIsReady);
                    console.log(posterIsReady);

                    localStorage.setItem('finalPosterSend',JSON.stringify(posterIsReady))
                    

                        
                 /*   window.scrollTo(0, 0);   
                    html2canvas(document.getElementById("theModern")).then(function (canvas) { 
                        let upThis        = JSON.parse(localStorage.getItem('finalPosterSend'))
                        var x=canvas.toDataURL("image/jpeg", 0.9); 
                        upThis.posterImage= canvas.toDataURL("image/jpeg", 0.9)
                        localStorage.setItem('finalPosterSend',JSON.stringify(upThis))
                    });    



                    html2canvas(document.getElementById("celestial-map")).then(function (canvas) { 
                        let upThis        = JSON.parse(localStorage.getItem('finalPosterSend')) 
                        upThis.posterMap  = canvas.toDataURL("image/jpeg", 0.9)
                        localStorage.setItem('finalPosterSend',JSON.stringify(upThis))
 
                        myResolve("I love You !!")

                        localStorage.removeItem("finalPoster");

                    }); */
                    formEmail.classList.add('loading')

                   
                   // /* 
                  
                    $.ajax({

                 url: 'http://localhost/laravel_projects/starmap/public/savlist',
                 type: 'post',
                 data: {posterIsReady:data, _token: '{{csrf_token()}}'},
                 success: function(response){
                   console.log(response);

 /*$('#cart_msg').html("<div class='bg-dark w-25 float-right text-center' style='height:42px; margin-right:170px' ><h6><span style='color:white;'>One item added to cart!</span></h6></div>"); */

    //window.location.href = 'http://localhost/laravel_projects/starmap/public/checkout';
                 }
                });  // */




                             


                    // 2nd ajax call
                    window.scrollTo(0, 0);   
                    html2canvas(document.getElementById("capture")).then(function (canvas) { 
                       
                        var x=canvas.toDataURL("image/jpeg", 0.9) ;
                         $.ajax({

                 url: 'http://localhost/laravel_projects/starmap/public/imagSave',
                 type: 'post',
                 data: {x, _token: '{{csrf_token()}}'},
                 success: function(response){
                   console.log(response);

                
                //window.location.reload(); 
               

                  //document.getElementById("modalBtn").click();

                 }
                });
                             });  



                    // 3rd AJAX CALL

             var remail = $('#remail').val();

            $.ajax({
                 url: "saveOnlyEmail/"+remail,
                method: "get",
                //data: {remail, _token: '{{csrf_token()}}'},
                success: function (response) {
                    console.log(response);
                    alert("Design Saved! Go to your Email to find it");
                    //location.reload();

                    
                    
                },
                error:function(error){
                    console.log(error);
                    //alert('Item Saved, Go to your email to find it!')
                    
                     }
           
            });

                             //3RD AJAX CALL



  
 
 

             

                 }); //mypromise ends



                
                const lastRun   = () => { 
                   // window.location.replace(window.location.origin+"/laravel_projects/starmap/public/checkout");

                  

                }
                myPromise.then(function() {
                    lastRun()
                });


                }); //formEmail.onsubmit ends


                //2ND FORM IS INSIDE THIS BLOCK








            }) // load eventlistener ends


    



 
    </script>  






@endsection