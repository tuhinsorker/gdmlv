@extends('layouts.backend')
@push('css')
@endpush

@section('content')

<!--/.Content Header (Page header)-->
<div class="body-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <form action="{{route('roles.update' , $role->id )}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 fw-semi-bold mb-0">{{__("role.Create Role")}}</h6>
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
                                    <label class="role col-md-3 mt-2">Role Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="role_id" value="{{ $role->type }}" class="form-control role-form"  required/>
                                        @if ($errors->has('role_id'))
                                            <div class="error text-danger">{{ $errors->first('role_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @php
                    $m=0;
                @endphp
                @foreach($modules as $key => $module)
                    <div class="card mb-4">
                        <div class="card-header ">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fs-17 fw-semi-bold mb-0">{{$module->name}}</h6>
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
                                <table class="table table-bordered table-sm">
                                    <thead class="role-header">
                                        <tr>
                                            <th>SL.</th>
                                            <th>Menu Name</th>
                                            <th>create(<label for="checkAllcreate{{$m}}>"><input type="checkbox" onclick="checkallcreate({{$m}})" id="checkAllcreate{{$m}}"  name="" > All)</label></th>
                                            <th>read(<input type="checkbox" onclick="checkallread({{$m}})" id="checkAllread{{$m}}"  name="" > all)</th>
                                            <th>update(<input type="checkbox" onclick="checkalledit({{$m}})" id="checkAlledit{{$m}}"  name="" > all)</th>
                                            <th>delete(<input type="checkbox" onclick="checkalldelete({{$m}})" id="checkAlldelete{{$m}}"  name="" > all)</th>
                                        </tr>
                                    </thead>
                                        @php
                                             $sl = 0;
                                        @endphp
                                        @foreach($module->subModules as $sub_key => $sub)
                                    <tbody>
                                        <tr>
                                            <td>{{$sl+1 }}</td>
                                            <td>
                                            {{$sub->name }}
                                                <input type="hidden" name="sub_module_id[{{ $m }}][{{ $sl }}][]"  value="{{ $sub->id }}" id="id_{{ $sub->id }}">
                                            </td>
                                            <td>
                                                <div class="checkbox-success text-center">
                                                    <input type="checkbox" id="create{{ $m.$sl }}" class="create{{ $m }}" value="1" name="create[{{$m}}][{{$sl}}][]" {{ permission($sub->id , $role->id)->create == 1 ? "checked":null }}>
                                                    <label for="create{{ $m }}{{  $sl }}"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox-success text-center">
                                                    <input type="checkbox"  id="read{{ $m.$sl }}" class="read{{ $m }}" value="1" name="read[{{$m}}][{{$sl}}][]" {{ permission($sub->id , $role->id)->read == 1 ? "checked":null }}>
                                                    <label for="read{{  $m }}{{  $sl }}"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox-success text-center">
                                                    <input type="checkbox" id="update{{ $m.$sl }}" class="edit{{ $m }}" value="1" name="update[{{$m}}][{{$sl}}][]"  {{ permission($sub->id , $role->id)->update == 1 ? "checked":null }}>
                                                    <label for="update{{  $m }}{{  $sl }}"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox-success text-center">
                                                    <input type="checkbox" id="delete{{ $m.$sl }}" class="delete{{ $m }}" value="1" name="delete[{{$m}}][{{$sl}}][]" {{ permission($sub->id , $role->id)->delete == 1 ? "checked":null }}>
                                                    <label for="delete{{$m }}{{  $sl }}"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @php  $sl++ @endphp
                                        @endforeach

                                </table>
                            </div>
                        </div>

                    </div>
                      @php $m++ @endphp
                @endforeach
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('vendor/role/assets/js/user-assign-script.js')}}"></script>
@endpush
