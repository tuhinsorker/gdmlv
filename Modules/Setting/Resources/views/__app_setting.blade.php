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

                            <input type="hidden" name="id" value="{{$info->id}}">

                            <div class="row">

                                <div class="card-body col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="col-form-label text-end fw-bold">Title: <span class="text-danger"> *</span></label>
                                            <input type="text" name="title" class="form-control" required="1" value="{{@$info->title}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label text-end fw-bold">Email: <span class="text-danger"> *</span></label>
                                            <input type="text" name="email" class="form-control" required="1" value="{{@$info->email}}">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="col-form-label text-end fw-bold">Copy Right: <span class="text-danger"> *</span></label>
                                            <input type="text" name="copy_right" class="form-control" value="{{@$info->copy_right}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label text-end fw-bold">Time Zone: <span class="text-danger"> *</span></label>
                                            <select name="time_zone" class="form-control" required="1">
                                                <option value="">Select</option>
                                                <?php foreach (timezone_identifiers_list() as $value) { ?>
                                                    <option value="{{$value}}" {{(@$info->time_zone==$value?'selected':null)}}>{{$value}}</option>";
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="col-form-label text-end fw-bold">Footer Text: <span class="text-danger"> *</span></label>
                                            <textarea name="footer_text" class="form-control">{{@$info->footer_text}}</textarea>
                                        </div> 

                                        
                                    </div>
                                </div>

                                <div class="card-body col-md-4">
                                    <div class="row">

                                            {{-- <div class="col-md-12 mt-5">
                                                    <label class="col-form-label text-end fw-bold">Website Logo</label>
                                                    <img src="{{url('public/'.@$info->web_logo)}}" width="200" >
                                                    <input type="file" name="web_logo" class="form-control" accept="image/*" >
                                                    <input type="hidden" name="web_logo_old" value="{{@$info->web_logo}}">
                                                    <span>[gif,jpg,png,jpeg,webp and max size is 1MB]</span>
                                                </div> 
                                            </div>

                                            <div class="col-md-12 mt-5">
                                                <label class="col-form-label text-end fw-bold">Footer Logo</label>
                                                <img src="{{url('public/'.@$info->footer_logo)}}" width="200" >
                                                <input type="file" name="footer_logo" class="form-control" accept="image/*">
                                                <input type="hidden" name="footer_logo_old" value="{{@$info->footer_logo}}" >
                                                <span>[gif,jpg,png,jpeg,webp and max size is 1MB]</span>
                                            
                                            </div> --}}


                                            <div class="col-md-12 ">
                                                    <label class="col-form-label text-end fw-bold">Favicon : </label>
                                                    
                                                    <input type="file" name="favicon" class="form-control" accept="image/*">
                                                    <input type="hidden" name="favicon_old" value="{{@$info->favicon}}">
                                                    <br>
                                                    <img src="{{url('public/'.@$info->favicon)}}" width="32" >
                                                </div> 
                                            </div>

                                            <div class="col-md-12 ">
                                                <label class="col-form-label text-end fw-bold">App Logo :</label>
                                                <input type="file" name="app_logo" class="form-control" accept="image/*">
                                                <input type="hidden" name="app_logo_old" value="{{@$info->app_logo}}">
                                                <br>
                                                <img src="{{url('public/'.@$info->app_logo)}}" width="200" >
                                            </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-footer form-footer ">
                                <button class="btn btn-md btn-success float-right" type="submit">Update</button>
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
