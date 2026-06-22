<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function home()
    {
        // return 'Hello from Student ';

        return view('student.home');
    }
}
