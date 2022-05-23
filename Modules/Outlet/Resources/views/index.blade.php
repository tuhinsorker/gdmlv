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
                                <a href="{{url('/outlet/create')}}"  class="btn btn-success btn-sm mr-1 "><i class="fas fa-plus mr-1"></i>Add New</a>
                            </div>
                        </div>
                    </div>
                   

                    <div class="card-body">
                       
                        
                        <div class="table-responsive">
                            <table id="outletList" class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
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
                                <tbody>
                                    @foreach($outlets as $key => $outlet)
                                    <tr>
                                        <td>
                                            <div>
                                                <img src="{{url('/images/'.$outlet->outlet_image)}}" class="rounded-circle" width="50" alt="...">
                                            </div>
                                        </td>
                                        <td>{{$outlet->outlet_name}}</td>
                                        <td>{{$outlet->type_name}}</td>
                                        <td>{{$outlet->channel_name}}</td>
                                        <td>{{$outlet->outlet_phone}}</td>
                                        <td>{{$outlet->outlet_address}}</td>

                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-success-soft btn-sm me-1" id="editAction" data-route="{{ route('outlet_edit',$outlet->id) }}"  ><i class="far fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger-soft btn-sm" id="deleteAction" data-route="{{ route('delete_outlet',$outlet->id) }}"><i class="far fa-trash-alt"></i></a>
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


    
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-xl">

            <form action="{{route('outlet_channel_store')}}" method="POST" enctype="multipart/form-data" class="ajaxForm needs-validation" id="ajaxForm" novalidate="" data="showCallBackData" accept-charset="UTF-8">
      
                @csrf

                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        
                        <div class="mb-3 row">
                            <label for="type" class="col-sm-3 col-form-label fw-semi-bold">Outlet Type</label>
                            <div class="col-sm-9">
                                {!! Form::select('type', $types, '', ['class' => 'form-control'])!!}
                            </div>
                        </div>

                      
                        <div class="mb-3 row">
                            <label for="channel" class="col-sm-3 col-form-label fw-semi-bold">Outlet Channel</label>
                            <div class="col-sm-9">
                                {!! Form::select('channel', $channels, '', ['class' => 'form-control'])!!}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_name" class="col-sm-3 col-form-label fw-semi-bold">Outlet Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="outlet_name" id="outlet_name">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_address" class="col-sm-3 col-form-label fw-semi-bold">Outlet Address</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="outlet_address" id="outlet_address">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_phone" class="col-sm-3 col-form-label fw-semi-bold">Outlet Phone</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="outlet_phone" id="outlet_phone">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_image" class="col-sm-3 col-form-label fw-semi-bold">Outlet image</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="outlet_image" id="outlet_image">
                                <input class="form-control" type="hidden" name="old_image" id="old_image">
                                <input class="form-control" type="hidden" name="id" id="id">
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
                $('.modal-title').text('Create Channel');
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
                // alert(submit_url);
                //var check = confirm('are_you_sure');
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
                        //alert(res.data.id);
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
