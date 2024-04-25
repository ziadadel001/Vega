<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Models\User;



class AUthController extends Controller
{
    function Login()
    {
        return view('registration.sign_in');
    }
    function LoginPost(Request $request)
    {
        $request->validate(
            [
                'password' => 'required',
                'email' => 'required|email'
            ]
        );

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return Redirect()->intended(route('Landing.index'));
        } {
            return redirect(route('Login.create'))->with('error', 'Login details not valid');
        }
    }
    function Signup()
    {
        return view('registration.signup');
    }
    function SignupPost(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'fname' => 'required',
            'lname' => 'required',
        ]);

        $data['name'] = $request->fname . $request->lname;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);


        if (!$user) {
            return redirect(route('Signup.create'))->with('error', 'not valid');
        }
        return redirect(route('Login.create'))->with('Success', 'please login');
    }
    function Reset()
    {
        return view('registration.Resetpass');
    }

    function  ResetPost(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect(route('Reset.create'))->with('error', 'This email does\'t exiest');
        }
        //code for email recovery
        return view('registration.ResetPass2');
    }
    function  ShowPassForm()
    {
        return view('registration.ResetPass3');
    }
    function  CreateNewPass(Request $request)
    {
        if ($request->password !== $request->conpassword) {
            return redirect(route('Pass.create'))->with('error', 'please check of password');
        }
        //how can i get the email from gmail 
        $user = User::where('email', 'ziadadel00120@gmail.com')->first()->update(['password' => $request->password]);
        if ($user) {
            return redirect(route('Login.create'))->with('Success', 'please login');;
        }
    }


    function logout()
    {
        session::flush();
        Auth::logout();
        return redirect(route('Login.create'));
    }
}
