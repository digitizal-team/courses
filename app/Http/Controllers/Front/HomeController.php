<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Course,
    Category,
};

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('course')->get();
        return view('front/index',compact('categories'));
    }
}
