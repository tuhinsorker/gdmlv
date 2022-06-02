@extends('layouts.backend')
@push('css')
@endpush

@section('content')
<div class="body-content">
    <div class="row mb-4">
        <div class="col-12 col-lg-5">
            <div class="card">

                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-bold mb-0">Add Birfs</h6>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="mb-3 row">
                        <label class="col-lg-5 col-xl-3  col-form-label text-end fw-bold justify-content-start d-flex"> Brif Title *</label>
                        <div class="col-lg-7 col-xl-9">
                           <input type="text" class="form-control" name="title" required>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label class="col-lg-5 col-xl-3  col-form-label text-end fw-bold justify-content-start d-flex">Description</label>
                        <div class="col-lg-7 col-xl-9">
                            <textarea class="form-control" name="discription"></textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-lg-5 col-xl-3  col-form-label text-end fw-bold justify-content-start d-flex">Brif File</label>
                        <div class="col-lg-7 col-xl-9">
                            <input type="file" class="form-control" name="title" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-bold justify-content-start d-flex">Time <i class="text-danger">*</i></label>
                        <div class="col-xl-9 col-xxl-10">
                            <select class="form-control placeholder-single">                                       
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>                                              
                            </select>
                        </div>
                    </div>

                    
                    <div class="mb-3 row justify-content-end">
                        <a href="#" class="btn btn-danger w-auto me-2"> Reset</a>
                        <a href="#" class="btn btn-success w-auto me-2">Add</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-lg-7">

            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-bold mb-0">Brif List</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table display table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>No of Views</th>
                                    <th>Created date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td> System Architect System Architect System Architect</td>
                                    <td>1</td>
                                    <td>20022-01-10</td>
                                    <td>
                                        <a href="#" class="btn btn-success-soft btn-sm me-1"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td> System Architect System Architect System Architect</td>
                                    <td>1</td>
                                    <td>20022-01-10</td>
                                    <td>
                                        <a href="#" class="btn btn-success-soft btn-sm me-1"><i class="far fa-eye"></i></a>
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
