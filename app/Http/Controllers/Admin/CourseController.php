<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Course,
    LevelCourse,
    City,
    Category
};

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin/course/index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = LevelCourse::all();
        // $cities = City::all();
        $categories = Category::all();
        return view('admin/course/create',compact('levels','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $course = new Course;
        $course->level_id = $request->level;
        $course->category_id = $request->category;
        $course->start_date = $request->sdate;
        $course->end_date = $request->edate;
        $course->price = $request->price;
        $course->duration = $request->duration;
        $course->time = $request->time;
        $course->class_size_max = $request->maxsize;
        $course->class_size_min = $request->minsize;
        $course->reference_material = $request->rmaterials;
        $course->training_computer = $request->tcomputer;
        $course->delivery = $request->delivery;
        $course->CPD_hour = $request->cpdhour;
        $course->status = $request->status;
        $course->save();


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
        $levels = LevelCourse::all();
        $cities = City::all();
        $course = Course::where('id',$id)->first();
        $categories = Category::all();
        return view('admin/course/edit',compact('course','cities','levels','categories'));
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
        $course = Course::where('id',$id)->first();
        $course->level_id = $request->level;
        $course->category_id = $request->category;
        $course->start_date = $request->sdate;
        $course->end_date = $request->edate;
        $course->price = $request->price;
        $course->duration = $request->duration;
        $course->time = $request->time;
        $course->class_size_max = $request->maxsize;
        $course->class_size_min = $request->minsize;
        $course->reference_material = $request->rmaterials;
        $course->training_computer = $request->tcomputer;
        $course->delivery = $request->delivery;
        $course->CPD_hour = $request->cpdhour;
        $course->status = $request->status;
        $course->save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::where('id',$id)->first();
        $course->delete();
        return back()->with('message','Data deleted Successfully');
    }
}
