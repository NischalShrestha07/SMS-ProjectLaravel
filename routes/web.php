<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog_single', [HomeController::class, 'blog_single'])->name('blog_single');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/course', [HomeController::class, 'course'])->name('course');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/instructor', [HomeController::class, 'instructor'])->name('instructor');
Route::get('/ins_details', [HomeController::class, 'ins_details'])->name('ins_details');
Route::get('/course_details', [HomeController::class, 'course_details'])->name('course_details');







Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
