@extends('layouts.backend')
@push('css')
@endpush

@section('content')

<div class="body-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Create New Role</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <form action="{{route('roles.store')}}" method="POST">
                        @csrf

                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold justify-content-start d-flex"> Role Name<span class="text-danger ms-1 fw-bold">*</span></label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="text" name="role_name" id="role_name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold justify-content-start d-flex"> Description<span class="text-danger ms-1 fw-bold">*</span></label>
                        <div class="col-xl-9 col-xxl-10">
                            <textarea class="form-control" id="description" name="discription" rows="3"></textarea>
                        </div>
                    </div>
                    

                @php
                    $m=0;
                @endphp
                
                @foreach($modules as $key => $module)
                    <h3>{{$module->name}}</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
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
                                    <th scope="row">{{$sl+1 }}</th>
                                    <td>
                                        {{$sub->name }}
                                            <input type="hidden" name="sub_module_id[{{ $m }}][{{ $sl }}][]"  value="{{ $sub->id }}" id="id_{{ $sub->id }}">
                                    </td>
                                    <td>
                                        <div class="checkbox-success text-center">
                                            <input type="checkbox" id="create{{ $m.$sl }}" class="create{{ $m }}" value="1" name="create[{{$m}}][{{$sl}}][]" >
                                            <label for="create{{ $m }}{{  $sl }}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-success text-center">
                                            <input type="checkbox"  id="read{{ $m.$sl }}" class="read{{ $m }}" value="1" name="read[{{$m}}][{{$sl}}][]" >
                                            <label for="read{{  $m }}{{  $sl }}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-success text-center">
                                            <input type="checkbox" id="update{{ $m.$sl }}" class="edit{{ $m }}" value="1" name="update[{{$m}}][{{$sl}}][]" >
                                            <label for="update{{  $m }}{{  $sl }}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-success text-center">
                                            <input type="checkbox" id="delete{{ $m.$sl }}" class="delete{{ $m }}" value="1" name="delete[{{$m}}][{{$sl}}][]" >
                                            <label for="delete{{$m }}{{  $sl }}"></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @php  $sl++ @endphp
                            @endforeach


                        </table>
                    </div>

                    @php $m++ @endphp
                    @endforeach

                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                    

                    
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
@push('js')
<script src="{{ asset('Modules/Role/Assets/js/user-assign-script.js')}}"></script>
@endpush
