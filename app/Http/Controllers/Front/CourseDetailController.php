<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
}
