<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function gallery(){
        return view('gallery');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
