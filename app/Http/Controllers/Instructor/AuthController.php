<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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


    public function users(Request $request)
    {
        $users=User::whereNot('role','admin')->get();
        // return $users;
        return view('instructor.users',compact('users'));
    }
    public function add_user(Request $request)
    {
        return view('instructor.add-user');
    }




    public function addUser(Request $request)
    {
        // return view('admin.add-user');

        $request->validate([
            'name' => 'required|string', ///Note Validation issue in name
            'email' => 'required|email',
            'phone'=>'nullable|digits:10',
            'password' => 'required|string|confirmed',
            'status'=>'nullable|in:active,inactive',
            'role' => 'required|string|in:admin,instructor,student'
        ]);

        // return $request;

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->status = $request->status  ?'active':'inactive';
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login')->with('success', 'User registered successfully!!');
    }


    public function userDetailsShow($id)
    {
        $user=User::find($id);

        return view('instructor.user-details',compact('user'));
    }
}
