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
        // dd('apple controller index ok 123');
        return view('apple.index');
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
        return view('apples.f1');
    }

    public function f2()
    {
        // dd('Apple_2f ok');
        return view('apples.f2');
    }

    public function f3()
    {
        // dd('Apple_3f ok');
        return view('apples.f3');
    }
}
