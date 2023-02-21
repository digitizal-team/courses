<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Course
};

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('front/index',compact('courses'));
    }
}
