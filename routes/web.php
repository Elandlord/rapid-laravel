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

/*
|--------------------------------------------------------------------------
| Hosting routes
|--------------------------------------------------------------------------
*/


Route::get('/', function () {
    return view('hosting.home');
});

Route::get('/hosting/pakketten', function () {
    return view('hosting.packages');
});

Route::get('/hosting/domeinen', function () {
    return view('hosting.domains');
});

Route::get('/hosting/telefonie', function () {
    return view('hosting.telephony');
});

Route::get('/hosting/online-werken', function () {
    return view('hosting.online-work');
});


