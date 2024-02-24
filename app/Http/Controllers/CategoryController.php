<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function food(){
        return view('food-beverage');
    }
    public function beauty(){
        return view('beauty-health');
    }
    public function home(){
        return view('home-care');
    }
    public function baby(){
        return view('baby-kid');
    }
}
