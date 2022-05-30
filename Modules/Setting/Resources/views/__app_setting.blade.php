@extends('layouts.backend')
@push('css')
@endpush

@section('content')
    
<!--/.Content Header (Page header)--> 
<div class="body-content">
    <div class="row">

        <div class="col-md-12 col-lg-12">

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card mb-4">

                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">{{$ptitle}}</h6>
                        </div>
                    </div>
                </div>

                   

                    <div class="card-body">

                        <form action="{{route('appinfo_update')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">Title</label></div>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" required="1" value="{{@$info->title}}">
                                </div>
                            </div> 

                            <input type="hidden" name="id" value="{{@$info->id}}">

                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">Website Logo</label></div>
                                <div class="col-sm-9">
                                    <input type="file" name="web_logo" class="form-control" accept="image/*" >
                                    <input type="hidden" name="web_logo_old" value="{{@$info->web_logo}}">
                                    <span>[gif,jpg,png,jpeg,webp and max size is 1MB]</span>
                                </div> 
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">Preview</label></div>
                                <div class="col-sm-9">
                                    <img src="{{url('images/'.@$info->web_logo)}}" width="200" >
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">Footer Logo</label></div>
                                <div class="col-sm-9">
                                    <input type="file" name="footer_logo" class="form-control" accept="image/*">
                                    <input type="hidden" name="footer_logo_old" value="{{@$info->footer_logo}}" >
                                    <span>[gif,jpg,png,jpeg,webp and max size is 1MB]</span>
                                </div>              
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">Preview</label></div>
                                <div class="col-sm-9">
                                    <img src="{{url('images/'.@$info->footer_logo)}}" width="200" >
                                </div>
                            </div>
                            
                           
                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">Favicon</label></div>
                                <div class="col-sm-9">
                                    <input type="file" name="favicon" class="form-control" accept="image/*">
                                    <input type="hidden" name="favicon_old" value="{{@$info->favicon}}" >
                                    <span>[gif,jpg,png,jpeg,webp and max size is 1MB]</span>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">Preview</label></div>
                                <div class="col-sm-9">
                                    <img src="{{url('images/'.@$info->favicon)}}" width="200" >
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">App Logo</label></div>
                                <div class="col-sm-9">
                                    <input type="file" name="app_logo" class="form-control" accept="image/*">
                                    <input type="hidden" name="app_logo_old" value="{{@$info->app_logo}}" >
                                    <span>[gif,jpg,png,jpeg,webp and max size is 1MB]</span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">Preview</label></div>
                                <div class="col-sm-9">
                                    <img src="{{url('images/'.@$info->app_logo)}}" width="200" >
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">Footer Text</label></div>
                                <div class="col-sm-9">
                                    <textarea name="footer_text" class="form-control">{{@$info->footer_text}}</textarea>
                                </div>
                            </div> 


                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">Copy Right</label></div>
                                <div class="col-sm-9">
                                    <textarea name="copy_right" class="form-control">{{@$info->copy_right}}</textarea>
                                </div>
                            </div> 

                            <div class="mb-3 row">
                                <div class="col-sm-3"><label class="font-weight-600">Time Zone</label></div>
                                <div class="col-sm-9">
                                    <select name="time_zone" class="form-control" required="1">
                                        <option value="">Select</option>
                                        <?php foreach (timezone_identifiers_list() as $value) { ?>
                                            <option value="{{$value}}" {{(@$info->time_zone==$value?'selected':null)}}>{{$value}}</option>";
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <button class="btn btn-md btn-success"  type="submit" >Update</button>
                                </div>
                            </div> 
                                              
                        </form>
                        
                    </div>



            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
@endpush
