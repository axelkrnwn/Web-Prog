<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

//landing page
Route::get('/', function () {
    return view('welcome');
});

//login page
Route::get('/login', function () {
    return view('welcome');
});

Route::post('/login', function (Request $request) {
    return view('welcome');
});

//register page
Route::get('/register', function () {
    return view('welcome');
});

Route::post('/register', function (Request $request) {
    return view('welcome');
});

//chat page
Route::get('/chat/{id?}', function (string $id="") {
    echo "hai, '".$id."'";
    return view('welcome');
});

Route::post('/chat/{id?}', function (string $id="", Request $request) {
    echo "hai, '".$id."'";
    return view('welcome');
});
