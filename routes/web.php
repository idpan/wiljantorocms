<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;


Route::get('/',[HomeController::class, 'index']);
// Route::get('/',function(){
//     return view('home');
// });

Route::get('/about',[AboutController::class,'index']);

Route::get('/projects',[ProjectsController::class, 'index']);

Route::get('/contact',[ContactController::class, 'index']);