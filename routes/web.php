<?php


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\Course\CourseController;
use App\Http\Controllers\Backend\Course\CourseController as Course;
use App\Http\Controllers\Backend\Content\ContentController as Content;
use App\Http\Controllers\Backend\Learner\LearnerController as Learner;



// use App\Http\Controllers\backend\CourseController;
// use App\Http\Controllers\CourseController;
  
// Route::get('/', function () {
//     return view('welcome');
// });
  
Auth::routes();

  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    // Route::resource('courses', CourseController::class);
    // Route::resource('course', CourseController::class);
  
    // Add Course
    Route::group(['prefix' => 'course'] , function(){
        Route::get('/index',[Course::class,'index'])->name('course.index');
        Route::get('/create',[Course::class,'create'])->name('course.create');
        Route::post('/store',[Course::class,'store'])->name('course.store');
        Route::get('/edit/{id}',[Course::class,'edit'])->name('course.edit');
        Route::post('/update',[Course::class,'update'])->name('course.update');
        Route::delete('/destroy/{id}',[CourseController::class,'destroy'])->name('course.destroy');
    });


    // Upload Content
    Route::group(['prefix' => 'content'] , function () {
        Route::get('/index',[Content::class,'index'])->name('content.index');
        Route::get('/create',[Content::class,'create'])->name('content.create');
        Route::post('/store',[Content::class,'store'])->name('content.store');
        Route::get('/edit/{id}',[Content::class,'edit'])->name('content.edit');
        Route::post('/update',[Content::class,'update'])->name('content.update');
        Route::delete('/destroy/{id}',[Content::class,'destroy'])->name('content.destroy');
    });
    Route::get('/dropdown-values',[Content::class,'getDropdownValues']);

      Route::get('learner/index', [Learner::class,'index'])->name('learner.index');
      Route::get('learner/create', [Learner::class,'create'])->name('learner.create');
      Route::post('learner/store', [Learner::class,'store'])->name('learner.store');
      Route::get('learner/edit/{id}', [Learner::class,'edit'])->name('learner.edit');
      Route::post('learner/update', [Learner::class,'update'])->name('learner.update');
      Route::delete('learner/destroy/{id}', [Learner::class,'destroy'])->name('learner.destroy');
      
      
});
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('course/index',[CourseController::class,'index'])->name('course.index');
// Route::get('course/create',[CourseController::class,'create'])->name('course.create');
// // Route::get('/course/create', function () {return view('backend.course.add');});
// Route::post('course/store',[CourseController::class,'store'])->name('course.store');
// Route::get('course/edit/{id}',[CourseController::class,'edit'])->name('course.edit');
// Route::post('course/update',[CourseController::class,'update'])->name('course.update');
// Route::delete('/course/destroy/{id}',[CourseController::class,'destroy'])->name('course.destroy');