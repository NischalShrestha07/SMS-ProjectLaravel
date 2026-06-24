<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Instructor;
use App\Http\Controllers\Student;
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



Route::get('/login', [Admin\AuthController::class, 'login'])->name('login');
Route::get('/register', [Admin\AuthController::class, 'register'])->name('register');
    Route::post('/users/add', [Admin\AuthController::class, 'addUser'])->name('user.register');




Route::post('/authenticate', [Admin\AuthController::class, 'authenticate'])->name('authenticate');


Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/home', [Admin\HomeController::class, 'home'])->name('home');
    Route::get('/users', [Admin\AuthController::class, 'users'])->name('users');

    Route::get('/user-details', [Admin\AuthController::class, 'userDetails'])->name('user-details');
    Route::get('/tables', [Admin\AuthController::class, 'tables'])->name('tables');
    Route::get('/settings', [Admin\AuthController::class, 'settings'])->name('settings');
    Route::get('/profile', [Admin\AuthController::class, 'profile'])->name('profile');
    Route::get('/forms', [Admin\AuthController::class, 'forms'])->name('forms');
    Route::get('/forget-password', [Admin\AuthController::class, 'forgetPassword'])->name('forget-password');
    Route::get('/create-agent', [Admin\AuthController::class, 'createAgent'])->name('create-agent');
    Route::get('/components', [Admin\AuthController::class, 'components'])->name('components');
    Route::get('/charts', [Admin\AuthController::class, 'charts'])->name('charts');
    Route::get('/alerts', [Admin\AuthController::class, 'alerts'])->name('alerts');
    Route::get('/adduser', [Admin\AuthController::class, 'addUser'])->name('adduser');
    Route::get('/blank', [Admin\AuthController::class, 'blank'])->name('blank');
    Route::get('/modals', [Admin\AuthController::class, 'modals'])->name('modals');
});


Route::middleware('role:instructor')->prefix('instructor')->name('instructor.')->group(function () {

    Route::get('/home', [Instructor\HomeController::class, 'home'])->name('home');
    Route::get('/profile', [Instructor\AuthController::class, 'profile'])->name('profile');
    Route::put('/profile/update', [Instructor\AuthController::class, 'updateProfile'])->name('profile.update');






 Route::get('/users', [Admin\AuthController::class, 'users'])->name('users');

    Route::get('/user-details', [Admin\AuthController::class, 'userDetails'])->name('user-details');
    Route::get('/tables', [Admin\AuthController::class, 'tables'])->name('tables');
    Route::get('/settings', [Admin\AuthController::class, 'settings'])->name('settings');
    Route::get('/forms', [Admin\AuthController::class, 'forms'])->name('forms');
    Route::get('/forget-password', [Admin\AuthController::class, 'forgetPassword'])->name('forget-password');
    Route::get('/create-agent', [Admin\AuthController::class, 'createAgent'])->name('create-agent');
    Route::get('/components', [Admin\AuthController::class, 'components'])->name('components');
    Route::get('/charts', [Admin\AuthController::class, 'charts'])->name('charts');
    Route::get('/alerts', [Admin\AuthController::class, 'alerts'])->name('alerts');
    Route::get('/adduser', [Admin\AuthController::class, 'addUser'])->name('adduser');
    Route::get('/blank', [Admin\AuthController::class, 'blank'])->name('blank');
    Route::get('/modals', [Admin\AuthController::class, 'modals'])->name('modals');
});



Route::middleware('role:student')->prefix('student')->name('student.')->group(function () {


    Route::get('/home', [Student\HomeController::class, 'home'])->name('home');
     Route::get('/users', [Admin\AuthController::class, 'users'])->name('users');

    Route::get('/user-details', [Admin\AuthController::class, 'userDetails'])->name('user-details');
    Route::get('/tables', [Admin\AuthController::class, 'tables'])->name('tables');
    Route::get('/settings', [Admin\AuthController::class, 'settings'])->name('settings');
    Route::get('/profile', [Admin\AuthController::class, 'profile'])->name('profile');
    Route::get('/forms', [Admin\AuthController::class, 'forms'])->name('forms');
    Route::get('/forget-password', [Admin\AuthController::class, 'forgetPassword'])->name('forget-password');
    Route::get('/create-agent', [Admin\AuthController::class, 'createAgent'])->name('create-agent');
    Route::get('/components', [Admin\AuthController::class, 'components'])->name('components');
    Route::get('/charts', [Admin\AuthController::class, 'charts'])->name('charts');
    Route::get('/alerts', [Admin\AuthController::class, 'alerts'])->name('alerts');
    Route::get('/adduser', [Admin\AuthController::class, 'addUser'])->name('adduser');
    Route::get('/blank', [Admin\AuthController::class, 'blank'])->name('blank');
    Route::get('/modals', [Admin\AuthController::class, 'modals'])->name('modals');
});
