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

Route::get('/home', function () {

    $name='Laravel';
    return view('home', compact('name'));
})->name('home');



Route::get('/', function () {

    return view('other');
})->name('nav');



Route::get('/work', function () {

    return view('work');
})->name('work');



Route::get('/who', function () {

    return view('who');
})->name('who');
