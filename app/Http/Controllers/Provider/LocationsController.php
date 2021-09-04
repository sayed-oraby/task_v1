<?php

namespace App\Http\Controllers\Provider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Locations as Model;
use Illuminate\Support\Facades\Auth;

class LocationsController extends Controller
{
     
    private $view = 'provider.locations.';
    private $redirect = 'provider/locations';
    

    public function index()
    {
        $provider_id = Auth::guard('provider')->user()->id;
        $Item = Model::where('provider_id',$provider_id)->get();
        return view($this->view . 'index',compact('Item'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $provider_id = Auth::guard('provider')->user()->id;
        $count = Model::where('provider_id',$provider_id)->get(['id'])->count();

        if($count < 5) {

            return view($this->view . 'create');

        } else {
            return redirect('provider/locations')->with('error','sorry you are not allowed to create more five locations');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $provider_id = Auth::guard('provider')->user()->id;
        $count = Model::where('provider_id',$provider_id)->get(['id'])->count();

        if($count < 5) {
            $request->validate([
                'latitude' => 'required|numeric|unique:locations',
                'longitude' => 'required|numeric|unique:locations',
            ]);
    
            Model::create($this->gteInput($request,null));
            return redirect($this->redirect)->with('success','added successfully');
        } else {
            return redirect('provider/locations')->with('error','sorry you are not allowed to create more five locations');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provider_id = Auth::guard('provider')->user()->id;
        $Item = Model::where('id',$id)->where('provider_id',$provider_id)->firstOrFail();
        return view($this->view . 'edit', [ 'Item' => $Item ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $provider_id = Auth::guard('provider')->user()->id;
        $Item = Model::where('id',$id)->where('provider_id',$provider_id)->firstOrFail();

        $request->validate([
            'latitude' => 'required|numeric|unique:locations,latitude,' . $id,
            'longitude' => 'required|numeric|unique:locations,longitude,' . $id,
        ]);

        $Item->update($this->gteInput($request,$Item));

        return redirect()->back()->with('info','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Item = Model::where('id',$id)->firstOrFail();

        $Item->delete();

        return redirect()->back()->with('error','deleted successfully');

    }
    
    
    private function gteInput($request,$modelClass) {

        $input = $request->only(['latitude','longitude']);

        $input['provider_id'] = Auth::guard('provider')->user()->id;

        return  $input;
    }
    

     
}
