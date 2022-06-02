@extends('layouts.backend')
@push('css')
@endpush

@section('content')


<div class="body-content">
    <div class="row">
        <div class="col-12">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header d-flex justify-content-end mb-3" id="flush-headingOne">
                        <button type="button" class="fs-17 filter-bt" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"><img  class="me-2 h-24" src="assets/dist/img/icons8-filter-30.png" alt="">Filter</button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse bg-white px-3" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Location</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>          
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Outlet Type</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                        </optgroup>                                              
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Channel Name</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>           
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Fieldstaff</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                        </optgroup>                                              
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Client</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                        </optgroup>                                              
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Events</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                        </optgroup>                                              
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Product</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                        </optgroup>                                              
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Custom Date</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                        </optgroup>                                              
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Custom Search</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                        </optgroup>                                              
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3 d-flex align-items-end">
                                <button class="btn btn-primary me-2">Go</button>
                                <button class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats statistic-box mb-4">
                <div class="card-header card-header-warning card-header-icon position-relative border-0 text-end px-3 py-0">
                    <div class="card-icon d-flex align-items-center justify-content-center">
                        <i class="typcn typcn-user-outline"></i>
                    </div>
                    <p class="fs-15 fw-bold mt-3">User</p>
                    <h3 class="card-title fs-18 fw-bold">2352</h3>
                </div>
                <div class="card-footer p-3">
                    <div class="stats">
                        <a href="user-list.html" class="warning-link">Total User</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats statistic-box mb-4">
                <div class="card-header card-header-success card-header-icon position-relative border-0 text-end px-3 py-0">
                    <div class="card-icon d-flex align-items-center justify-content-center">
                        <i class="typcn typcn-home-outline"></i>
                    </div>
                    <p class="fs-15 fw-bold mt-3">Fieldstaff</p>
                    <h3 class="card-title fs-21 fw-bold">455</h3>
                </div>
                <div class="card-footer p-3">
                    <div class="stats">
                        <a href="fieldstaff.html" class="warning-link">Total fieldstaff</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats statistic-box mb-4">
                <div class="card-header card-header-danger card-header-icon position-relative border-0 text-end px-3 py-0">
                    <div class="card-icon d-flex align-items-center justify-content-center">
                        <i class="typcn typcn-group-outline"></i>
                    </div>
                    <p class="fs-15 fw-bold mt-3">Client</p>
                    <h3 class="card-title fs-21 fw-bold">5</h3>
                </div>
                <div class="card-footer p-3">
                    <div class="stats">
                        <a href="client-list.html" class="warning-link">Total client</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats statistic-box mb-4">
                <div class="card-header card-header-info card-header-icon position-relative border-0 text-end px-3 py-0">
                    <div class="card-icon d-flex align-items-center justify-content-center">
                        <i class="fab fa-product-hunt"></i>
                    </div>
                    <p class="fs-15 fw-bold mt-3">Product</p>
                    <h3 class="card-title fs-21 fw-bold">5</h3>
                </div>
                <div class="card-footer p-3">
                    <div class="stats">
                        <a href="product-list.html" class="warning-link">Total Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-8 d-flex">
            <div class="card mb-4 flex-fill w-100">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Product Share By Company</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chartdiv" style="width: 100%;
                    height: 400px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex">
            <div class="card mb-4 flex-fill w-100">
                <div class="card-body">
                    <div class="col-12">
                        <div class="card gradient-7 card-stats statistic-box mb-4">
                            <div class="card-header-danger card-header-icon position-relative border-0 text-end px-3 py-0">
                                <div class="align-items-center justify-content-between d-flex mt-3">
                                    <div class="text-start text-white">
                                        <h3 class="card-title fs-23 fw-bold">1</h3>
                                        <p class="fs-17 fw-bold mt-3">POSMs</p>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <i class="d-block rounded-circle fas fa-list-alt fa-4x opacity-75 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                                <div class="stats">
                                    <a href="add-pos-item.html" class="warning-link text-white">Total POSMs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card gradient-8 card-stats statistic-box mb-4">
                            <div class="card-header-danger card-header-icon position-relative border-0 text-end px-3 py-0">
                                <div class="align-items-center justify-content-between d-flex mt-3">
                                    <div class="text-start text-white">
                                        <h3 class="card-title fs-23 fw-bold">3</h3>
                                        <p class="fs-17 fw-bold mt-3">Outlet</p>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <i class="d-block rounded-circle fas fa-list-alt fa-4x opacity-75 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                                <div class="stats">
                                    <a href="outlate-list.html" class="warning-link text-white">Total Outlate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card gradient-9 card-stats statistic-box mb-4">
                            <div class="card-header-danger card-header-icon position-relative border-0 text-end px-3 py-0">
                                <div class="align-items-center justify-content-between d-flex mt-3">
                                    <div class="text-start text-white">
                                        <h3 class="card-title fs-23 fw-bold"><span>48</span>/ <span>66</span></h3>
                                        <p class="fs-17 fw-bold mt-3">Case / Unit</p>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <i class="d-block rounded-circle fas fa-list-alt fa-4x opacity-75 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                                <div class="stats">
                                    <a href="product-inventory.html" class="warning-link text-white">Total Stock</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12 col-lg-4">
            <div class="crad">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="card card-stats statistic-box mb-4">
                            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-end px-3 py-0">
                                <div class="card-icon d-flex align-items-center justify-content-center">
                                    <i class="typcn typcn-calendar"></i>
                                </div>
                                <p class="fs-15 fw-bold mt-3">Schedule</p>
                                <h3 class="card-title fs-21 fw-bold">5</h3>
                            </div>
                            <div class="card-footer p-3">
                                <div class="stats">
                                    <a href="schedule-list.html" class="warning-link">Total Schedule</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="card card-stats statistic-box mb-4">
                            <div class="card-header card-header-success card-header-icon position-relative border-0 text-end px-3 py-0">
                                <div class="card-icon d-flex align-items-center justify-content-center">
                                    <i class="typcn typcn-eye"></i>
                                </div>
                                <p class="fs-15 fw-bold mt-3">Actual Visit</p>
                                <h3 class="card-title fs-21 fw-bold">5</h3>
                            </div>
                            <div class="card-footer p-3">
                                <div class="stats">
                                    <a href="schedule-list.html" class="warning-link">Actual Visit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3 d-flex align-items-end">
                    <a href="schedule-list.html" class="btn btn-success">Details</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="crad">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="card card-stats statistic-box mb-4">
                            <div class="card-header card-header-info card-header-icon position-relative border-0 text-end px-3 py-0">
                                <div class="card-icon d-flex align-items-center justify-content-center">
                                    <i class="fab fa-product-hunt"></i>
                                </div>
                                <p class="fs-15 fw-bold mt-3">Payment Receive</p>
                                <h3 class="card-title fs-21 fw-bold">5</h3>
                            </div>
                            <div class="card-footer p-3">
                                <div class="stats">
                                    <a href="payments.html" class="warning-link">Payment Receive</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="card card-stats statistic-box mb-4">
                            <div class="card-header card-header-info card-header-icon position-relative border-0 text-end px-3 py-0">
                                <div class="card-icon d-flex align-items-center justify-content-center">
                                    <i class="fab fa-product-hunt"></i>
                                </div>
                                <p class="fs-15 fw-bold mt-3">Receivable/ Total Billing</p>
                                <h3 class="card-title fs-21 fw-bold">5</h3>
                            </div>
                            <div class="card-footer p-3">
                                <div class="stats">
                                    <a href="payments.html" class="warning-link">Receivable/ Total Billing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3 d-flex align-items-end">
                    <a href="payments.html" class="btn btn-success">Details</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="crad">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="card card-stats statistic-box mb-4">
                            <div class="card-header card-header-warning card-header-icon position-relative border-0 text-end px-3 py-0">
                                <div class="card-icon d-flex align-items-center justify-content-center">
                                    <i class="typcn typcn-point-of-interest-outline"></i>
                                </div>
                                <p class="fs-15 fw-bold mt-3">Order</p>
                                <h3 class="card-title fs-21 fw-bold">5</h3>
                            </div>
                            <div class="card-footer p-3">
                                <div class="stats">
                                    <a href="order.html" class="warning-link">Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="card card-stats statistic-box mb-4">
                            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-end px-3 py-0">
                                <div class="card-icon d-flex align-items-center justify-content-center">
                                    <i class="typcn typcn-eject-outline"></i>
                                </div>
                                <p class="fs-15 fw-bold mt-3">Actual Sales VS Target Sales</p>
                                <h3 class="card-title fs-21 fw-bold">5/0</h3>
                            </div>
                            <div class="card-footer p-3">
                                <div class="stats">
                                    <a href="sales-dashboard.html" class="warning-link">Actual Sales VS Target Sales</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-6 col-lg-4">
            <div class="card gradient-4 card-stats statistic-box mb-4">
                <div class="card-header-danger card-header-icon position-relative border-0 text-end px-3 py-0">
                    <div class="align-items-center justify-content-between d-flex mt-3">
                        <div class="text-start text-white">
                            <p class="fs-17 fw-bold mt-3">Upcomming Event</p>
                            <h3 class="card-title fs-23 fw-bold">1</h3>
                        </div>
                        <div class="d-flex justify-content-end">
                            <i class="d-block rounded-circle fas fa-list-alt fa-4x opacity-75 text-white"></i>
                        </div>

                    </div>
                </div>
                <div class="card-footer p-3">
                    <div class="stats">
                        <a href="manage-events.html" class="warning-link text-white">More Event</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card gradient-5 card-stats statistic-box mb-4">
                <div class="card-header-danger card-header-icon position-relative border-0 text-end px-3 py-0">
                    <div class="align-items-center justify-content-between d-flex mt-3">
                        <div class="text-start text-white">
                            <p class="fs-17 fw-bold mt-3">Participants For Event</p>
                            <h3 class="card-title fs-23 fw-bold">1</h3>
                        </div>
                        <div class="d-flex justify-content-end">
                            <i class="d-block rounded-circle fas fa-list-alt fa-4x opacity-75 text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-3">
                    <div class="stats">
                        <a href="participants.html" class="warning-link text-white">More Participants</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card gradient-6 card-stats statistic-box mb-4">
                <div class="card-header-danger card-header-icon position-relative border-0 text-end px-3 py-0">
                    <div class="align-items-center justify-content-between d-flex mt-3">
                        <div class="text-start text-white">
                            <p class="fs-17 fw-bold mt-3">Events</p>
                            <h3 class="card-title fs-23 fw-bold">1</h3>
                        </div>
                        <div class="d-flex justify-content-end">
                            <i class="d-block rounded-circle fas fa-list-alt fa-4x opacity-75 text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-3">
                    <div class="stats">
                        <a href="manage-events.html" class="warning-link text-white">Total Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-6 d-flex">
            <div class="card mb-4 flex-fill w-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="d-flex gradient-11 position-relative overflow-hidden flex-column p-3 mb-3 bg-white shadow-sm rounded">
                                <i class="fas fa fa-smile opacity-25 fa-5x text-warning decorative-icon"></i>
                                <div class="align-items-center justify-content-between d-flex mt-3">
                                    <div class="text-start">
                                        <h3 class="card-title fs-23 fw-bold">4</h3>
                                        <p class="fs-17 fw-bold mt-3"> No of active survey</p>
                                    </div>
                                </div>
                                <div class="p-2 border-top border-dark">
                                    <a class="text-black fs-15" href="survey-preview.html">No of active survey</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex gradient-12 position-relative overflow-hidden flex-column p-3 mb-3 bg-white shadow-sm rounded">
                                <i class="fas fa fa-smile opacity-25 fa-5x text-warning decorative-icon"></i>
                                <div class="align-items-center justify-content-between d-flex mt-3">
                                    <div class="text-start">
                                        <h3 class="card-title fs-23 fw-bold">0</h3>
                                        <p class="fs-17 fw-bold mt-3">Total participants</p>
                                    </div>
                                </div>
                                <div class="p-2 border-top border-dark">
                                    <a class="text-black fs-15" href="survey-preview.html">Total participants</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex gradient-10 position-relative overflow-hidden flex-column p-3 mb-3 bg-white shadow-sm rounded">
                                <i class="fas fa fa-smile opacity-25 fa-5x text-warning decorative-icon"></i>
                                <div class="align-items-center justify-content-between d-flex mt-3">
                                    <div class="text-start">
                                        <h3 class="card-title fs-23 fw-bold">2</h3>
                                        <p class="fs-17 fw-bold mt-3">Total outlet map to fieldstaff</p>
                                    </div>
                                </div>
                                <div class="p-2 border-top border-dark">
                                    <a class="text-black fs-15" href="outlet-map-to-fieldstaff.html">Total outlet map to fieldstaff</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex gradient-13 position-relative overflow-hidden flex-column p-3 mb-3 bg-white shadow-sm rounded">
                                <i class="fas fa fa-smile opacity-25 fa-5x text-warning decorative-icon"></i>
                                <div class="align-items-center justify-content-between d-flex mt-3">
                                    <div class="text-start">
                                        <h3 class="card-title fs-23 fw-bold">2</h3>
                                        <p class="fs-17 fw-bold mt-3">Total outlet map to client</p>
                                    </div>
                                </div>
                                <div class="p-2 border-top border-dark">
                                    <a class="text-black fs-15" href="outlate-list.html">Total outlet map to client</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex">
            <div class="card mb-4 flex-fill w-100">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Active Survey List</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Survey Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nixon</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{url('public/assets/plugins/amcharts5/index.js')}}"></script>
