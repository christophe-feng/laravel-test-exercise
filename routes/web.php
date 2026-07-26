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

// Route::get('/sum', function () {

//     $sum = 0;
//     for ($i = 1; $i <= 10; $i++) {
//         $sum = $sum + $i;
//     }
//     dd($sum);

//     // print_r("Hello laravel sum");
//     // return view('hello');
// });

Route::get('/dump', function () {
    // dd (dump and die) → 停止以下的程式碼
    // dump → 繼續以下的程式碼 
    $name = 'feng';
    $mobile = '09-8765-4321';
    dump($name, $mobile);
    $text = "$name - $mobile";
    dd($text);
    // return view('fenghome');
});

// 從網址動態抓取變數
Route::get('/user/{id}', function (string $id) {
    dd($id);
    return 'User ' . $id;
});

Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    dd($postId . '-' . $commentId);
});

// Route::get('/sum/{num}', function (string $num) {
//     // dd($num);
//     $sum = 0;
//     for ($i = 1; $i <= $num; $i++) {
//         $sum += $i;
//     }
//     dd($sum);
//     // return 'User ' . $num;
// });
// 

// 從網址動態抓取變數，並用'with()'將物件傳至在前台頁面
// 在num後面加上'?'、$num後面加上'=null'，即可將網址的參數變更為"選擇性"
Route::get('/sum/{num?}', function (string $num = null) {
    // dd($num);
    $sum = 0;
    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
    }

    // 可以將多個變數用陣列組合成一個變數
    $data = [
        'num' => $num,
        'sum' => $sum,
    ];

    // dd($data);
    // return 'User ' . $num;

    // with() 可以將後端的封包傳至前端
    // '('result', $data)' 是指後端定義的$data傳到前端後，變數變成$result
    return view('sum')->with('result', $data);
});
// 

// 從網址動態抓取變數製作簡易計算機，並用'with()'將結果傳至在前台頁面
Route::get('/calculator/{num1}/{num2}', function (string $num1, string $num2) {

    $data = [
        'num1' => $num1,
        'num2' => $num2,
        'plus' => $num1 + $num2,
        'minus' => $num1 - $num2,
        'multiply' => $num1 * $num2,
        'divide' => $num1 / $num2,
    ];

    dd($data);

    // return view('sum')->with('result', $data);
});
// 