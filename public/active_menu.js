"use strict";
$(document).ready(function () {
    var url = $(location).attr('href');
    var segments = url.split( '/' );
    var segment_1 = segments[4];
    var segment_2 = segments[5];

    if (segment_1==='home') {
        $('.dashboard').addClass('mm-active');
    }

    if (segment_1==='client') {
        $('.client').addClass('mm-active');
        $('.client-mm').addClass('mm-show');
    }

    if (segment_1==='outlet') {
        $('.outlet').addClass('mm-active');
        $('.outlet-mm').addClass('mm-show');
    }

    if (segment_1==='setting'|| segment_1==='location'|| segment_1==='group-location'|| segment_1==='teams'||segment_1==='banks'||segment_1==='payment-types') {
        $('.setting').addClass('mm-active');
        $('.setting-mm').addClass('mm-show');
    }

    if (segment_1==='user-assign-role'|| segment_1==='roles') {
        $('.roles').addClass('mm-active');
        $('.roles-mm').addClass('mm-show');
    }

    if (segment_1==='device-request'|| segment_1==='user' || segment_1==='login-logout-log' || segment_1==='login-logout-count') {
        $('.users').addClass('mm-active');
        $('.users-mm').addClass('mm-show');
    }

    if (segment_1==='products'|| segment_1==='product-category'|| segment_1==='posms-item' ) {
        $('.products').addClass('mm-active');
        $('.products-mm').addClass('mm-show');
    }
    if (segment_1==='images' ) {
        $('.images').addClass('mm-active');
        $('.images-mm').addClass('mm-show');
    }

    if (segment_1==='brifs' ) {
        $('.brif').addClass('mm-active');
    }

    if (segment_1==='visit-dashboard'|| segment_1==='schedule'|| segment_1==='route-plane'|| segment_1==='exception-visit') {
        $('.visitprocess').addClass('mm-active');
        $('.visitprocess-mm').addClass('mm-show');
    }

});



$('.mySelect2First').select2({
    placeholder: "Select a state",
    allowClear: true
});

$('.mySelect2Modal').select2({
    dropdownParent: $('#myModal'),
    placeholder: "Select a state",
    allowClear: true
});




