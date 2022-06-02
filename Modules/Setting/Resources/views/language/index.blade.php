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
                            <h6 class="fs-17 fw-semi-bold mb-0">{{ __('Language List') }}</h6>
                        </div>
                        <div class="text-end">
                            <div class="actions">
                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#langModal">&nbsp{{__('Add Language')}}</button>
                                @include('setting::modal.lang_modal')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table display table-bordered table-sm table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th width="10%">Sl.</th>
                                    <th width="60%">Title</th>
                                    <th width="20%">Status</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($languages as $key => $lang)
                                <tr>
                                    <td>#{{ $key + 1 }}</td>
                                    <td>{{ $lang->title }}</td>
                                    <td>
                                        @if($lang->status == 1)
                                           <button class="btn btn-success btn-sm">Active</button>
                                        @else()
                                           <button class="btn btn-danger btn-sm">Inactive</button>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a title="Edit" href="{{ route('lang.edit',$lang->slug) }}" class="btn btn-primary btn-sm m-1" ><i class="fa fa-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th width="10%">Sl.</th>
                                    <th width="60%">Title</th>
                                    <th width="20%">Status</th>
                                    <th width="10%">Action</th>
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

