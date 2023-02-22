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
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('admin/dashboard',[DashboardController::class,'index'])->name('dashboard.index');

Route::resources([
    '/course' => CourseController::class,
    '/level' => LevelController::class,
    '/city' => CityController::class,
    '/city' => CityController::class,
    '/category' => CategoryController::class,
    '/assign' => AssignController::class,
]);

//front
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/course/detail/{id}',[CourseDetailController::class,'courseDetails'])->name('course.details');

