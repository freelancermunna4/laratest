<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    function Home(){
        return view('welcome');
    }

    function About($id='Default id'){
        $arr = ['id' => $id];
        return view('about',$arr);

    }

    function Contact($id='Default id'){
        $arr = ['id' => $id];
        return view('contact',$arr);

    }
}
