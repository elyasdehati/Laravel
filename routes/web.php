<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function(){
    return "Hello World";
});

//Sadat os frp,