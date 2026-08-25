<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Contact', function () {
    return view('Contacts');
});