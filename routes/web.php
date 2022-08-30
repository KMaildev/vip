<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('blog', BlogController::class);
Route::resource('services', ServicesController::class);
Route::resource('about', AboutController::class);
Route::resource('projects', ProjectController::class);
