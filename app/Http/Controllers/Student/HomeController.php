<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        $users=User::where('role', 'student')->get();
$instructorCount=User::where('role','instructor')->count();
$studentCount=User::where('role','student')->count();
        return view('student.home',compact('instructorCount','studentCount','users'));
    }
}
