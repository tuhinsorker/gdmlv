@extends('layouts.backend')
@push('css')
@endpush

@section('content')
<div class="body-content">
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="fs-17 fw-semi-bold mb-0">Project status</h6>
                </div>
                <div class="text-end">
                    <div class="actions">
                        <a href="#" class="action-item"><i class="ti-reload"></i></a>
                        <div class="dropdown action-item" >
                            <a href="#" class="action-item" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Refresh</a>
                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                <a href="#" class="dropdown-item">Settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush