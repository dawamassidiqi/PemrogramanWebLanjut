<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChambController extends Controller
{
    //
    public function index() {
        return view("chamb.index");
    }
}
