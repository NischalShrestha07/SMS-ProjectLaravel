<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

// oop->object oriented programming
class HomeController extends Controller
{
    public function home()
    {
        $users=User::all();

$adminCount=User::where('role','admin')->count();
$instructorCount=User::where('role','instructor')->count();
$studentCount=User::where('role','student')->count();

        return view('admin.home',compact('users','adminCount','instructorCount','studentCount'));
    }

}



