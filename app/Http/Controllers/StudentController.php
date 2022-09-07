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
        $student = new Student();
 
        $student->id = $request->id;
        $student->name = $request->name;
        $student->chinese = $request->chinese;
        $student->english = $request->english;
        $student->math = $request->math;
        $student->save();
        // 導回首頁
        return redirect()->route('students.index');
    }

    public function edit($id){
        $data = Student::find($id);
        return view('student.edit', ['data'=>$data]);
    }

    public function update(Request $input, $id){
      
        $data = Student::where('id', $id)->first();

        $data -> name = $input['name'];
        $data -> chinese = $input['chinese'];
        $data -> english = $input['english'];
        $data -> math = $input['math'];

        $data -> save();
        return redirect()->route('students.index');
    }

    public function destroy($id){
        $data = Student::find($id);
        $data->delete();
        return redirect()->route('students.index');
    }

    public function test(Request $request)
    {
        dd($request);       
    }
}
