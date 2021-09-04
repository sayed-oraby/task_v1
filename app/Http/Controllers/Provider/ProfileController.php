<?php

namespace App\Http\Controllers\Provider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
   
    
   
    public function home()
    {
        $user = Auth::guard('provider')->user();
        return view('provider.profile.home', [ 'user' => $user ]);
    }

   
    public function update(Request $request)
    {
        $admin = Auth::guard('provider')->user();

        $request->validate([
            'user_name' => 'required|unique:provider,user_name,' . $admin->id,
            'name' => 'required',
            'password' => 'nullable',
            'email' => 'required|email|unique:admin|unique:provider,email,' . $admin->id,
        ]);

        $admin->update($this->gteInput($request,$admin));
        return redirect()->back()->with('info','updated successfully');
        
    }

    
    private function gteInput($request,$modelClass) {

        $input = $request->only([ 'name', 'user_name','email' ]);

        if(isset($modelClass) ) {
            $input['password'] =  $modelClass->password;
        } else {
            $input['password'] =  bcrypt($request->password);
        }
        
        return  $input;
    }


}
