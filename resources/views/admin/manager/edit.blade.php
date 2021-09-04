@extends('admin.layouts.master')

@section('sub_title') 
     edit manager
@endsection

@section('main_title')
  edit manager 
@endsection

@section('header') 
    <style>
        .m-portlet__body .col-lg-12 , .m-portlet__body .col-lg-6 { margin-bottom: 30px }
    </style>
@endsection

@section('content')

<!--begin::Portlet-->
<div class="m-portlet m-portlet--tab">

    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                     edit manager
                </h3>
            </div>
        </div>

    </div>

    <div class="m-portlet__body">

        @include('flash-message')

        {!! Form::model($Item, [ 'route' => ['admin.manager.update' , $Item->id ] , 'method' => 'patch', 'role'=>'form','id'=>'edit', 'class'=> 'm-form m-form--fit m-form--label-align-left' ]) !!}
        
        {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $Item->id }}">
        
            <div class="form-group m-form__group row">

                 <div class="col-lg-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                     <label>  user name   </label>
                     
                     <input type="text" name="name" class="form-control m-input" required="required" value="{{ $Item->name }}" placeholder=" user name  ">
                     
                     @if ($errors->has('name'))
                          <span class="help-block" style="color:red">
                               <strong>{{ $errors->first('name') }} </strong>
                          </span> 
                     @endif
                 </div>
                 
                 <div class="col-lg-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                     <label> email     </label>
                     
                     <input type="email" name="email" class="form-control m-input" required="required" value="{{ $Item->email }}" placeholder="  email  ">
                     
                     @if ($errors->has('email'))
                          <span class="help-block" style="color:red">
                               <strong>{{ $errors->first('email') }} </strong>
                          </span> 
                     @endif
                 </div>
                
                <div class="col-lg-12">
                    <button type="submit" form="edit" class="btn btn-success" style="margin-left:0px;margin-bottom: 50px;">update</button>
                </div>
              
            </div>

            
        {!! Form::close() !!}

    </div>     
    
    
    <hr style="width: 100%">

    <div class="m-portlet__head">
         
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">  update password for manager :  {{ $Item->name }}   </h3>
            </div>
        </div>

    </div>
    
    <div class="m-portlet__body">


        <!--begin::Form-->
        {!! Form::model($Item, [ 'route' => ['admin.manager.UpdatePass' , $Item->id ] , 'method' => 'patch', 'role'=>'form','id'=>'update' , 'class' => 'm-form m-form--fit m-form--label-align-left' ]) !!}

        <div class="m-portlet__body">

            <div class="col-lg-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                <label>  new pass   </label>
                
                {!! Form::password('password', [ "class" => "form-control" , 'placeholder' => "new password",'required' => 'required']) !!}

                @if ($errors->has('password'))
                     <span class="help-block" style="color:red">
                          <strong>{{ $errors->first('password') }} </strong>
                     </span> 
                @endif
            </div>

            <div class="col-lg-12">
                <button type="submit" class="btn btn-success" style="margin-left:0px;margin-bottom: 50px;">update password</button>
            </div>


        </div>

        {!! Form::close() !!}


    </div>


</div>
<!--end::Portlet-->

@endsection



