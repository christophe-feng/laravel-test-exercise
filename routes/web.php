<?php

use Illuminate\Support\Facades\Route;

//  controller 與 router 綁定
use App\Http\Controllers\TestController;

// 要顯示不同的頁面，就要建立不同的 route
// TestController
Route::get('/test', [TestController::class, 'index']);
Route::get('/test_hi', [TestController::class, 'hi']);
// 

// resourse controller 與 route 的綁定
// ExampleController
use App\Http\Controllers\ExampleController;

Route::resource('examples', ExampleController::class);
// 

// 要顯示不同的頁面，就要建立不同的 route 
// 要注意單複數的差別
// 可以用`->name()`來命名新的路由
// AppleController
use App\Http\Controllers\AppleController;

Route::resource('apples', AppleController::class);
Route::get('/apples_1f', [AppleController::class, 'f1'])->name('apples.f1');
Route::get('/apples_2f', [AppleController::class, 'f2'])->name('apples.f2');
Route::get('/apples_3f', [AppleController::class, 'f3'])->name('apples.f3');
Route::get('/apples_child', [AppleController::class, 'child'])->name('apples.child');
Route::get('/apples_b1', [AppleController::class, 'b1'])->name('apples.b1');
Route::get('/apples_b2', [AppleController::class, 'b2'])->name('apples.b2');
Route::get('/apples_b3', [AppleController::class, 'b3'])->name('apples.b3');
Route::get('/apples_r1', [AppleController::class, 'r1'])->name('apples.r1');
Route::get('/apples_r2', [AppleController::class, 'r2'])->name('apples.r2');
Route::get('/apples_r3', [AppleController::class, 'r3'])->name('apples.r3');
Route::get('/apples_all', [AppleController::class, 'all'])->name('apples.all');
// 

// BlueController
use App\Http\Controllers\BlueController;

Route::resource('blues', BlueController::class);
//

// RedController
use App\Http\Controllers\RedController;

Route::resource('reds', RedController::class);
// 

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

    // dd($data);

    return view('calculator')->with('result', $data);
});
// 