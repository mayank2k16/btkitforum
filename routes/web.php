<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

//Authenticated Routes
Route::group(['middleware' => 'auth'], function () {
    
    //Routes--

});


//UnAutenticated Routes

Route::get('/', function () {
    return redirect('home');
});
 
Route::get('/home', 'HomeController@index');

Route::get('/addpost',function(){
    return view('PostForm');
});

Route::post('/addpost','HomeController@addpost');
