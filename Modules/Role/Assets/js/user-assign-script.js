
$(function(){
    "use strict";
    $(document).on('change','#user_id',function(){
       let user_id = $(this).val(); user_id
       let url = $("#get_user_role").val();
        $.ajax({
            url:url,
            dataType:'json',
            type:"GET",
            data:{user_id:user_id},
            success:function(data){
                console.log(data);
                $("#addRow").empty();
                if(data.length < 1){
                    $('.existing-card').removeClass('d-block');
                    $('.existing-card').addClass('d-none');
                }
                $.each(data,function(key,v){
                    $('.existing-card').removeClass('d-none');
                    $('.existing-card').addClass('d-block');
                    $("#addRow").append(
                        $('<tr>').append(
                            $('<td>').append(
                                key + 1.
                            ),
                            $('<td>').append(
                                $('#user_id option:selected').text()
                            ),
                            $('<td>').append(
                                v.type
                            )

                        )
                    )
                });
            }
        });

    });


 });



 "use strict";
function checkallcreate(sl){

   $("#checkAllcreate"+sl).change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".create"+sl).each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".create"+sl).each(function(){
         $(this).prop("checked",false);
       });
     }
   });

}
 "use strict";
function checkallread(sl){

   $("#checkAllread"+sl).change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".read"+sl).each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".read"+sl).each(function(){
         $(this).prop("checked",false);
       });
     }
   });

}

 "use strict";
function checkalledit(sl){

   $("#checkAlledit"+sl).change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".edit"+sl).each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".edit"+sl).each(function(){
         $(this).prop("checked",false);
       });
     }
   });

}

 "use strict";
function checkalldelete(sl){

   $("#checkAlldelete"+sl).change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".delete"+sl).each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".delete"+sl).each(function(){
         $(this).prop("checked",false);
       });
     }
   });

}


