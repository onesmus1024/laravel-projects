<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($name){
        echo "This is my first controller <br>";
        if($name=='ones'){
            echo "congratulation you are a genius";
        }
        echo "username is $name";
    }
}
