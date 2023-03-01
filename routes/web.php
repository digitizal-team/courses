<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    CourseController,
    LevelController,
    DashboardController,
    CityController,
    CategoryController,
    AssignController,
    AuthController,
   
};
use App\Http\Controllers\Front\{
    HomeController,
    CourseDetailController,
    BookingController,
};
use App\Http\Controllers\CourseLevelController;


Route::get('/clear', function () {

    \Artisan::call('cache:clear');
    \Artisan::call('route:clear');
    \Artisan::call('optimize');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
    echo 'clear';
});


//front
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/course/detail/{id}',[CourseDetailController::class,'courseDetails'])->name('course.details');
Route::get('/getCourseData/{dataId}',[CourseDetailController::class,'courseData']);
Route::get('/getcitydata/{dataId}',[CourseDetailController::class,'getcitydata']);
Route::get('booking/{id?}',[BookingController::class,'index'])->name('course.booking');
route::get('about',function(){
    return view('front.about');
});
route::get('/contact',function(){
    return view('front.contact');
});
Route::get('/getlocation/{dataId}',[BookingController::class,'getlocation']);
Route::get('/getsession/{course_id}/{city_id}',[BookingController::class,'getsession']);
Route::get('/getseats/{id}',[BookingController::class,'getseats']);
Route::get('/course/level/{id}',[CourseDetailController::class,'courselevelfunc']);
Route::get('/courses',[HomeController::class,'courses']);
Route::post('/booking/store',[BookingController::class,'booking_store']);

//admin
Route::group(['middleware' => 'role'], function () {
    Route::get('/admin',[DashboardController::class,'index'])->name('dashboard.index');
    Route::resources([
        '/course' => CourseController::class,
        '/level' => LevelController::class,
        '/city' => CityController::class,
        '/category' => CategoryController::class,
        '/assign' => AssignController::class,
    ]);
});

//auth
Route::get('/login',[AuthController::class,'index']);
Route::post('/auth-attempt',[AuthController::class,'verify'])->name('auth.attempt');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');




