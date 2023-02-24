<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    City,
    Course,
    AssignCourse,
};

class BookingController extends Controller
{
    
    public function index($id = "")
    {

        $assign_courses = AssignCourse::where('session_id',$id)->first();
        $courses = Course::with('assigncourse')->get();
        return view('front/booking/index', compact('courses','assign_courses'));
    }


    public function getlocation($id)
    {
        $location = AssignCourse::where('course_id',$id)->with('city')->get()->unique('city_id');
        return response()->json($location);
    }

    public function getsession($course_id , $city_id)
    {
        $sessions = AssignCourse::where('course_id',$course_id)->where('city_id',$city_id)->with('city')->get();
        return response()->json($sessions);
    }

    public function getseats($id )
    {
        $no_of_seats = AssignCourse::where('id',$id)->value('no_of_seats');
        return response()->json($no_of_seats);
    }




    
  
}
