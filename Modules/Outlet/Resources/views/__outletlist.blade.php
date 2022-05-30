@extends('layouts.backend')
@push('css')
@endpush

@section('content')
    <!--/.Content Header (Page header)--> 
     <div class="body-content">

        <div class="row">
            <div class="col-12 pe-3">
                <div class="accordion accordion-flush px-0 mb-2" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header d-flex justify-content-end mb-3" id="flush-headingOne">
                            <button type="button" class="fs-17 filter-bt" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"><img  class="me-2 h-24" src="assets/dist/img/icons8-filter-30.png" alt="">Filter</button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse bg-white px-3" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="row">

                                <div class="col-4 mb-3">
                                    <label class="col-form-label text-end fw-semi-bold">Outlet Type</label>
                                    <div class="col-12">
                                        {!! Form::select('outlet_type', $types, '', ['class' => 'mySelect2First','id'=>'outlet_type','required'])!!}
                                    </div>
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="col-form-label text-end fw-semi-bold">Outlet Channel</label>
                                    <div class="col-12">
                                        {!! Form::select('channel_id', $channels, '', ['class' => 'mySelect2First','id'=>'channel_id','required'])!!}
                                    </div>
                                </div>
                           
                                <div class="col-4 mb-3">
                                    <label class="col-form-label text-end fw-semi-bold">Location</label>
                                    <div class="col-12">
                                        <select class="form-control placeholder-single">                                       
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                            </optgroup>                                              
                                        </select>
                                    </div>
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="col-form-label text-end fw-semi-bold">From date</label>
                                    <div class="col-12">
                                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                    </div>
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="col-form-label text-end fw-semi-bold">To date</label>
                                    <div class="col-12">
                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                    </div>
                                </div>

                                <div class="col-3 mb-3">
                                    <button class="btn btn-primary me-2 go">Go</button>
                                    <button class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 fw-semi-bold mb-0">{{$ptitle}}</h6>
                            </div>
                            <div class="text-end">
                                <a href="javascript:void(0)"  class="btn btn-success btn-sm mr-1 addShowModal"><i class="fas fa-plus mr-1"></i>Add New</a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="card-body">
                        <div class="table-responsive1">
                            <table id="outletList1" class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Outlet Name</th>
                                        <th>Type name</th>
                                        <th>Channel Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.body content-->


    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Outlet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" class="ajaxForm needs-validation" id="ajaxForm" novalidate="" data="showCallBackData" accept-charset="UTF-8">
    
                @csrf

                    <div class="modal-body">

                        <div class="mb-3 row">
                            <label for="type" class="col-sm-3 col-form-label fw-semi-bold">Outlet Type <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                {!! Form::select('type', $types, '', ['class' => 'mySelect2Modal','required'])!!}
                            </div>
                        </div>

                      
                        <div class="mb-3 row">
                            <label for="channel" class="col-sm-3 col-form-label fw-semi-bold">Outlet Channel <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                {!! Form::select('channel', $channels, '', ['class' => 'mySelect2Modal','required'])!!}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_name" class="col-sm-3 col-form-label fw-semi-bold">Outlet Name <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="outlet_name" id="outlet_name" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_address" class="col-sm-3 col-form-label fw-semi-bold">Outlet Address <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="outlet_address" id="outlet_address" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_phone" class="col-sm-3 col-form-label fw-semi-bold">Outlet Phone <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="outlet_phone" id="outlet_phone" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="region" class="col-sm-3 col-form-label fw-semi-bold">Region <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="outlet_phone" id="outlet_phone" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="location_id" class="col-sm-3 col-form-label fw-semi-bold">Location <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="location_id" id="location_id" required>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="street_no" class="col-sm-3 col-form-label fw-semi-bold">Outlet Street No <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="street_no" id="street_no" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="street_name" class="col-sm-3 col-form-label fw-semi-bold">Outlet Street Name <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="street_name" id="street_name" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gio_lat" class="col-sm-3 col-form-label fw-semi-bold">Outlet Latitude <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="gio_lat" id="gio_lat" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gio_long" class="col-sm-3 col-form-label fw-semi-bold">Outlet Longitude <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="gio_long" id="gio_long" required>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="outlet_cpf" class="col-sm-3 col-form-label fw-semi-bold">Outlet CPF  <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="outlet_cpf" id="outlet_cpf" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_cpl" class="col-sm-3 col-form-label fw-semi-bold">Outlet CPL <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="outlet_cpl" id="outlet_cpl" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_cpp" class="col-sm-3 col-form-label fw-semi-bold">Outlet contact person phone <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="outlet_cpp" id="outlet_cpp" required>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="outlet_image" class="col-sm-3 col-form-label fw-semi-bold">Outlet image</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="file" name="outlet_image" id="outlet_image">
                                <input class="form-control" type="hidden" name="old_image" id="old_image">
                                <input class="form-control" type="hidden" name="id" id="id">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gio_long" class="col-sm-3 col-form-label fw-semi-bold"> </label>
                            <div class="col-sm-8">
                                <div class="checkbox">
                                    <input type="checkbox" name="isbso" id="isbso" value="option1" checked="">
                                    <label for="isbso">Is BSO</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success modal_action actionBtn"></button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>




