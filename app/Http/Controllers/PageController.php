<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Home section

    public function home(){
        return view('layouts.base');
    }

    public function contacts(){
        return view('pages.contact');
    }
    
}
