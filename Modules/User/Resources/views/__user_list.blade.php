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
                            <table id="userList" class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key => $user)
                                    <tr>
                                        <td>
                                            <div>
                                                <img src="{{url('/images/'.$user->image)}}" class="rounded-circle" width="50" alt="...">
                                            </div>
                                        </td>
                                        <td>{{$user->firstname.' '.$user->lastname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-success-soft btn-sm me-1" id="editAction" data-update-route="{{ route('user.update',$user->id) }}" data-edit-route="{{ route('user.edit',$user->id) }}"  ><i class="far fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger-soft btn-sm" id="deleteAction" data-route="{{ route('user.destroy',$user->id) }}"><i class="far fa-trash-alt"></i></a>
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

    @include('user::modal.__user_modal')


    <script type="text/javascript">
        // delete items
      
        var showCallBackData = function() {
            $('#id').val('');
            $('.ajaxForm')[0].reset();
            $('#myModal').modal('hide');
            //$('#userList').DataTable().ajax.reload(null, false);
            $("#userList").load(" #userList > *");
        }
      
        $(document).ready(function() {
            "use strict";
      
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    
            
            $('.addShowModal').on('click', function() {

                $('#firstname').val('');
                $('#lastname').val('');
                $('#email').val('');
                $('#phone').val('');
                $('#address').val('');
                $('#password').val('');
                $('#acmethod').val('');

                $('.modal-title').text('Add New User');
                $('.actionBtn').text('Add');
                $('.ajaxForm').removeClass('was-validated');
                $('#myModal').modal('show');
            });
    
    
            $('#userList').on('click', '#deleteAction', function(e) {
                e.preventDefault();

                $('#ajaxForm').removeClass('was-validated');
                var submit_url = $(this).attr('data-route');
                var check = confirm('Are you sure');
                if (check == true) {
                    $.ajax({
                        type: 'DELETE',
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
                            $("#userList").load(" #userList > *");
                        },
                        error: function() {
                        }
                    });
                }
            });

            $('#userList').on('click', '#editAction', function(e) {
                e.preventDefault();
                var submit_url = $(this).attr('data-edit-route');
                var action_url = $(this).attr('data-update-route');

        
                $.ajax({
                    type: 'GET',
                    url: submit_url,
                    data: {"_token": "{{ csrf_token() }}"},
                    dataType: 'JSON',
                    success: function(res) {

                        $("#acmethod").val('PUT');
                        $('#firstname').val(res.data.firstname);
                        $('#lastname').val(res.data.lastname);
                        $('#phone').val(res.data.phone);
                        $('#image').val(res.data.image);
                        $('#address').val(res.data.address);
                        $('#id').val(res.data.id);
                        $('#email').val(res.data.email);
                        $('#user_id').val(res.data.user_id);

                        $('#user_type').val(res.user.user_type).trigger('change');
                        $('#team_id').val(res.data.team_id).trigger('change');
    
                        $("#ajaxForm").attr("action", action_url);
                        $('.modal-title').text('Update Information');
                        $('.actionBtn').text('Update');
                        $('#myModal').modal('show');
                    },
                    error:function (response) {
                        console.log(response);
                    }
                });
            });
      
        });
      
      
      </script>




    @endsection

    @push('js')
    @endpush
