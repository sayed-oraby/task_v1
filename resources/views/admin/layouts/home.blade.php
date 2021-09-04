@extends('admin.layouts.master')

@section('main_title') Home @endsection 


@section('sub_title') Dashboard @endsection 


@section('content')

<!--begin:: Widgets/Top Products-->
<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    {{ $msg }}
                </h3>
            </div>
        </div>
    </div>

    <div class="m-portlet__body">
         
    </div>
</div>
<!--end:: Widgets/Top Products-->

@endsection
