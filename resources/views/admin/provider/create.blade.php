@extends('admin.layouts.master')

@section('sub_title') 
     add new provider
@endsection

@section('main_title')
    add new provider  
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
                    add new provider 
                </h3>
            </div>
        </div>
    </div>

    <div class="m-portlet__body">

        @include('flash-message')



        <!--begin::Form-->
        {!! Form::open(['url' => "admin/provider", 'class'=> 'm-form m-form--fit m-form--label-align-left','role'=>'form','id'=>'add', 'files' => true,'method'=>'post']) !!}
            
            <div class="form-group m-form__group row">

                 
                 <div class="col-lg-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                     <label>  full name   </label>
                     
                     <input type="text" name="name" class="form-control m-input" required="required" value="{{ old('name') }}" placeholder=" full name">
                     
                     @if ($errors->has('name'))
                          <span class="help-block" style="color:red">
                               <strong>{{ $errors->first('name') }} </strong>
                          </span> 
                     @endif
                 </div>

                 <div class="col-lg-12 {{ $errors->has('user_name') ? ' has-error' : '' }}">
                    <label>  user name   </label>
                    
                    <input type="text" name="user_name" id="user_name" class="form-control m-input" required="required" value="{{ old('user_name') }}" placeholder=" user name">
                    
                    @if ($errors->has('user_name'))
                         <span class="help-block" style="color:red">
                              <strong>{{ $errors->first('user_name') }} </strong>
                         </span> 
                    @endif
                </div>
                 
                 <div class="col-lg-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                     <label>  email    </label>
                     
                     <input type="email" name="email" class="form-control m-input" required="required" value="{{ old('email') }}" placeholder=" email  ">
                     
                     @if ($errors->has('email'))
                          <span class="help-block" style="color:red">
                               <strong>{{ $errors->first('email') }} </strong>
                          </span> 
                     @endif
                 </div>
                 
                 
                 
                 <div class="col-lg-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label> password    </label>
                    
                    <input type="password" name="password" class="form-control m-input" required="required" value="" placeholder=" password  ">
                    
                    @if ($errors->has('password'))
                         <span class="help-block" style="color:red">
                              <strong>{{ $errors->first('password') }} </strong>
                         </span> 
                    @endif
                </div>

                <div class="col-lg-12">
                    <button type="submit" class="btn btn-success" style="margin-right:0px;margin-bottom: 50px;">save</button>
                </div>

                 
     
             </div>


            
        {!! Form::close() !!}
        <!--end::Form-->

    </div>        

</div>
<!--end::Portlet-->



@endsection


@section('footer')

    <script>
        $("#user_name").keypress(function(event){
            var ew = event.which;
            if(48 <= ew && ew <= 57)
                return true;
            if(65 <= ew && ew <= 90)
                return true;
            if(97 <= ew && ew <= 122)
                return true;
            return false;
        });
    </script>

@endsection