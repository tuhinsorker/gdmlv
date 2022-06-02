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
                            <h6 class="fs-17 fw-semi-bold mb-0">Team List</h6>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="glyphicon glyphicon-plus me-2"></i>Add</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table display table-bordered table-striped table-hover basic">

                            <thead>
                                <tr>
                                    <th>Area Name</th>
                                    <th>State Name</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Aba North, Aba South,</td>
                                    <td>
                                        <a href="#" class="btn btn-success-soft btn-sm me-1"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Area</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-2">
                                    <label class="col-form-label text-end fw-semi-bold">Area Name *</label>
                                    <div class="col-12">
                                        <input class="form-control" type="text" placeholder="Client Name" id="example-text-input">
                                    </div>
                                </div>
                                

                                <div class="mb-2 row justify-content-end me-1">
                                    <button type="button" class="btn btn-danger w-auto me-2">Reset</button>
                                    <button type="button" class="btn btn-success w-auto">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
@endpush
