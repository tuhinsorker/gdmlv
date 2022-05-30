@extends('layouts.backend')
@push('css')
@endpush

@section('content')
     <!--/.Content Header (Page header)--> 
     <div class="body-content">
        <div class="row">

            <div class="col-lg-12">

                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 fw-semi-bold mb-0">User List</h6>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="glyphicon glyphicon-plus me-2"></i>Add User</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered dt-responsive nowrap bootstrap4-styling">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Logo</th>
                                    <th>Client Name</th>
                                    <th>Address</th>
                                    <th>Contact No</th>
                                    <th>Email Address</th>
                                    <th>Status</th>
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
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>5421</td>
                                    <td>5421</td>
                                </tr>
                                <tr>
                                    <td>Garrett</td>
                                    <td>Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                    <td>8422</td>
                                    <td>5421</td>
                                </tr>
                                <tr>
                                    <td>Ashton</td>
                                    <td>Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                    <td>1562</td>
                                    <td>5421</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 fw-semi-bold mb-0">{{$ptitle}}</h6>
                            </div>
                            <div class="text-end">
                                <a href="javascript:void(0)"  class="btn btn-success btn-sm mr-1 addShowModal"><i class="fas fa-plus mr-1"></i>Add New</a>
                            </div>
                        </div>
                    </div>
                   

                    <div class="card-body">
                       
                        <div class="table-responsive">
                            <table id="outletList" class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Outlet Name</th>
                                        <th>Type name</th>
                                        <th>Channel Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($outlets as $key => $outlet)
                                    <tr>
                                        <td>
                                            <div>
                                                <img src="{{url('/images/'.$outlet->outlet_image)}}" class="rounded-circle" width="50" alt="...">
                                            </div>
                                        </td>
                                        <td>{{$outlet->outlet_name}}</td>
                                        <td>{{$outlet->type_name}}</td>
                                        <td>{{$outlet->channel_name}}</td>
                                        <td>{{$outlet->outlet_phone}}</td>
                                        <td>{{$outlet->outlet_address}}</td>

                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-success-soft btn-sm me-1" id="editAction" data-route="{{ route('outlet_edit',$outlet->id) }}"  ><i class="far fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger-soft btn-sm" id="deleteAction" data-route="{{ route('delete_outlet',$outlet->id) }}"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div><!--/.body content-->

    @include('modal.__outlet_modal')




    @endsection
    @push('js')
    <script src="{{ asset('Modules/Outlet/public/assets/js/outlet.js') }}"></script>
    @endpush
