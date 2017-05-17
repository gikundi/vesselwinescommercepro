<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// CORS
header('Access-Control-Allow-Origin: http://localhost:8000');
header('Access-Control-Allow-Credentials: true');


header('Access-Control-Allow-Methods:GET, POST, PUT, DELETE, OPTIONS');

header('Access-Control-Allow-Headers:Origin, Content-Type, Accept, Authorization, X-Requested-With');


Route::get('/', function () {
    return view('index');
    
});


// Route::get('/api/v1/cart/{id?}', 'CartController@index');

Route::group(['prefix' => 'api/v1'],function(){

    Route::resource('cart','CartController');

    Route::get('cart_items','CartController@cartDetails');

});
