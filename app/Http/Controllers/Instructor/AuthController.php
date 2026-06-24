<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function profile()
    {
///bad implementations
    // $user=User::where('role','instructor')->get();


    //better and secure implementations
    // $user=User::where('id',auth()->user()->id)->get();
    $user=User::where('id',Auth::user()->id)->get();


    return view('instructor.profile',compact('user'));
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
      User::update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),

        ]);
        return redirect()->back();

    }

}