<script>
        
    var showCallBackData = function() {
        $('#id').val('');
        $('.ajaxForm')[0].reset();
        $('#myModal').modal('hide');
        //$('#outletList').DataTable().ajax.reload(null, false);
        $("#outletList").load(" #outletList > *");
    }

    $(document).ready(function() {
        "use strict";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        
        $('.addShowModal').on('click', function() {

            $('#type_name').val();
            $('#channel_name').val();

            $('#outlet_name').val();
            $('#outlet_address').val();
            $('#outlet_phone').val();
            $('#old_image').val();
            $('#id').val();

            $('.modal-title').text('Create New Outlet');
            $('.actionBtn').text('Add');
            $('.ajaxForm').removeClass('was-validated');
            $('#myModal').modal('show');
        });


        $('#outletList').on('click', '#deleteAction', function(e) {
            e.preventDefault();

            $('#ajaxForm').removeClass('was-validated');
            var submit_url = $(this).attr('data-route');
            var check = confirm('Are you sure');
            if (check == true) {
                $.ajax({
                    type: 'POST',
                    url: submit_url,
                    data: {"_token": "{{ csrf_token() }}"},
                    dataType: 'json',
                    success: function(response) {
                        if(response.success==true) {
                            toastr.success(response.message, response.title);
                        }else if(response.success=='exist'){
                            toastr.warning(response.message, response.title);
                        }else{
                            toastr.error(response.message, response.title);
                        }
                        $("#outletList").load(" #outletList > *");
                    },
                    error: function() {
                    }
                });
            }
        });


        $('#outletList').on('click', '#editAction', function(e) {
            e.preventDefault();
            var submit_url = $(this).attr('data-route');

            var action_url = "{{route('update_outlet')}}";
            $.ajax({
                type: 'GET',
                url: submit_url,
                data: {"_token": "{{ csrf_token() }}"},
                dataType: 'JSON',
                success: function(res) {

                    $('#type_name').val(res.data.type_id).trigger('change');
                    $('#channel_name').val(res.data.channel_id).trigger('change');

                    $('#outlet_name').val(res.data.outlet_name);
                    $('#outlet_address').val(res.data.outlet_address);
                    $('#outlet_phone').val(res.data.outlet_phone);
                    $('#old_image').val(res.data.outlet_image);
                    $('#id').val(res.data.id);

                    $("#ajaxForm").attr("action", action_url);
                    $('.modal-title').text('Update Information');
                    $('.actionBtn').text('Update');
                    $('#myModal').modal('show');
                },
                error: function() {
                }
            });
        });


        var outletlist = $('#outletList1').DataTable({

            processing: true,
            serverSide: true,

            ajax: {
                url : "{{route('outletListAjax')}}",
                data : function(d) {
                    d.outlet_type = $('#outlet_type').val();
                    d.channel_id = $('#channel_id').val();
                    d._token= "{{ csrf_token() }}";
                },
            },

            columns: [
                { data: 'image', name: 'image' },
                { data: 'outlet_name', name: 'outlet_name' },
                { data: 'type_name', name: 'type_name' },
                { data: 'channel_name', name: 'channel_name' },
                { data: 'outlet_address', name:'outlet_address'},
                { data: 'outlet_phone', name: 'outlet_phone' },
                { data: 'action', name: 'action' }
            ]

        });

        $(".go").click(function(){
            outletlist.draw();
        });



    });

</script>

@endsection
@push('js')
{{-- <script src="{{ asset('vendor/Outlet/assets/js/outlet.js') }}"></script> --}}
@endpush
