<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
        // 抓資料存在$data
        $data = Student::all();
        // dd($data);
        return view('student.index', ['data'=>$data]);        
    }

    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        dd($request-> all());
    }

    public function test(Request $request)
    {
        dd($request);       
    }
}
