<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('orders/admin', 'PaymentsController@orders');
Route::get('cancel_order/{id}', 'PaymentsController@cancel_order');

Route::get('/', 'PaymentsController@editor');
Route::get('/editor', 'PaymentsController@editor');

Route::get('checkouts', 'PaymentsController@paymentPage');
Route::post('/imagUrl', 'PaymentsController@imagUrl');
Route::post('/imagSave', 'PaymentsController@imagSave');

Route::post('/checkout', 'PaymentsController@payment'); // add to  cart
Route::post('/savlist', 'PaymentsController@savlist'); // add to  savlist
Route::get('/saveToCart/{saveid}', 'PaymentsController@saveToCart'); // add to  savelist To Cart

Route::get('/saveOnlyEmail/{email}', 'PaymentsController@saveOnlyEmail'); // add email to  savlist

Route::get('/save/{email}', 'PaymentsController@saved'); //link from gmail


Route::get('basket', 'PaymentsController@basketPage')->name('basket');
Route::get('addframe/{fname}', 'PaymentsController@addframe');
Route::post('posterQuantity/{id}', 'PaymentsController@posterQuantity');
Route::post('frameQuantity/{id}', 'PaymentsController@frameQuantity');
Route::get('delmap/{id}', 'PaymentsController@delmap');
Route::get('delSavedItem/{id}/{user_email}', 'PaymentsController@delSavedItem');
Route::get('delframe/{id}', 'PaymentsController@delframe');
Route::post('map_quantity/{id}', 'PaymentsController@map_quantity');
Route::post('frame_quantity/{id}', 'PaymentsController@frame_quantity');


//Route::get('mail', function(){ $email="Email"; return view('mail', compact('email'));  });


// Stripe Payment Routes
Route::get('stripe', 'StripeController@stripe');
Route::post('stripe', 'StripeController@stripePost')->name('stripe.post');








