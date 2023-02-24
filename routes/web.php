<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    CourseController,
    LevelController,
    DashboardController,
    CityController,
    CategoryController,
    AssignController,
   
};
use App\Http\Controllers\Front\{
    HomeController,
    CourseDetailController,
    BookingController,
};




Route::get('admin/dashboard',[DashboardController::class,'index'])->name('dashboard.index');

Route::resources([
    '/course' => CourseController::class,
    '/level' => LevelController::class,
    '/city' => CityController::class,
    '/category' => CategoryController::class,
    '/assign' => AssignController::class,
]);

//front
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/course/detail/{id}',[CourseDetailController::class,'courseDetails'])->name('course.details');
<<<<<<< HEAD
Route::get('/getCourseData/{dataId}',[CourseDetailController::class,'courseData']);
=======

Route::get('/getCourseData/{dataId}',[CourseDetailController::class,'courseData']);

>>>>>>> d1cdc6f604443362f436554a73f1db5b9aa55030
Route::get('booking',[BookingController::class,'index'])->name('course.booking');
route::get('about',function(){
    return view('front.about');
});
route::get('contact',function(){
    return view('front.contact');
});


<<<<<<< HEAD
Route::get('/getlocation/{dataId}',[BookingController::class,'getlocation']);
Route::get('/getsession/{course_id}/{city_id}',[BookingController::class,'getsession']);
Route::get('/getseats/{id}',[BookingController::class,'getseats']);


=======
>>>>>>> d1cdc6f604443362f436554a73f1db5b9aa55030

