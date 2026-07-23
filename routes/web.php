<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome123');
// });

Route::get('/', function () {       //input
    return view('laravel');         //output
});

Route::get('/feng', function () {
    return view('fenghome');
});

Route::get('/hi', function () {
    return view('hello');
});

Route::get('/sum', function () {

    $sum = 0;
    for ($i = 1; $i <= 10; $i++) {
        $sum = $sum + $i;
    }
    dd($sum);

    // print_r("Hello laravel sum");
    // return view('hello');
});
