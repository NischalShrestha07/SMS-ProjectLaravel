<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {

        return view('admin.login');
    }


    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',

        ]);

        // return $request;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            //login
            $role = Auth::user()->role;
            // return $role;

            if ($role === 'admin') {
                return redirect()->route('admin.home');
            } elseif ($role === 'instructor') {
                return redirect()->route('instructor.home');
            } else {
                return redirect()->route('student.home');
            }
        }
        return redirect()->route('login')->with('error', 'Invalid Credential!! Please Try Again!');
    }


    public function register()
    {
        return view('admin.register');
    }


    public function users()
    {
        $users=User::all();
        return view('admin.users',compact('users'));
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
    $user=User::where('id',Auth::user()->id)->get();


    return view('admin.profile',compact('user'));
    }


    public function updateProfile(Request $request)
    {
        // return $request;
        $request->validate([
            'name'=>'required|string',
            'email'=>'nullable|email',
            'phone'=>'nullable'
        ]);


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
    public function create()
    {
        return view('admin.add-user');
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
        $user->status = $request->status;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login')->with('success', 'User registered successfully!!');
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
