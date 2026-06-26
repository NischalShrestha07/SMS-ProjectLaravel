<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
public function profile()
    {
///bad implementations
    // $user=User::where('role','instructor')->get();


    //better and secure implementations
    // $user=User::where('id',auth()->user()->id)->get();
    $user=User::where('id',Auth::user()->id)->get();


    return view('student.profile',compact('user'));
    }


    public function updateProfile(Request $request)
    {
        // return $request;
        $request->validate([
            'name'=>'required|string',
            'email'=>'nullable|email',
            'phone'=>'nullable'
        ]);
// return $request;


// $loggedInUser=Auth::user();
// return $loggedInUser;


      User::where('id', Auth::user()->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),

        ]);

        return redirect()->back();

    }


    public function logout(Request $request){
        Auth::logout();
    $request->session()->invalidate();
Session::flush();
    return redirect()->route('login')->with('success','Logged out successfully!');
    }

}
