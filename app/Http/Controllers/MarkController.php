<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentDetails;
use App\Models\Mark;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marks=Mark::All();
        return view("mark.index",["marks"=> $marks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students=StudentDetails::all();
        return view("mark.create",["students"=>$students]);
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
            "student_id" =>'required',
            "term" =>'required',
            "maths" =>'required|integer',
            "science" =>'required|integer',
            "history" =>'required|integer',
        ]);
        $mark=new Mark();
        $mark->student_id=request("student_id");
        $mark->term=request("term");
        $mark->maths=request("maths");
        $mark->science=request("science");
        $mark->history=request("history");
        $mark->save();
        return redirect("/mark");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mark=Mark::find($id);
        return view("mark.show",["mark"=>$mark]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mark=Mark::find($id);
        $students=StudentDetails::all();
        return view("mark.edit",["students"=>$students,"mark"=>$mark]);
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
            "student_id" =>'required',
            "term" =>'required',
            "maths" =>'required|integer',
            "science" =>'required|integer',
            "history" =>'required|integer',
        ]);
        $mark=Mark::find($id);
        $mark->student_id=request("student_id");
        $mark->term=request("term");
        $mark->maths=request("maths");
        $mark->science=request("science");
        $mark->history=request("history");
        $mark->save();
        return redirect("/mark");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mark=Mark::find($id);
        $mark->delete();
        return redirect("/mark");
    }
}
