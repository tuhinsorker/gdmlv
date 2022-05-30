@extends('layouts.backend')
@push('css')
@endpush

@section('content')

<!--/.Content Header (Page header)-->
<div class="body-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <form action="{{route('user.assign.role.store')}}" method="POST">
                @csrf
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 fw-semi-bold mb-0">{{__("role.Assign Role To User")}}</h6>
                            </div>
                            <div class="text-end">
                                <div class="actions">
                                    <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                    <a href="{{route('roles.index')}}" class="btn btn-success btn-sm"><i class="fa fa-list"></i>&nbsp{{__('role.Role List')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="card-body">
                            <div class="col-md-4 offset-md-4">
                                <div class="row">
                                    <label class="role col-md-3 mt-2">User<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                       <select name="user_id" id="user_id" class="form-control {{ $errors->first('user_id') ? 'is-invalid' : '' }} form-control-sm basic-single" >
                                            <option value="">Select User</option>
                                            @foreach($users as $key => $user)
                                            <option value="{{  $user->id }}">{{ $user->first_name }}&nbsp;{{ $user->last_name }}</option>
                                            @endforeach
                                       </select>
                                       @if ($errors->has('user_id'))
                                            <div class="error text-danger">{{ $errors->first('user_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 offset-md-4 mt-5">
                                <div class="row">
                                    <label class="role col-md-3 mt-2">Role<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                       <select name="role_id" class="form-control {{ $errors->first('role_id') ? 'is-invalid' : '' }}  form-control-sm basic-single">
                                            <option value="">Select Role</option>
                                            @foreach($roles as $key => $role)
                                            <option value="{{  $role->id }}">{{ $role->type }}</option>
                                            @endforeach
                                       </select>
                                       @if ($errors->has('user_id'))
                                       <div class="error text-danger">{{ $errors->first('role_id') }}</div>
                                       @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
         <input type="hidden" id="get_user_role" value="{{route('get-user-role')}}">
        <div class="col-md-12 col-lg-12 d-none existing-card">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 fw-semi-bold mb-0">{{__("role.Existing Role")}}</h6>
                            </div>
                            <div class="text-end">
                                <div class="actions">
                                    <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="card-body">
                            <table class="table table-bordered table-sm text-center">
                               <thead class="thead">
                                    <tr>
                                        <th width="20%">SL.</th>
                                        <th width="40%">User Name</th>
                                        <th width="40%">Role Name</th>
                                    </tr>
                               </thead>
                               <tbody id="addRow" class="addRow">

                               </tbody>
                            </table>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>

                </div>
        </div>

    </div>
</div>
@endsection
@push('js')
      <script src="{{ asset('vendor/role/assets/js/user-assign-script.js')}}"></script>
@endpush
