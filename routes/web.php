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

Route::view('', 'Admin.dashboard');
Route::view('login', 'Login');

Route::view('marksheet', 'Admin.marksheet')->name('mark-sheet');
Route::view('add/trainee-to-register', 'Admin.add-to-sheet')->name('add-to-register');

Route::group(["prefix" => "create"], function () {
    Route::view('trainee', 'Admin.addtrainee')->name('add-trainee');
    Route::view('dorm-warden', 'Admin.addwarden')->name('add-dorm-warden');
    Route::view('course', 'Admin.addprogram')->name("add-course");
});
