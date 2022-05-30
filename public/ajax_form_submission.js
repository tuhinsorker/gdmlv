
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
                //alert(response.title);
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


$(document).ready(function(){
    //tableBasic.initialize();
    $('.custool').tooltip();
	// select 2 dropdown 
    $("select.form-control:not(.form-control-sm):not([required])").select2({
        placeholder: "Select option",
        allowClear: true
    });
    $("select.form-control:not(.form-control-sm)[required]").select2({
        placeholder: "Select option",
        allowClear: false
    });

});


function dobValidator(id, min, max) {
    if( id =='' || min =='' || max =='' ){
        return '';
    }
    var birthday = document.getElementById(id).value; // Don't get Date yet...
    var regexVar = /^([0-9]{4})\-([0-9]{2})\-([0-9]{2})$/; // add anchors; use literal
    var regexVarTest = regexVar.test(birthday); // pass the string, not the Date
    var userBirthDate = new Date(birthday.replace(regexVar, "$1-$2-$3")); // Use YYYY-MM-DD format
    var todayYear = (new Date()).getFullYear(); // Always use FullYear!!
    var cutOff19 = new Date(); // should be a Date
    cutOff19.setFullYear(todayYear - min); // ...
    var cutOff95 = new Date();
    cutOff95.setFullYear(todayYear - max);
    var dobErrMsg;
    if (!regexVarTest) { // Test this before the other tests
        dobErrMsg = "enter date of birth as yyyy-mm-dd";
    } else if (isNaN(userBirthDate)) {
        dobErrMsg = "date of birth is invalid";
    } else if (userBirthDate > cutOff19) {
        dobErrMsg = "you have to be older than "+min;
    } else if (userBirthDate < cutOff95) {
        dobErrMsg = "you have to be younger than "+max;
    } else {
        dobErrMsg = "";
    }
    return dobErrMsg; // Return the date instead of an undefined variable
}

  toastr.options = {
    "closeButton": true,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
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