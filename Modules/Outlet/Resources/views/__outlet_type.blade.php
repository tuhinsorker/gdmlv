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
                                <h6 class="fs-17 fw-semi-bold mb-0">{{@$ptitle}}</h6>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-primary addShowModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add New </button>
                            </div>
                        </div>
                    </div>
                   

                    <div class="card-body">
                       
                        <div class="table-responsive">
                            <table id="typeList" class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
                                <thead>
                                    <tr>
                                        <th>Type name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($types as $key => $type)
                                    <tr>
                                        <td>{{$type->type_name}}</td>
                                        <td>{{$type->type_description}}</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-success-soft btn-sm me-1" id="editAction" data-route="{{ route('type_edit',$type->id) }}"  ><i class="far fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger-soft btn-sm" id="deleteAction" data-route="{{ route('delete_type',$type->id) }}"><i class="far fa-trash-alt"></i></a>
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
    
        <div class="modal-dialog">

            <form action="{{route('outlet_type_store')}}" method="POST" enctype="multipart/form-data" class="ajaxForm needs-validation" id="ajaxForm" novalidate="" data="showCallBackData" accept-charset="UTF-8">
      
                @csrf

                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        
                        <div class="mb-3">
                            <label for="type_name" class="col-form-label">Type Name:</label>
                            <input type="text" name="type_name" id="type_name" class="form-control" id="type_name">
                        </div>
                        <input type="hidden" name="id" id="id">

                        <div class="mb-3">
                            <label for="type_description" class="col-form-label">Type Name:</label>
                            <textarea name="type_description" id="type_description" class="form-control" id="type_description"></textarea>
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
        //$('#typeList').DataTable().ajax.reload(null, false);
        $("#typeList").load(" #typeList > *");
    }
  
    $(document).ready(function() {
        "use strict";
  
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        
        $('.addShowModal').on('click', function() {
            $('.actionBtn').text('Add');
            $('.ajaxForm').removeClass('was-validated');
            $('#myModal').modal('show');
        });



        $('#typeList').on('click', '#deleteAction', function(e) {
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
  
  
  
        $('#typeList').on('click', '#editAction', function(e) {
            e.preventDefault();
            var submit_url = $(this).attr('data-route');

            //var check = confirm('are_you_sure');
            var action_url = "{{route('update_type')}}";
            $.ajax({
                type: 'POST',
                url: submit_url,
                data: {"_token": "{{ csrf_token() }}"},
                dataType: 'JSON',
                success: function(res) {

                    $('#type_name').val(res.data.type_name);
                    $('#type_description').val(res.data.type_description);
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


    
