<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\{
    City,
    Course,
    AssignCourse,
};

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = AssignCourse::get();
        return view('admin/assign/index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $courses = Course::all();
        return view('admin/assign/create',compact('cities','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assign_course = new AssignCourse;
        $assign_course->course_id = $request->course;
        $assign_course->city_id = $request->city;
        $assign_course->no_of_seats = $request->seats;
        $assign_course->date = $request->date;
        $assign_course->session_id = rand(0, 99999999);
        $assign_course->save();
        return true;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assign_course = AssignCourse::where('id',$id)->first();
        $cities = City::all();
        $courses = Course::all();
        return view('admin/assign/edit',compact('cities','courses','assign_course'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assign_course = AssignCourse::where('id',$id)->first();
        $assign_course->delete();
        return back()->with('message','Data deleted Successfully');
    }
}
