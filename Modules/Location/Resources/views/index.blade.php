@extends('layouts.backend')
@push('css')
@endpush

@section('content')
  


<div class="body-content">
    <div class="row">
        <div class="col-12">
            <!--Basic Tabs-->
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Location Setup</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills mb-3 bg-light p-2" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-country-tab" data-bs-toggle="pill" href="#pills-country" role="tab" aria-controls="pills-country" aria-selected="true">Country setup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-state-tab" data-bs-toggle="pill" href="#pills-state" role="tab" aria-controls="pills-state" aria-selected="true">State setup</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="pills-region-tab" data-bs-toggle="pill" href="#pills-region" role="tab" aria-controls="pills-region" aria-selected="false">Region Setup</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="pills-location-tab" data-bs-toggle="pill" href="#pills-location" role="tab" aria-controls="pills-location" aria-selected="false">Location setup</a>
                        </li>
                        
                    </ul>


                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-country" role="tabpanel" aria-labelledby="pills-country-tab">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="card mb-4 shadow">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-17 fw-semi-bold mb-0">Country setup</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">

                                            <form action="{{route('store-country')}}" method="POST" enctype="multipart/form-data" class="ajaxForm needs-validation" id="ajaxForm" novalidate="" data="showCallBackData" accept-charset="UTF-8">
                                                @csrf

                                                <div class="add_input">
                                                    <div class="form-group">
                                                        <label for="country_name" class="col-form-label">Country name *</label>
                                                        <div class="input-group">
                                                            <input name="country_name[]" class="form-control" placeholder="Country Name" type="text" required  >
                                                            <span class="input-group-addon btn-primary" onclick="addInputField()" > <button class="btn btn-primary" type="button"><i class="typcn typcn-plus"></i></button></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="fw-semi-bold mb-2"></label>
                                                    <div class="input-group mb-3">
                                                        <button class="btn btn-md btn-success actionBtn" type="submit">Save</button> 
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="fw-semi-bold mb-2">Upload CSV File</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                            <div class="mb-3 justify-content-end me-1">
                                                <button type="button" class="btn btn-danger w-auto me-2">Dawonload Demo File</button>
                                                <button type="button" class="btn btn-success w-auto">Save</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-12 col-lg-6">
                                    <div class="card mb-4 shadow">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-17 fw-semi-bold mb-0">Country List</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered dt-responsive nowrap bootstrap4">
                                                    <thead>
                                                        <tr>
                                                            <th>SL.</th>
                                                            <th>Country Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $i=1;
                                                        @endphp
                                                        @foreach ($countries as $item)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$item->country_name}}</td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="btn btn-success-soft btn-sm me-1"><i class="far fa-edit"></i></a>
                                                                <a href="javascript:void(0)" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="tab-pane fade" id="pills-state" role="tabpanel" aria-labelledby="pills-state-tab">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="card mb-4 shadow">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-17 fw-semi-bold mb-0">State setup</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">

                                            <div class="mb-3">
                                                <label class="col-form-label text-end fw-semi-bold">Country Name</label>
                                                <div class="col-12">
                                                    <select class="form-control placeholder-single" name="country_id">  
                                                        @foreach ($countries as $item)       
                                                            <option value="{{$item->id}}">{{$item->country_name}}</option>
                                                        @endforeach                 
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="fw-semi-bold">State *</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="State Name" name="state_name" >
                                                </div>
                                            </div>

                                            <div class="mb-3 justify-content-end me-1">
                                                <button type="button" class="btn btn-success w-auto">Save</button>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card mb-4 shadow">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-17 fw-semi-bold mb-0">Bulk Upload</h6>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="card-body">

                                            <div class="mb-3">
                                                <label class="fw-semi-bold mb-2">Upload CSV File</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                            <div class="mb-3 justify-content-end me-1">
                                                <button type="button" class="btn btn-danger w-auto me-2">Dawonload Demo File</button>
                                                <button type="button" class="btn btn-success w-auto">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="card mb-4 shadow">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-17 fw-semi-bold mb-0">State List</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered dt-responsive nowrap bootstrap4">
                                                    <thead>
                                                        <tr>
                                                            <th>SL.</th>
                                                            <th>Satet name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $i=1;
                                                            @endphp
                                                            @foreach ($states as $item)
                                                            <tr>
                                                                <td>{{$i++}}</td>
                                                                <td>{{$item->state_name}}</td>
                                                                <td>
                                                                    <a href="javascript:void(0)" class="btn btn-success-soft btn-sm me-1"><i class="far fa-edit"></i></a>
                                                                    <a href="javascript:void(0)" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade" id="pills-region" role="tabpanel" aria-labelledby="pills-region-tab">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="card mb-4 shadow">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-17 fw-semi-bold mb-0">State setup</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="col-form-label text-end fw-semi-bold">State(s)</label>
                                                <div class="col-12">
                                                    <select class="form-control placeholder-single" name="state_id">                                       
                                                        @foreach ($states as $item)    
                                                        <option value="{{$item->id}}">{{$item->state_name}}</option>
                                                        @endforeach                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="fw-semi-bold">Region Name *</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Region Name" name="region_name">
                                                </div>
                                            </div>

                                            <div class="mb-3 justify-content-end me-1">
                                                <button type="button" class="btn btn-success w-auto">Save</button>
                                            </div>

                                        </div>

                                        <div class="card-body">


                                            <div class="mb-3">
                                                <label class="fw-semi-bold mb-2">Upload CSV File</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                            </div>

                                            <div class="mb-3 justify-content-end me-1">
                                                <button type="button" class="btn btn-danger w-auto me-2">Dawonload Demo File</button>
                                                <button type="button" class="btn btn-success w-auto">Save</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="card mb-4 shadow">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-17 fw-semi-bold mb-0">Region List</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered dt-responsive nowrap bootstrap4">
                                                    <thead>
                                                        <tr>
                                                            <th>SL.</th>
                                                            <th>Region name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $i=1;
                                                            @endphp
                                                            @foreach ($regions as $item)
                                                            <tr>
                                                                <td>{{$i++}}</td>
                                                                <td>{{$item->region_name}}</td>
                                                                <td>
                                                                    <a href="javascript:void(0)" class="btn btn-success-soft btn-sm me-1"><i class="far fa-edit"></i></a>
                                                                    <a href="javascript:void(0)" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-location" role="tabpanel" aria-labelledby="pills-region-tab">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="card mb-4 shadow">

                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-17 fw-semi-bold mb-0">Location setup</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="col-form-label text-end fw-semi-bold">Region</label>
                                                <div class="col-12">
                                                    <select class="form-control placeholder-single" name="region_id">                                       
                                                        @foreach ($regions as $item)    
                                                        <option value="{{$item->id}}">{{$item->region_name}}</option>
                                                        @endforeach                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="fw-semi-bold">Location Name *</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Location Name" name="location_name">
                                                </div>
                                            </div>

                                            <div class="mb-3 justify-content-end me-1">
                                                <button type="button" class="btn btn-success w-auto">Save</button>
                                            </div>

                                        </div>

                                        <div class="card-body">

                                            <div class="mb-3">
                                                <label class="fw-semi-bold mb-2">Upload CSV File</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                            </div>

                                            <div class="mb-3 justify-content-end me-1">
                                                <button type="button" class="btn btn-danger w-auto me-2">Dawonload Demo File</button>
                                                <button type="button" class="btn btn-success w-auto">Save</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="card mb-4 shadow">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-17 fw-semi-bold mb-0">Location List</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered dt-responsive nowrap bootstrap4">
                                                    <thead>
                                                        <tr>
                                                            <th>SL.</th>
                                                            <th>Location name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $i=1;
                                                            @endphp
                                                            @foreach ($regions as $item)
                                                            <tr>
                                                                <td>{{$i++}}</td>
                                                                <td>{{$item->region_name}}</td>
                                                                <td>
                                                                    <a href="javascript:void(0)" class="btn btn-success-soft btn-sm me-1"><i class="far fa-edit"></i></a>
                                                                    <a href="javascript:void(0)" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
    <div class="modal fade " id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-xl">

            <form action="{{route('client_store')}}" method="POST" enctype="multipart/form-data" class="ajaxForm needs-validation" id="ajaxForm" novalidate="" data="showCallBackData" accept-charset="UTF-8">
      
                @csrf

                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        
                        <div class="mb-3 row">
                            <label for="client_name" class="col-sm-3 col-form-label fw-semi-bold">Client name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="client_name" id="client_name">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="client_email" class="col-sm-3 col-form-label fw-semi-bold">Client Email</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="client_email" id="client_email">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="client_phone" class="col-sm-3 col-form-label fw-semi-bold">Client phone</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="client_phone" id="client_phone">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="client_address" class="col-sm-3 col-form-label fw-semi-bold">Client Address</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="client_address" id="client_address">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="client_logo" class="col-sm-3 col-form-label fw-semi-bold">Client Logo</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="client_logo" >
                                <input class="form-control" type="hidden" name="client_logo_image" id="client_logo">
                                <input class="form-control" type="hidden" name="id" id="id">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="status" class="col-sm-3 col-form-label">Status <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <div class="radio">
                                    <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                    <label for="radio1">Active</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                    <label for="radio2">InActive</label>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success modal_action actionBtn"></button>
                    </div>

                </div>

            </form>
        </div>
    </div>




    

