<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\{
    AssignCourse,
    Course,
};

class CourseDetailController extends Controller
{
    public function courseDetails($id)
    {
        $courses = Course::where('category_id',$id)->with('assigncourse')->get();
        $courses_id = Course::where('category_id',$id)->with('assigncourse')->pluck('id')->all();
       
        // dd($courses_id,$assign_courses);
        // dd($courses);
        
        return view('front/coursedetail',compact('courses'));

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
}
