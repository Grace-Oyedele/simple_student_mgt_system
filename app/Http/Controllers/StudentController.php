<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students= Student::all();
        return view('student', ['students'=>$students, 'layout'=>'create']);
    }


    public function create()
    {
        $students= Student::all();
        return view('student', ['students'=>$students, 'layout'=>'create']);
    }



    public function store(Request $request)
    {
        $student  = new Student();
        $student->cne= $request->input('cne');
        $student->firstname= $request->input('firstname');
        $student->secondname= $request->input('secondname');
        $student->age= $request->input('age');
        $student->specialty= $request->input('specialty');
        $student->save();
        return redirect('/');

    }


    public function show($id)
    {
        $student= Student::find($id);
        $students= Student::all();
        return view('students',['students'=>$students, 'student'=>$students, 'layout'=>'show']);
    }


    public function edit($id)
    {
        $student= Student::find($id);
        $students= Student::all();
        return view('students',['students'=>$students, 'student'=>$students, 'layout'=>'edit']);
    }


    public function update(Request $request,$id)
    {
        $student= Student::find($id);
        $student->cne= $request->input('cne');
        $student->firstname= $request->input('firstname');
        $student->secondname= $request->input('secondname');
        $student->age= $request->input('age');
        $student->specialty= $request->input('specialty');
        $student->save();
        return redirect('/');
    }


    public function delete($id)
    {
        $student= Student::find($id);
        $student->delete();
        return redirect('/');

    }
}