<script type="text/javascript">

    
        // Counts and limit for invoice
        var count = 2;
        var limits = 500;
        var wrapper = $('.add_input');
    
        //Add Invoice Field
        function addInputField(){
             var html = 
                        '<div class="form-group ">'+
                        '<label for="country_name" class="col-form-label">Country Name *</label>'+
                        
                            '<div class="input-group">'+
                              '<input type="text" class="form-control" name="country_name[]" placeholder="Country Name" required />'+
                              '<span class="input-group-addon btn-danger remove_button" > <button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></span>'+
                            '</div>'+
                            
                        '</div>';
            $(wrapper).append(html);
            count++;
        }
    
        //Delete a row 
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent().parent('div').remove();
            x--; 
        });
    
    </script>


    <script type="text/javascript">
        // delete items
      
        var showCallBackData = function() {
            $('#id').val('');
            $('.ajaxForm')[0].reset();
            $('#myModal').modal('hide');
            //$('#clientlist').DataTable().ajax.reload(null, false);
            $("#clientlist").load(" #clientlist > *");
        }
      
        $(document).ready(function() {
            "use strict";
      
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    
            
            $('.addShowModal').on('click', function() {
                $('.modal-title').text('Add New Client');
                $('.actionBtn').text('Add');
                $('.ajaxForm').removeClass('was-validated');
                $('#myModal').modal('show');
            });
    
    
            $('#clientlist').on('click', '#deleteAction', function(e) {
                e.preventDefault();

                $('#ajaxForm').removeClass('was-validated');
                var submit_url = $(this).attr('data-route');
                var check = confirm('Are you sure');
                if (check == true) {
                    $.ajax({
                        type: 'GET',
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
                            $("#clientlist").load(" #clientlist > *");
                        },
                        error: function() {
                        }
                    });
                }
            });

            $('#clientlist').on('click', '#editAction', function(e) {
                e.preventDefault();
                var submit_url = $(this).attr('data-route');
                var action_url = "{{route('update_client')}}";
                $.ajax({
                    type: 'GET',
                    url: submit_url,
                    data: {"_token": "{{ csrf_token() }}"},
                    dataType: 'JSON',
                    success: function(res) {

                        $('#client_name').val(res.data.client_name);
                        $('#client_address').val(res.data.client_address);
                        $('#client_phone').val(res.data.client_phone);
                        $('#client_logo').val(res.data.client_logo);
                        $('#id').val(res.data.id);
                        $('#client_email').val(res.data.client_email);
    
                        $("#ajaxForm").attr("action", action_url);
                        $('.modal-title').text('Update Information');
                        $('.actionBtn').text('Update');
                        $('#myModal').modal('show');
                    },
                    error: function() {
                    }
                });
            });
      
        });
      
      
      </script>




    @endsection

    @push('js')
    @endpush
