<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ChambController;

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
/*
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
Route::get('/', [HomeController::class,'index']);

//Praktikum 2 Resource /about
Route::get('/about', [AboutController::class,'about']);

//Praktikum 2 Resource /articles/{id}
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
*/

// Route::get('/', function () {
//     return view('educastudio');
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/", [ChambController::class, 'index']);
Route::get("/aboutus", [ChambController::class, 'aboutus']);
Route::get("/pricing", [ChambController::class, 'pricing']);
Route::get("/productpage", [ChambController::class, 'productpage']);
Route::get("/category", [ChambController::class, 'category']);
Route::get("/cms", [ChambController::class, 'cms']);
Route::get("/howitworks", [ChambController::class, 'howitworks']);
Route::get("/profile", [ChambController::class, 'profile']);
