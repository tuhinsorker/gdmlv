
// Globally form submit ajax call
(function() {
    'use strict';
     window.addEventListener('load', function() {
     // Fetch all the forms we want to apply custom Bootstrap validation styles to
     var forms = document.getElementsByClassName('needs-validation');
     // Loop over them and prevent submission
     var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
             if (form.checkValidity() === false) {
                 event.preventDefault();
                 event.stopPropagation();
                 toastr.warning('Please fulfill all required fields.', 'Required Missing!');
                 $('.actionBtn').prop('disabled', false);
             }else {
                 $('.actionBtn').prop('disabled', true);
                ajaxSubmit(event, $(this));
             }
             form.classList.add('was-validated');
         }, false);
     });
   }, false);
 })();



//Form Submition
function ajaxSubmit(e, form) {
    e.preventDefault();
  
    var action = form.attr('action');
    var CallBackFunction = eval(form.attr('data'));
    var form2 = e.target;
    var data = new FormData(form2);
    $.ajax({
        type: "POST",
        url: action,
        processData: false,
        contentType: false,
        dataType: 'json',
        data: data,
        success: function(response)
        {
            //console.log(response);
            $('.actionBtn').prop('disabled', false);
            if(response.success==true) {
                //alert(response.message);
                toastr.success(response.message, response.title);
                if (typeof CallBackFunction == 'function') {
                    if(response.hasOwnProperty('data')){
                        CallBackFunction(response.data);
                    }else{
                        CallBackFunction();
                    }
                }
            }else if(response.success=='exist'){
                //alert(response.message);
                toastr.warning(response.message, response.title);
            }else{
                //alert(response.message);
                toastr.error(response.message, response.title);
            }
        }
    });
}


toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }