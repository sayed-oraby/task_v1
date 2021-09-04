<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProviderLogin extends Controller
{


    public function login() {

        if(Auth::guard('provider')->check()){
            return redirect('provider');
        }
        else{
            return view('provider.layouts.login');
        }
    }

    public function login_post(Request $request) {

        $remember = $request->has('remember') ? true : false;

        if ( Auth::guard('provider')->attempt([ 'email' => request('email') , 'password' => request('password')] , $remember) ) {
           
            return redirect('provider');
        } else {
            return redirect()->back()->with('error','Please Check Your Email and Password again');
        }
    }

    public function logout(Request $request) {
        Auth::guard('provider')->logout();
        return redirect('provider/login');
    }
}
