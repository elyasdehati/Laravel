<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ecditech', function () {
    return view('Expert Cyber Defense Inte');
});
