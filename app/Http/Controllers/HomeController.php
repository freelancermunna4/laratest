<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view("welcome");
    }

    public function about(){
        return "I am About Page";

    }

    public function contact(){
        return "I am Contact Page";
    }
}

