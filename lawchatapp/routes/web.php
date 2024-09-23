<?php

use Illuminate\Support\Facades\Route;

//landing page
Route::get('/', function () {
    return view('welcome');
});

//login page
Route::get('/login', function () {
    return view('welcome');
});

//register page
Route::get('/register', function () {
    return view('welcome');
});

//chat page
Route::get('/chat/{id?}', function (string $id="") {
    echo "hai, '".$id."'";
    return view('welcome');
});
