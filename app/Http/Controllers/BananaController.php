<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 資料庫連線
use Illuminate\Support\Facades\DB;
// 與model做綁定
use App\Models\Cat;



class BananaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('BananaController view ok');
        // 原生sql語法
        // $data = DB::select('select * from students');
        // $sql = 'SELECT * FROM `students` WHERE `name`= \'banana\'';
        // $data = DB::select($sql);

        // 框架語法
        // $data = DB::table('students')->get();
        // $data = DB::table('students')->where('name', 'banana')->get();
        // dd($data);

        // 用foreach把資料呼叫出來
        // foreach ($data as $key => $value) {
        //     echo 'ID: ' . $value->id . 'Name: ' . $value->name . 'Mobile: ' . $value->mobile . '<br>';
        // }
        // 

        // 利用 model 將資料庫的資料呼叫出來
        $data = Cat::all();
        // $data = Cat::get();
        // $data = Cat::where('name','apple')->get();
        // $data = Cat::where('name','apple')->first();
        // $data = Cat::where('name','apple')->toSql();
        dd($data);
        // 
        
        return view('banana.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
