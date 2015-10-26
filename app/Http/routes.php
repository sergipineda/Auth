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


Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    \Debugbar::startMeasure("resource");
    $authenticated= false;
    Session::set ('authenticated', false);
   // dd (Session::all());
    \Debugbar::info("Xivato1!!!");
    \Debugbar::info(Session::all());
    if (Session::has ('authenticated')){
     if (Session::get ('authenticated')== true) {

         $authenticated = true;
     }
    }

    if ($authenticated){
        \Debugbar::stopMeasure("resource");
        return view('resource');
    }else {
        return view('login');
    }
});
