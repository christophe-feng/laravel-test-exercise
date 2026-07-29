<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 利用 Controller 回傳指定的畫面
class TestController extends Controller
{
    // function 後面要放顯示頁面的檔案名稱
    public function index()
    {
        // test 是指 views 裡面的資料夾名稱
        // index 是指 test 資料夾裡面的檔案名稱 
        return view('test.index');
    }

    // function 後面要放顯示頁面的檔案名稱
    public function hi()
    {
        // test 是指 views 裡面的資料夾名稱
        // hi 是指 test 資料夾裡面的檔案名稱
        return view('test.hi');
    }
}
