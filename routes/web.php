<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectsController;


Route::get('/',[HomeController::class, 'index']);

Route::get('/about',[AboutController::class,'index']);

Route::get('/projects',[ProjectsController::class, 'index']);
