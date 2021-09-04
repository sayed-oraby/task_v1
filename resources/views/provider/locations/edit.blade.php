@extends('provider.layouts.master')

@section('sub_title') 
     edit provider
@endsection

@section('main_title')
  edit provider 
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
                     edit provider
                </h3>
            </div>
        </div>

    </div>

    <div class="m-portlet__body">

        @include('flash-message')

        {!! Form::model($Item, [ 'route' => ['provider.locations.update' , $Item->id ] , 'method' => 'patch', 'role'=>'form','id'=>'edit', 'class'=> 'm-form m-form--fit m-form--label-align-left' ]) !!}
        
        {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $Item->id }}">
        
            <div class="form-group m-form__group row">

               

                <div class="col-lg-12 {{ $errors->has('latitude') ? ' has-error' : '' }}">
                   <label>  latitude   </label>
                   
                   <input type="text" name="latitude" onkeypress="return isNumberKey(event)" class="form-control m-input" required="required" value="{{ $Item->latitude }}" placeholder="latitude">
                   
                   @if ($errors->has('latitude'))
                        <span class="help-block" style="color:red">
                             <strong>{{ $errors->first('latitude') }} </strong>
                        </span> 
                   @endif
               </div>
                 
                 <div class="col-lg-12 {{ $errors->has('longitude') ? ' has-error' : '' }}">
                     <label> longitude     </label>
                     
                     <input type="text" name="longitude" onkeypress="return isNumberKey(event)" class="form-control m-input" required="required" value="{{ $Item->longitude }}" placeholder="  longitude  ">
                     
                     @if ($errors->has('longitude'))
                          <span class="help-block" style="color:red">
                               <strong>{{ $errors->first('longitude') }} </strong>
                          </span> 
                     @endif
                 </div>
                
                <div class="col-lg-12">
                    <button type="submit" form="edit" class="btn btn-success" style="margin-left:0px;margin-bottom: 50px;">update</button>
                </div>
              
            </div>

            
        {!! Form::close() !!}

    </div>     
    
    


</div>
<!--end::Portlet-->

@endsection


@section('footer')

    <script>
        // is number //
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

@endsection


