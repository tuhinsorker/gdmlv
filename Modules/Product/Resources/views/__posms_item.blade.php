@extends('layouts.backend')
@push('css')
@endpush

@section('content')
<div class="body-content">
    <div class="row mb-4">
        <div class="col-12 col-lg-6">
            <div class="card">

                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Add Pos Item</h6>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary">Bulk Upload</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="mb-3 row">
                        <label class="col-lg-5 col-xl-3  col-form-label text-end fw-semi-bold justify-content-start d-flex"> Client *</label>
                        <div class="col-lg-7 col-xl-9">
                            <select class="form-control placeholder-single">                                       
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                </optgroup>                                              
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-5 col-xl-3  col-form-label text-end fw-semi-bold justify-content-start d-flex">Outlet Type*</label>
                        <div class="col-lg-7 col-xl-9">
                            <select class="form-control placeholder-single">                                       
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                </optgroup>                                              
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-5 col-xl-3  col-form-label text-end fw-semi-bold justify-content-start d-flex">Brand *</label>
                        <div class="col-lg-7 col-xl-9">
                            <select class="form-control placeholder-single">                                       
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                </optgroup>                                              
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-5 col-xl-3  col-form-label text-end fw-semi-bold justify-content-start d-flex">Pos Item Name</label>
                        <div class="col-lg-7 col-xl-9">
                            <input class="form-control" type="text" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-5 col-xl-3  col-form-label text-end fw-semi-bold justify-content-start d-flex"> Pos Item Weight</label>
                        <div class="col-lg-7 col-xl-9">
                            <input class="form-control" type="text" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-end">
                        <a href="#" class="btn btn-danger w-auto me-2"> Reset</a>
                        <a href="#" class="btn btn-success w-auto me-2">Add</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Pos item assign to user</h6>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary">Bulk Upload</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label class="col-lg-5 col-xl-3 col-form-label text-end fw-semi-bold justify-content-start d-flex"> Field Staff *</label>
                        <div class="col-lg-7 col-xl-9">
                            <input class="form-control" type="text" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-5 col-xl-3 col-form-label text-end fw-semi-bold justify-content-start d-flex">Product Name*</label>
                        <div class="col-lg-7 col-xl-9">
                            <select class="form-control placeholder-single">                                       
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                </optgroup>                                              
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Pos Item List</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table display table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Pos item</th>
                                    <th>Post item Weight</th>
                                    <th>Client</th>
                                    <th>Brand</th>
                                    <th>Date</th>
                                    <th>Outlet type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td>154</td>
                                    <td>7Up</td>
                                    <td>Soft-drink</td>
                                    <td>20022-01-10</td>
                                    <td>Ritailer</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="#" class="btn btn-success-soft btn-sm me-1"><i class="far fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
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
