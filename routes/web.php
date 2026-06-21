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




Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/users', [AuthController::class, 'users'])->name('users');
Route::get('/user-details', [AuthController::class, 'userDetails'])->name('user-details');
Route::get('/tables', [AuthController::class, 'tables'])->name('tables');
Route::get('/settings', [AuthController::class, 'settings'])->name('settings');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::get('/forms', [AuthController::class, 'forms'])->name('forms');
Route::get('/forget-password', [AuthController::class, 'forgetPassword'])->name('forget-password');
Route::get('/create-agent', [AuthController::class, 'createAgent'])->name('create-agent');
Route::get('/components', [AuthController::class, 'components'])->name('components');
Route::get('/charts', [AuthController::class, 'charts'])->name('charts');
Route::get('/alerts', [AuthController::class, 'alerts'])->name('alerts');
Route::get('/adduser', [AuthController::class, 'addUser'])->name('adduser');
Route::get('/blank', [AuthController::class, 'blank'])->name('blank');
Route::get('/modals', [AuthController::class, 'modals'])->name('modals');