<script src="{{url('public/assets/plugins/amcharts5/percent.js')}}"></script>
<script src="{{url('public/assets/plugins/amcharts5/themes/Animated.js')}}"></script>
<script src="{{url('public/assets/plugins/amcharts5/xy.js')}}"></script>

<script>
    am5.ready(function() {
        var root = am5.Root.new("chartdiv");

        root.setThemes([
            am5themes_Animated.new(root)
        ]);

        var chart = root.container.children.push(am5percent.PieChart.new(root, {
            layout: root.verticalLayout
        }));

        var series = chart.series.push(am5percent.PieSeries.new(root, {
            valueField: "value",
            categoryField: "category"
        }));

        series.data.setAll([{
            value: 10,
            category: "One"
        }, {
            value: 9,
            category: "Two"
        }, {
            value: 6,
            category: "Three"
        }, {
            value: 5,
            category: "Four"
        }, {
            value: 4,
            category: "Five"
        }, {
            value: 3,
            category: "Six"
        }, {
            value: 1,
            category: "Seven"
        }, ]);

        var legend = chart.children.push(am5.Legend.new(root, {
            centerX: am5.percent(50),
            x: am5.percent(50),
            marginTop: 15,
            marginBottom: 15
        }));

        legend.data.setAll(series.dataItems);

        series.appear(1000, 100);

    });
</script>


@endsection

@push('js')
@endpush