<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http;
use Illuminate\Http\Request;
// use App\Http\Controllers\C_titles;
// use App\Models\M_titles;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/my-controller', [MyController::class,'index']);
Route::get('/my-controller2', 'App\Http\Controllers\MyController@index');

Route::namespace('App\Http\Controllers\MyController')->group(function(){
    Route::get('/my-controller3','MyController@index');

});
Route::resource('/my-controller4', MyController::class);

Route::get('/', function () {
    return view('welcome'); //full name = welcome.blade.php
});


// use Illumimatr\Http\Request
Route::get('/my-route', function(){
    // return view('myroute');
    // Key => Value

    $data  ['val_b'] = "Laravel";
    return view('myfolder.mypage',$data);
});



Route::post('/my-route', function(Request $req ){

    $data['myinput'] = $req ->input('myinput');
    return view('myroute',$data);

});


// // hw#4
Route::get('/home-work', function(){
    return view('hw.hw04');
});

Route::post('/home-work',function(Request $req){
    $data['mynumber'] = $req ->input('mynumber');
    return view('hw.hw04_result',$data);
});

//15/01/2024

// Route::resource('titles', C_titles::class);

//hw#5
Route:: get('/home-work05',function(){
    return view('hw.hw05');
});


