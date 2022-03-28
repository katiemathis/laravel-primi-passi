<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
       "string"=> 'Hello World!'
    ];
    return view('home', $data);
    
});

Route::get('/spotify', function () {
    return view('spotify');
});

Route::get('/home', function () {
    return view('home');
    
});

Route::get('/another', function () {
    return view('another');
});

Route::get('/this', function () {
    return view('this');
    
});

Route::get('/faq', function () {
    return view('faq');
});
