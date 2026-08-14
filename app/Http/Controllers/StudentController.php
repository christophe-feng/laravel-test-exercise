<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Student::all();
        $data = Student::get();

        // 可以將資料組合成一包傳送
        // $result = Student::get();
        // $data=[
        //     'data'=>$result,
        //     'test'=>'This is test message.',
        // ];
        // 

        // dd($data['test']);
        // dd('student controller index ok');

        // 將資料傳送至前端
        // return view('student.index',['data'=>$data])->with('data',$data);
        // return view('student.index',['data'=>$data]);
        return view('student.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('student create ok');
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $input=$request->all();
        $input = $request->except('_token');
        // dd('student store ok');
        // dd($input);

        $data = new Student();
        $data->name = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();
        return redirect()->route('students.index');
        // dd('student store method ok');
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
        dd('student edit method ok ' . $id);
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
