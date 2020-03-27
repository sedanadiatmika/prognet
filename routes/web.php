<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('/login','adminController@loginadmin');
    Route::get('/register','adminController@registeradmin');
    Route::post('/login','adminController@loginsubmit');
    Route::post('/register','adminController@registersubmit');
    Route::get('/logout','adminController@logoutadmin');
    Route::get('/dashboard', 'admincontroller@dashboard')->middleware('loginadmin');
    Route::get('/registration_success','adminController@adminreg');
});

Route::prefix('')->group(function() {
    Route::get('/login','userController@userlogin');
    Route::get('/register','userController@userregister');
    Route::post('/register','userController@registersubmit');
    Route::get('/login','userController@userlogin');
    Route::post('/login','userController@loginsubmit');
    Route::get('/logout','userController@logout');
    Route::get('/verify/{email}','userController@verifyemailuser');
    Route::get('/verify',function(){
         return view('user/verify');
    });
    Route::get('/verifysuccess','userController@verifyemailsuccess');


    Route::middleware('userlogin')->group(function(){
        Route::get('/dashboard','userController@dashboard');
    });

    Route::get('/verifyagain','userController@sendagain');
});


