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
/* Jobsheet 1
Route::get('/', function () {
    return view('welcome');
});
*/

//Jobsheet 2

//Praktikum 1 URL /
Route::get('/', function(){
    echo "Selamat Datang";
});

//Praktikum 1 URL /about
Route::get('/about', function(){
    echo "2041720181 <br>";
    echo "Dawam Ilhami Assidiqi <br>";
    echo "TI-2H";
});

