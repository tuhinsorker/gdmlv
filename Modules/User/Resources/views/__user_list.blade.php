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

    
    <div class="modal fade " id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-xl">

            <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data" class="ajaxForm needs-validation" id="ajaxForm" novalidate="" data="showCallBackData" accept-charset="UTF-8">
      
                @csrf

               <input type="hidden" name="_method" value="" id="acmethod">

                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        
                        <div class="mb-3 row">
                            <label for="firstname" class="col-sm-3 col-form-label fw-semi-bold">First Name <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="firstname" id="firstname" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="lastname" class="col-sm-3 col-form-label fw-semi-bold">last Name</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="lastname" id="lastname">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="lastname" class="col-sm-3 col-form-label fw-semi-bold">Middle Name</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="lastname" id="lastname">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gender" class="col-sm-3 col-form-label fw-semi-bold"> Gender <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="search_test" name="gender" id="gender">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-3 col-form-label fw-semi-bold"> Phone <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="phone" id="phone" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="address" class="col-sm-3 col-form-label fw-semi-bold">Address</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="address" id="address">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-sm-3 col-form-label fw-semi-bold">Email <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="email" id="email" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-sm-3 col-form-label fw-semi-bold">Password <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="password" name="password" id="password" required>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="country_id" class="col-sm-3 col-form-label fw-semi-bold"> Country <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="search_test" name="country_id" id="country_id">
                                    <option value="1">---</option>
                                    <option value="2">---</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="state_id" class="col-sm-3 col-form-label fw-semi-bold"> State <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="search_test" name="state_id" id="state_id">
                                    <option value="1">---</option>
                                    <option value="2">---</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="lga_id" class="col-sm-3 col-form-label fw-semi-bold"> LGA <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="search_test" name="lga_id" id="lga_id">
                                    <option value="1">---</option>
                                    <option value="2">---</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="education_id" class="col-sm-3 col-form-label fw-semi-bold"> Education <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="search_test" name="education_id" id="education_id">
                                    <option value="1">---</option>
                                    <option value="2">---</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nin" class="col-sm-3 col-form-label fw-semi-bold"> NIN <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="nin" id="nin" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="bvn" class="col-sm-3 col-form-label fw-semi-bold"> BVN <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="bvn" id="bvn" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="lassra" class="col-sm-3 col-form-label fw-semi-bold"> LASSRA <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="lassra" id="lassra" required>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="bank_name" class="col-sm-3 col-form-label fw-semi-bold"> Bank Name <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="bank_name" id="bank_name" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="account_name" class="col-sm-3 col-form-label fw-semi-bold"> Account name  <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="account_name" id="account_name" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="account_number" class="col-sm-3 col-form-label fw-semi-bold"> Account number  <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="account_number" id="account_number" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="guarantors_name" class="col-sm-3 col-form-label fw-semi-bold"> Guarantors Name <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="guarantors_name" id="guarantors_name" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="guarantors_phone" class="col-sm-3 col-form-label fw-semi-bold"> Guarantors phone  <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="guarantors_phone" id="guarantors_phone" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="guarantors_email" class="col-sm-3 col-form-label fw-semi-bold"> Guarantors email  <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="guarantors_email" id="guarantors_email" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="guarantors_id_type" class="col-sm-3 col-form-label fw-semi-bold"> Guarantors id type  <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="guarantors_id_type" id="guarantors_id_type" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="guarantors_id" class="col-sm-3 col-form-label fw-semi-bold"> Guarantors id Upload  <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="file" name="guarantors_id" id="guarantors_id" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="team_id" class="col-sm-3 col-form-label fw-semi-bold"> Team <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="search_test" name="team_id" id="team_id">
                                    <option value="2">Team One</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="team_id" class="col-sm-3 col-form-label fw-semi-bold"> User Type <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="search_test" name="user_type" id="user_type">
                                    <option value="2">User</option>
                                    <option value="4">Fild Staff</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="image" class="col-sm-3 col-form-label fw-semi-bold">Image</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="file" name="image" >
                                <input class="form-control" type="hidden" name="image_image" id="image">
                                <input class="form-control" type="hidden" name="id" id="id">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="status" class="col-sm-3 col-form-label">Status <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
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

        
                $("#ac-method").attr("{{@put}}");
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
