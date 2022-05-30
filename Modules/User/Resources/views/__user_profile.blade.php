@extends('layouts.backend')
@push('css')
@endpush

@section('content')
    

<div class="body-content">
    <div class="row">
        <div class="col-sm-12 col-xl-8">
            <div class="media m-1 ">
                <div class="align-left p-1">
                    <a href="#" class="profile-image">
                        <img src="assets/dist/img/avatar-1.jpg" class="avatar avatar-xl rounded-circle img-border height-100" alt="card image">
                    </a>
                </div>
                <div class="media-body ms-3 mt-1">
                    <h3 class="font-large-1 white">Mozammel Hoque
                        <span class="font-medium-1 white">(Project manager)</span>
                    </h3>
                    <p class="white">
                        <i class="fas fa-map-marker-alt"></i> New York, USA </p>
                    <p class="white text-bold-300 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed odio risus. Integer sit amet dolor elit. Suspendisse
                        ac neque in lacus venenatis convallis. Sed eu lacus odio</p>
                    <ul class="list-inline">
                        <li class="list-inline-item pr-1 line-height-1">
                            <a href="#" class="fs-26 ">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item pr-1 line-height-1">
                            <a href="#" class="fs-26 ">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item line-height-1">
                            <a href="#" class="fs-26 ">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="mb-0 fw-semi-bold">Birthday</h6>
                        </div>
                        <div class="col-auto">
                            <time class="fs-13 fw-semi-bold text-muted" datetime="1988-10-24">10/24/88</time>
                        </div>
                    </div> 
                    <hr>
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="mb-0 fw-semi-bold">Joined</h6>
                        </div>
                        <div class="col-auto">
                            <time class="fs-13 fw-semi-bold text-muted" datetime="2018-10-28">10/24/18</time>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="mb-0 fw-semi-bold">Location</h6>
                        </div>
                        <div class="col-auto">
                            <span class="fs-13 fw-semi-bold text-muted">Los Angeles, CA</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="mb-0 fw-semi-bold">Website</h6>
                        </div>
                        <div class="col-auto">
                            <a href="#!" class="fs-13 fw-semi-bold">themes.getbootstrap.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Work Progress</h6>
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
                    <div class="row mb-3">
                        <div class="col-9">
                            <div class="progress-wrapper">
                                <span class="progress-label text-muted">Pendings Tasks</span>
                                <div class="progress mt-1 mb-2" style="height: 5px;">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-end text-end">
                            <span class="h6 mb-0">40%</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-9">
                            <div class="progress-wrapper">
                                <span class="progress-label text-muted">Completed Tasks</span>
                                <div class="progress mt-1 mb-2" style="height: 5px;">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-end text-end">
                            <span class="h6 mb-0">67%</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-9">
                            <div class="progress-wrapper">
                                <span class="progress-label text-muted">Tasks In Progress</span>
                                <div class="progress mt-1 mb-2" style="height: 5px;">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-end text-end">
                            <span class="h6 mb-0">89%</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-9">
                            <div class="progress-wrapper">
                                <span class="progress-label text-muted">All Tasks</span>
                                <div class="progress mt-1 mb-2" style="height: 5px;">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-end text-end">
                            <span class="h6 mb-0">55%</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="progress-wrapper">
                                <span class="progress-label text-muted">Reports</span>
                                <div class="progress mt-1 mb-2" style="height: 5px;">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-end text-end">
                            <span class="h6 mb-0">99%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Edit Profile</h6>
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
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-md-1">
                                <div class="mb-3">
                                    <label class="fw-semi-bold">Company (disabled)</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                                </div>
                            </div>
                            <div class="col-md-3 px-md-1">
                                <div class="mb-3">
                                    <label class="fw-semi-bold">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" value="michael23">
                                </div>
                            </div>
                            <div class="col-md-4 pl-md-1">
                                <div class="mb-3">
                                    <label class="fw-semi-bold">Email address</label>
                                    <input type="email" class="form-control" placeholder="mike@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="mb-3">
                                    <label class="fw-semi-bold">First Name</label>
                                    <input type="text" class="form-control" placeholder="Company" value="Mike">
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-1">
                                <div class="mb-3">
                                    <label class="fw-semi-bold">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="fw-semi-bold">Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-md-1">
                                <div class="mb-3">
                                    <label class="fw-semi-bold">City</label>
                                    <input type="text" class="form-control" placeholder="City" value="Mike">
                                </div>
                            </div>
                            <div class="col-md-4 px-md-1">
                                <div class="mb-3">
                                    <label class="fw-semi-bold">Country</label>
                                    <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                </div>
                            </div>
                            <div class="col-md-4 pl-md-1">
                                <div class="mb-3">
                                    <label class="fw-semi-bold">Postal Code</label>
                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="fw-semi-bold">About Me</label>
                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div><!--/.body content-->

@endsection

@push('js')
@endpush
