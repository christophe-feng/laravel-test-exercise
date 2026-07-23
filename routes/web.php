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

Route::get('/dump', function () {
    // dd (dump and die) → 停止以下的程式碼
    // dump → 繼續以下的程式碼 
    $name = 'feng';
    $mobile = '09-8765-4321';
    dump($name,$mobile);
    $text = "$name - $mobile";
    dd($text);
    // return view('fenghome');
});
