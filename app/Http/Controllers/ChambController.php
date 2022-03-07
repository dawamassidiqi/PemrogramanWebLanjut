<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChambController extends Controller
{
    //
    public function index() {
        return view("chamb.index");
    }
    public function aboutus() {
        return view("chamb.about-us");
    }
    public function pricing() {
        return view("chamb.pricing");
    }

    public function productpage() {
        return view("chamb.productpage");
    }

    public function category() {
        return view("chamb.category");
    }

    public function cms() {
        return view("chamb.cms");
    }

    public function howitworks() {
        return view("chamb.howitworks");
    }

    public function profile() {
        return view("chamb.profile");
    }
}
