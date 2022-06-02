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
                            <h6 class="fs-17 fw-semi-bold mb-0">Exception List</h6>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-plus me-2"></i>Export All</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Fieldstaff</th>
                                    <th>Outlet</th>
                                    <th>Schedule Date</th>
                                    <th>Schedule Time</th>
                                    <th>Location Name</th>
                                    <th>Visited lat</th>
                                    <th>Visited long</th>
                                    <th>Distance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
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
@endpush
