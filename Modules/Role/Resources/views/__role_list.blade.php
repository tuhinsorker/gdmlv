@extends('layouts.backend')
@push('css')
@endpush
@section('content')


<!--/.Content Header (Page header)-->
<div class="body-content">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Role List</h6>
                        </div>
                        <div class="text-end">
                            <a  href="{{url('roles/create')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus me-2"></i>Add Role</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Role Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($roles as $key => $role)
                                <tr>
                                    <td>#{{ $key + 1 }}</td>
                                    <td>{{ $role->type }}</td>
                                    <td>
                                        <a title="Edit" href="{{ route('roles.edit',$role->id) }}"   class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a title="Delete" href="javascript:void(0)"  class="btn btn-danger btn-sm delete-confirm m-1" data-route="{{ route('roles.destroy',$role->id) }}" data-csrf="{{csrf_token()}}"><i class="fa fa-trash"></i></a>
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
</div>
@endsection
@push('js')
<script src="{{ asset('vendor/user/assets/sweetalert-script.js') }}"></script>
@endpush
