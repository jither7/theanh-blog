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

Route::get('/birthday', function () {
    return view('birthday');
});

Route::get('/countdown', function () {
    $now = strtotime('now');
    $birthday = strtotime('2018-07-15 00:00:00');
    if ($now >= $birthday) {
        return redirect('/birthday');
    }
    return view('countdown');
});