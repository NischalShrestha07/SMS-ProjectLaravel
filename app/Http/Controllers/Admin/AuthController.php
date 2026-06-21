<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function register()
    {
        return view('admin.register');
    }
    public function users()
    {
        return view('admin.users');
    }
    public function userDetails()
    {
        return view('admin.user-details');
    }
    public function tables()
    {
        return view('admin.tables');
    }

    public function settings()
    {
        return view('admin.settings');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function forms()
    {
        return view('admin.forms');
    }
    public function forgetPassword()
    {
        return view('admin.forget-password');
    }
    public function createAgent()
    {
        return view('admin.create-agent');
    }
    public function components()
    {
        return view('admin.components');
    }
    public function charts()
    {
        return view('admin.charts');
    }
    public function alerts()
    {
        return view('admin.alerts');
    }
    public function addUser(Request $request)
    {
        // return view('admin.add-user');
        return $request;
    }
    public function blank()
    {
        return view('admin.blank');
    }
    public function modals()
    {
        return view('admin.modals');
    }
}
