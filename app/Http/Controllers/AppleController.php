<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'apple',
                'qt' => 10
            ],
            [
                'id' => 2,
                'name' => 'banana',
                'qt' => 30
            ],
            [
                'id' => 3,
                'name' => 'cat',
                'qt' => 50
            ],
        ];
        
        // 檢查資料是否正確
        // dd('apple controller index ok 123');
        // dd($data);
        // 

        // 後端資料傳送至前端
        // return view('apples.index')->with('info',$data);
        return view('apples.index', ['info' => $data]);
        // 
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

    public function f1()
    {
        // dd('Apple_1f ok');
        return view('apple.f1');
    }

    public function f2()
    {
        // dd('Apple_2f ok');
        return view('apple.f2');
    }

    public function f3()
    {
        // dd('Apple_3f ok');
        return view('apple.f3');
    }

    public function child(){
        // dd('AppleController child layout ok');
        return view('child');
    }

    public function b1(){
        return view('apple.blue.b1');
    }

    public function b2(){
        return view('apple.blue.b2');
    }

    public function b3(){
        return view('apple.blue.b3');
    }

    public function r1(){
        return view('apple.red.r1');
    }

    public function r2(){
        return view('apple.red.r2');
    }

    public function r3(){
        return view('apple.red.r3');
    }
}
