<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Hi! Selamat Datang";
    }

    public function about(){
        return "Nama : Dawam Ilhami Assidiqi <br> NIM : 2041720181";
    }

    public function articles($id){
        return "Ini adalah halaman Artikel dengan ID:".$id;
    }
}