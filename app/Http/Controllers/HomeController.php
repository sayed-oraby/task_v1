<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use App\Models\Provider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function locations(Provider $user_name)
    {
        $provider = $user_name;
        $provider->load('locations');
        return view('locations',compact('provider'));
        
    }
}
