<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin as modelRequest;
use App\Http\Controllers\Controller;
use App\Models\Admin as Model;
use Auth;

class AdminController extends Controller
{
     
    private $view = 'admin.manager.';
    private $redirect = 'admin/manager';

     public function home()
    {
        $msg = 'welcome  : ' . Auth::guard('admin')->user()->name;
        return view('admin.layouts.home',compact('msg'));
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Item = Model::get(['name','email','id']);
        return view($this->view . 'index',compact('Item'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view($this->view . 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(modelRequest $request)
    {
        Model::create($this->gteInput($request,null));
        return redirect($this->redirect)->with('success','added successfully');
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
        $Item = Model::findOrFail($id);
        return view($this->view . 'edit', [ 'Item' => $Item ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(modelRequest $request, $id)
    {
        $Item = Model::findOrFail($id);
        $Item->update($this->gteInput($request,$Item));
        return redirect()->back()->with('info','Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Item = Model::where('id',$id)->where('status',0)->firstOrFail();
        $Item->delete();
        return redirect($this->redirect)->with('error','deleted successfully');
    }
    
    
    private function gteInput($request,$modelClass) {

       
        $input = $request->only(['name','email']);

        
        if(isset($modelClass) ) {
             $input['status'] =  $modelClass->status;
             $input['password'] =  $modelClass->password;
        } else {
             $input['status'] =  0;
             $input['password'] =  bcrypt($request->password);
        }
        
        return  $input;
    }


    public function UpdatePass(Request $request,$id) {
         
        $request->validate([ 'password' => 'required|min:6' ]);
        
        $NewPass = bcrypt($request->password);
        
        $modelClass = Model::find($id);
                
        $modelClass->update(['password' => $NewPass]);
        
        return redirect()->back()->with('success','password updated successfully');
    }

    
}
