<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/jasawebsite', function () {
    return view('jasawebsite');
});

Route::get('/desaingrafis', function () {
    return view('desaingrafis');
});

Route::get('/softwareaplikasi', function () {
    return view('softwareaplikasi');
});

Route::get('/perbaikanwebsite', function () {
    return view('perbaikanwebsite');
});