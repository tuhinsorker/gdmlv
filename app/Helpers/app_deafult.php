<?php
use Illuminate\Support\Facades\App;
use Modules\Setting\Entities\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


function sendSuccessResponse($message, $result, $code=200){
    $resposnse = [
        'success'   =>true,
        'code'      =>$code,
        'message'   =>$message,
        'data'      =>$result
    ];

    return response()->json($resposnse, $code);
}

function sendErrorResponse($errorMessage, $errorData, $code=404){
    
    $resposnse = [
        'success'   => false,
        'code'      => $code,
        'message'   => $errorMessage,
        'data'      => $errorData
    ];

    return response()->json($resposnse, $code);
}





function uniqueId($limit=null)
{
    return mt_rand(1000000000,9999999999);
}


function appSetting(){
    return Setting::first();
}

function getUser(){
    return Auth::user();
}


