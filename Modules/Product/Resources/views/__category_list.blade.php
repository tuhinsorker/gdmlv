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
                            <h6 class="fs-17 fw-semi-bold mb-0">Category List</h6>
                            
                        </div>
                        <div class="text-end">
                            <a href="javascript:void(0)"  class="btn btn-success btn-sm mr-1 addShowModal"><i class="fas fa-plus mr-1"></i>Add New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table display table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Category name</th>
                                    <th>Parent Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <a href="#" class="btn btn-success-soft btn-sm me-1"><i class="far fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
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

@include('product::modal.__category_modal')




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

            $('.modal-title').text('Create New Ctegory');
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
