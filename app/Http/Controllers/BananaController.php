<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 資料庫連線
use Illuminate\Support\Facades\DB;

class BananaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('BananaController view ok');
        $data = DB::select('select * from students');
        // dd($data);

        foreach ($data as $key => $value) {
            echo 'ID: ' . $value->id . 'Name: ' . $value->name . 'Mobile: ' . $value->mobile . '<br>';
        }
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
