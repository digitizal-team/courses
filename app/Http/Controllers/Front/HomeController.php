<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Course,
    Category,
    LevelCourse,
};

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('course')->get();
        return view('front/index',compact('categories'));
    }
        public function courses()
    {
        $courses = Course::all();
        $categories = Category::with('course')->get();
        $courselevel = LevelCourse::all();
        return view('front.courses',compact('courses','courselevel','categories'));

    }
}
