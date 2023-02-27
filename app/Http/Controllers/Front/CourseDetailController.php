<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\{
    AssignCourse,
    Course,
    LevelCourse,
};

class CourseDetailController extends Controller
{
    public function courseDetails($id)
    {
        $courses = Course::where('category_id',$id)->with('assigncourse')->get();

        
        $courses_id = Course::where('category_id',$id)->with('assigncourse')->pluck('id')->all();
        $courselevel = LevelCourse::all();
        // dd($courses_id,$assign_courses);
        // dd($courses);
        
        return view('front/coursedetail',compact('courses','courselevel'));

    }
  
    public function courseData(Request $request , $id)
    {
        $coursedata = DB::table('categories')
        ->join('courses', 'categories.id', '=', 'courses.category_id')
        ->select('courses.*', 'categories.name')
        ->where('courses.id',$id)
        ->first();
        // dd($course);

        return response()->json(['data' => $coursedata]);
    }
    public function getcitydata(Request $request , $id)
    {
        $coursedata = DB::table('assign_courses')
        ->join('cities', 'assign_courses.city_id', '=', 'cities.id')
        ->join('courses', 'assign_courses.course_id', '=', 'courses.id')
        ->select('courses.*', 'assign_courses.*')
        ->where('assign_courses.city_id',$id)
        ->first();
        
        // $courses = Course::with('assigncourse')->get();
        return response()->json(['data' => $coursedata]);
    }
    public function courselevelfunc($id){
       
        $levelid = $id;
        $courselevel = LevelCourse::all();
        $coursebycities = Course::where('level_id',$id)
        ->select('assign_courses.*','cities.name as city_name','courses.level_id as level_id')
        ->join('assign_courses','assign_courses.course_id','courses.id')
        ->join('cities','assign_courses.city_id','cities.id')
        ->get();

        // return $coursebycities;
        return view('Front.courselevel',compact('coursebycities','levelid','courselevel'));
        
    }
    
    public function coursesfunc(Request $request , $id)
    {
        $coursedata = DB::table('categories')
        ->join('courses', 'categories.id', '=', 'courses.category_id')
        ->select('courses.*', 'categories.name')
        ->where('courses.id',$id)
        ->first();
        // dd($course);

        return response()->json(['data' => $coursedata]);
    }
    public function courses()
    {
        $courses = Course::all();

        
 
        $courselevel = LevelCourse::all();
        // dd($courses_id,$assign_courses);
        // dd($courses);
        
        return view('front.courses',compact('courses','courselevel'));

    }
}
