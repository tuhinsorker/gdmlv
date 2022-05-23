"use strict";
$(document).ready(function () {
    var url = $(location).attr('href');
    var segments = url.split( '/' );
    var segment_1 = segments[3];
    var segment_2 = segments[4];

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

    if (segment_1==='setting') {
        $('.setting').addClass('mm-active');
        $('.setting-mm').addClass('mm-show');
    }


});
