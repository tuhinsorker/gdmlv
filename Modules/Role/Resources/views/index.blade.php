@extends('layouts.backend')
@push('css')
@endpush
@section('content')

<!--/.Content Header (Page header)-->
<div class="body-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">{{__("Role List")}}</h6>
                        </div>
                        <div class="text-end">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                <a href="{{route('roles.create')}}" class="btn btn-success btn-sm"><i class="fa fa-user-plus"></i>&nbsp{{__('role.Add Role')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="30%">Sl.</th>
                                    <th width="55%">Title</th>
                                    <th width="15%">Action</th>
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
                            <tfoot>
                                <tr >
                                    <th width="30%">Sl.</th>
                                    <th width="55%">Title</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </tfoot>
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
