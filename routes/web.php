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
    return view('sign');
});

Route::any('/sign-up', function () {
    return view('choose_license');
});

Route::any('/pricing', function () {
    return view('pricing');
});

Route::any('/pay', function () {
    return view('pay');
});

Route::any('/first', function () {
    return view('dashboard/first');
});

Route::any('/employee', function () {
    return view('dashboard/employee');
});

Route::any('/job', function () {
    return view('dashboard/job');
});

Route::any('/search', function () {
    return view('dashboard/search');
});