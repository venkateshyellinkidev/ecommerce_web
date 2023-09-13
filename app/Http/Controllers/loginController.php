<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    
    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $req->email;



        $user = User::where('email', $email)
            ->first();

        if (!$user) {

            return redirect()->back()->withErrors(['loginError' => 'Invalid email or password']);
        }
        if (!$user || !password_verify($req->password, $user->password)) {




            return redirect()->back()->withErrors(['loginError' => 'Invalid email or password']);
        }


        if ($user->userType == 0) {

            session(['userID' => $user->id]);
            return redirect()->intended('/user/dashboard');
        } elseif ($user->userType == 1) {

            session(['userID' => $user->id]);



            return redirect()->intended('/admin/dashboard');
        }
    }

}
