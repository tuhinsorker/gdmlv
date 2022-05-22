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
                        <div class="text-end">
                            <a href="{{url('/outlet')}}"  class="btn btn-success btn-sm mr-1 "><i class="fas fa-list mr-1"></i> List</a>
                        </div>
                    </div>
                </div>

                <form action="{{route('store')}}" method="POST" class="f1" enctype="multipart/form-data">
                    @csrf

                        <div class="card-body">

                            <div class="mb-3 row">
                                <label for="type" class="col-sm-3 col-form-label fw-semi-bold">Outlet Type</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="type" id="type">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="channel" class="col-sm-3 col-form-label fw-semi-bold">Outlet Channel</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="channel" id="channel">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="outlet_name" class="col-sm-3 col-form-label fw-semi-bold">Outlet Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="outlet_name" id="outlet_name">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="outlet_address" class="col-sm-3 col-form-label fw-semi-bold">Outlet Address</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="outlet_address" id="outlet_address">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="outlet_phone" class="col-sm-3 col-form-label fw-semi-bold">Outlet Phone</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="outlet_phone" id="outlet_phone">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="outlet_image" class="col-sm-3 col-form-label fw-semi-bold">Outlet image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" name="outlet_image" id="outlet_image">
                                </div>
                            </div>


                        </div>

                        <div class="mb-3 row">
                            <div class="card-footer form-footer">
                                <button type="submit"  class="btn btn-primary btn-sm ">Save</button>
                            </div>
                        </div>

                </form>

            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
@endpush
