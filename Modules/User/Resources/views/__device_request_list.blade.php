@extends('layouts.backend')
@push('css')
@endpush

@section('content')
    <!--/.Content Header (Page header)--> 
    <div class="body-content">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 fw-semi-bold mb-0">Device Request</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered dt-responsive nowrap bootstrap4-styling">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>User Name</th>
                                    <th>Email Address</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Tiger</td>
                                    <td>Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <a href="#" class="btn btn-success-soft btn-sm me-1"><i class="far fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.body content-->

    



    @endsection

    @push('js')
    @endpush
