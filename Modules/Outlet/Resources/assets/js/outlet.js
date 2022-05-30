
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

});

