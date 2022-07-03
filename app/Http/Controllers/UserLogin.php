<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLogin extends Controller
{
    function Login(Request $req){
        $req->validate([
            'username'=>'required|min:8'
        ]);
        echo $req->input('_token');
    }
}

