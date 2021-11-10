<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StudentDetails;
use App\Models\TeacherDetails;
use App\Models\Mark;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=StudentDetails::all();
        return view("student.index",["students"=> $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacherDetails=TeacherDetails::all();
        return view("student.create",["teacherDetails"=>$teacherDetails]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            "name" =>'required|min:3|max:255',
            "age" =>'required|integer',
            "gender" =>'required',
            "teacher_id" =>'required'

        ]);
        $student=new StudentDetails();
        $student->name=request("name");
        $student->age=request("age");
        $student->gender=request("gender");
        $student->teacher_id=request("teacher_id");
        $student->save();
        return redirect("/student");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=StudentDetails::find($id);
        return view("student.show",["student"=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=StudentDetails::find($id);
        $teacherDetails=TeacherDetails::all();
        return view("student.edit",["student"=>$student,"teacherDetails"=>$teacherDetails]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        request()->validate([
            "name" =>'required|min:3|max:255',
            "age" =>'required|integer',
            "gender" =>'required',
            "teacher_id" =>'required'
        ]);

        $student=StudentDetails::find($id);
        $student->name=request("name");
        $student->age=request("age");
        $student->gender=request("gender");
        $student->teacher_id=request("teacher_id");
        $student->save();
        return redirect("/student");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=StudentDetails::find($id);
        $markDetails=Mark::where('student_id',$student->id)->get();
        
        foreach($markDetails as $mark ){
            $mark->delete();
        }
        
        $student->delete();
        return redirect("/student");
    }
}
