<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

//Praktikum 1 URL /articles/{id}
Route::get('/articles/{id}', function($id){
    echo "Ini adalah Halaman artikel dengan ID: ".$id;
});

//Praktikum 2 Resource /
Route::get('/', [PageController::class,'index']);

//Praktikum 2 Resource /about
Route::get('/about', [PageController::class,'about']);

//Praktikum 2 Resource /articles/{id}
Route::get('/articles/{id}', [PageController::class, 'articles']);