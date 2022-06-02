@extends('layouts.backend')
@push('css')
@endpush

@section('content')


<div class="body-content">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">User Role List</h6>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-success addShowModal" data-bs-toggle="modal" ><i class="glyphicon glyphicon-plus me-2"></i>Assign Role</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>User Name</th>
                                    <th>Role Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Bdtask Test</td>
                                    <td>Fildstaff role</td>
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




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Assign Role to user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('user.assign.role.store')}}" method="POST">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-bold justify-content-start d-flex"> User *</label>
                        <div class="col-xl-9 col-xxl-10">

                            <select name="user_id" id="user_id" class="form-control {{ $errors->first('user_id') ? 'is-invalid' : '' }} form-control-sm basic-single" >
                                <option value="">Select User</option>
                                @foreach($users as $key => $user)
                                <option value="{{  $user->id }}">{{ $user->name }}</option>
                                @endforeach
                           </select>
                           @if ($errors->has('user_id'))
                                <div class="error text-danger">{{ $errors->first('user_id') }}</div>
                            @endif

                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-bold justify-content-start d-flex">Role *</label>
                        <div class="col-xl-9 col-xxl-10">

                            <select name="role_id" class="form-control {{ $errors->first('role_id') ? 'is-invalid' : '' }}  form-control-sm basic-single">
                                <option value="">Select Role</option>
                                @foreach($roles as $key => $role)
                                <option value="{{  $role->id }}">{{ $role->type }}</option>
                                @endforeach
                            </select>

                           @if ($errors->has('user_id'))
                           <div class="error text-danger">{{ $errors->first('role_id') }}</div>
                           @endif

                            
                        </div>
                       
                    </div>
                   
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success modal_action actionBtn"> Save </button>
                    </div>
                    

                </form>
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

            $('.modal-title').text('Assign Role to user ');
            $('.actionBtn').text('Add');
            $('.ajaxForm').removeClass('was-validated');
            $('#exampleModal').modal('show');
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
@endpush
