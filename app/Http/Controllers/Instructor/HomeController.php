<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        $users=User::where('role','instructor')->orWhere('role','student')->get();//orm object relational mapping

$adminCount=User::where('role','admin')->count();
$instructorCount=User::where('role','instructor')->count();
$studentCount=User::where('role','student')->count();
        // $users=User::where('role',['instructor','admin','student'])->where('role','student')->get();



        // $users=User::where('role',['instructor','student'])->get();
        // $users=User::whereNot('role','admin')->get();
        return view('instructor.home',compact('users','adminCount','instructorCount','studentCount'));
    }
}
