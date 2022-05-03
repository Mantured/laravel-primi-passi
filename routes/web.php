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
    return view('home');
})-> name("home");
Route::get('/cover', function () {
    return view('partials.cover');
}) -> name("cover"); 

Route::get('/text', function () {
    $data= [
        'title' => 'Master of Puppets',
    ];
    return view ('partials.text', $data);
}) -> name("text");
