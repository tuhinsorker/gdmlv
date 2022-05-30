@extends('layouts.backend')
@push('css')
@endpush

@section('content')
    <!--/.Content Header (Page header)--> 
    <div class="body-content">
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
                       
                        
                        <div class="table-responsive">
                            <table id="clientlist" class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Client Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clients as $key => $client)
                                    <tr>
                                        <td>
                                            <div>
                                                <img src="{{url('/images/'.$client->client_logo)}}" class="rounded-circle" width="50" alt="...">
                                            </div>
                                        </td>
                                        <td>{{$client->client_name}}</td>
                                        <td>{{$client->client_email}}</td>
                                        <td>{{$client->client_phone}}</td>
                                        <td>{{$client->client_address}}</td>
                                        <td>{{$client->is_active}}</td>

                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-success-soft btn-sm me-1" id="editAction" data-route="{{ route('client_edit',$client->id) }}"  ><i class="far fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger-soft btn-sm" id="deleteAction" data-route="{{ route('delete_client',$client->id) }}"><i class="far fa-trash-alt"></i></a>
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
    </div><!--/.body content-->


    
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
