<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use App\Models\Provider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function locations($user_name)
    {
        
        $provider = Provider::where('user_name',$user_name)->firstOrFail();
        $x = 1;
   
        return view('locations',compact('provider','x'));
        
    }
}
