<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ChambController extends Controller
{
    //
    public function index() {
        $products = Product::all();
        return view("chamb.index", ['products' => $products]);
    }
    public function aboutus() {
        return view("chamb.about-us");
    }
    public function pricing() {
        return view("chamb.pricing");
    }

    public function productpage($id) {
        $product = Product::find($id);

        return view("chamb.productpage", ['product' => $product]);
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
