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

Route::get('/sign', function () {
    return view('sign');
});

Route::get('/', function () {
    return view('register');
});

Route::any('/sign-up', function () {
    return view('choose_license');
});

Route::any('/plan', function () {
    return view('plan');
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

Route::any('/customer', function () {
    return view('dashboard/customer');
});

Route::any('/contacts', function () {
    return view('dashboard/contacts');
});

Route::any('/contacts-customer', function () {
    return view('dashboard/contacts-1');
});

Route::any('/place', function () {
    return view('dashboard/place');
});

Route::any('/search', function () {
    return view('dashboard/search');
});

Route::any('/calendar', function () {
    return view('dashboard/calendar');
});

Route::any('/schedule', function () {
    return view('dashboard/schedule');
});

Route::any('/setting', function () {
    return view('dashboard/setting');
});

Route::any('/profile', function () {
    return view('dashboard/profile');
});

Route::any('/reminder', function () {
    return view('dashboard/reminder');
});

Route::any('/add-reminder', function () {
    return view('dashboard/addreminder');
});

Route::any('/work', function () {
    return view('dashboard/work');
});
