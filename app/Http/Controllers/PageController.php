<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        

        return view('home');
    }
    function about(){
        $title= 'Tentang Kami';

        return view('about', compact('title'));
    }
}
