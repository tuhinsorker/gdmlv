<?php
use Illuminate\Support\Facades\App;
use Modules\Setting\Entities\Setting;
use Illuminate\Support\Facades\Auth;


function appSetting(){
    return Setting::first();
}

function getUser(){
    return Auth::user();
}


