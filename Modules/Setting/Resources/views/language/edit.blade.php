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
                            <h6 class="fs-17 fw-semi-bold mb-0">{{ __('Language') }} : {{$lang->title}}</h6>
                        </div>
                        <div class="text-end">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                <a href="{{ route('lang.index') }}" class="btn btn-success btn-sm"><i class="fa fa-list"  ></i>&nbsp{{__('Language List')}}</a>
                                @include('setting::modal.lang_modal')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{ route('lang.update',$lang->slug) }}" method="post">
                            @csrf
                            <table id="example" class="table display table-bordered table-sm  table-hover text-center">
                                    <tr class="role-header">
                                        <th>Phrase</th>
                                        <th>Label</th>
                                    </tr>
                                    @if($results)
                                        @foreach($results as $key => $label)
                                        <tr>
                                            <td><input type="text" name="key[]" value="{{ $key }}" readonly class="form-control"></td>
                                            <td><input type="text" name="label[]" value="{{$label}}" class="form-control"></td>
                                        </tr>
                                        @endforeach
                                    @endif
                            </table>
                            <div>
                                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            </div>
                        </form>
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

