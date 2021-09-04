@extends('admin.layouts.master')

@section('main_title') managers @endsection 

@section('sub_title') managers @endsection 

@section('content')


<!--begin::Portlet-->
<div class="m-portlet m-portlet--tab">
    
    <div class="m-portlet__head" style="height: 90px;">
        
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="{{ url('admin/manager/create') }}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
                        <span> <i class="la la-plus"></i>  <span> add new manager  </span>  </span>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>

    <div class="m-portlet__body">

        @include('flash-message')

        <!--begin::Section-->
        <div class="m-section">
            <div class="table-responsive">
                <div class="m-section__content">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>  user name </th>
                        <th>  email </th>
                        <th> tools </th>
                    </tr>
                </thead>
                <tbody>
                  
                    @php $x = 1; @endphp 
                    
                            @foreach($Item as $value)

                            <tr>
                                <td> {{ $x }} </td>
                                <td> {{ $value->name }} </td>
                                <td> {{ $value->email }} </td>
                            
                           
                                <td nowrap>
                                    <a href="{{ url('admin/manager/'). '/' . $value->id . '/edit'}}" class='m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill' title='Edit'>
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    
                                    @if($value->status == 0)
                                    <span class='DeletingModal m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill' name="{{ $value->id }}" title='Delete'>
                                         <i class="fa fa-trash"></i>
                                    </span>
                                    @endif
                                </td>
                                
                                
                              
                                
                            </tr>
     
                            @php $x = $x + 1; @endphp
                       @endforeach

                </tbody>
            </table>

                
                    
                </div>
            </div>
        </div>
        <!--end::Section-->

    </div>

</div>

<!--end::Portlet-->

@endsection

@section('footer')

      <script>

        $(document).ready(function () {

            $("#m_table_1").DataTable({
                responsive: !0,
                paging: !0,
                columnDefs: [ {
                    targets: -1,
                    title: "tools",
                    orderable: !1
                    }
                ]
            });


            $('#m_table_1').on('click', '.DeletingModal', function () {

                var ID = $(this).attr("name");
               
                         
                swal({
                        title: "Do you really want to delete this row ?",
                        text: "After deleting this row, you cannot go back .",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "yes",
                        cancelButtonText: "no",
                        closeOnConfirm: true,
                        closeOnCancel: true
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            window.location.href = '{{ url('admin/manager/destroy') }}' + '/' + ID;
     
                        }
                    });
            });

        });

    </script>


@endsection








