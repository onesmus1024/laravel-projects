<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserLogin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/about/{name}',function($name){
    return view('about',['name'=>$name]);
});

// Route::get('/contact',function(){
//     return view('contact');
// });
Route::get('/login',function(){
    return view('login');
});
// how to create route for controllers
Route::get('/',[PageController::class,'home']);
Route::get('/contacts',[PageController::class,'contacts']);
Route::get('users/{username}',[Users::class,'index']);
Route::post('logincontroller',[UserLogin::class,'Login']);