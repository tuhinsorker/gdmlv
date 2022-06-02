<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Outlet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" class="ajaxForm needs-validation" id="ajaxForm" novalidate="" data="showCallBackData" accept-charset="UTF-8">

            @csrf

                <div class="modal-body">

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header py-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="fs-18 fw-bold mb-0">Outlate Info</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    <div class="mb-3 row">
                                        <label for="type" class="col-sm-3 col-form-label fw-semi-bold">Outlet Type <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            {!! Form::select('type', $types, '', ['class' => 'mySelect2Modal','required'])!!}
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="channel" class="col-sm-3 col-form-label fw-semi-bold">Outlet Channel <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            {!! Form::select('channel', $channels, '', ['class' => 'mySelect2Modal','required'])!!}
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="outlet_name" class="col-sm-3 col-form-label fw-semi-bold">Outlet Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="outlet_name" id="outlet_name" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="outlet_phone" class="col-sm-3 col-form-label fw-semi-bold">Outlet Phone <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="outlet_phone" id="outlet_phone" required>
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <label for="outlet_image" class="col-sm-3 col-form-label fw-semi-bold">Outlet image</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="file" name="outlet_image" id="outlet_image">
                                            <input class="form-control" type="hidden" name="old_image" id="old_image">
                                            <input class="form-control" type="hidden" name="id" id="id">
                                        </div>
                                    </div>
                
                                    <div class="mb-3 row">
                                        <label for="gio_long" class="col-sm-3 col-form-label fw-semi-bold"> </label>
                                        <div class="col-sm-8">
                                            <div class="checkbox">
                                                <input type="checkbox" name="isbso" id="isbso" value="option1" checked="">
                                                <label for="isbso">Is BSO</label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header py-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="fs-18 fw-bold text-start mb-0">Outlate Address</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="mb-3 row">
                                        <label for="region" class="col-sm-3 col-form-label fw-semi-bold">Region <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            {!! Form::select('region', $types, '', ['class' => 'mySelect2Modal','required'])!!}
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="location" class="col-sm-3 col-form-label fw-semi-bold">Location <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            {!! Form::select('location', $channels, '', ['class' => 'mySelect2Modal','required'])!!}
                                        </div>
                                    </div>

                
                                    <div class="mb-3 row">
                                        <label for="street_no" class="col-sm-3 col-form-label fw-semi-bold"> Street No <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="street_no" id="street_no" required>
                                        </div>
                                    </div>
                
                                    <div class="mb-3 row">
                                        <label for="street_name" class="col-sm-3 col-form-label fw-semi-bold"> Street Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="street_name" id="street_name" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="gio_lat" class="col-sm-3 col-form-label fw-semi-bold"> Latitude <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="gio_lat" id="gio_lat" required>
                                        </div>
                                    </div>
                
                                    <div class="mb-3 row">
                                        <label for="gio_long" class="col-sm-3 col-form-label fw-semi-bold"> Longitude <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="gio_long" id="gio_long" required>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header py-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="fs-18 fw-bold mb-0">Contact person Info</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="mb-3 row">
                                        <label for="outlet_cpf" class="col-sm-3 col-form-label fw-semi-bold">Outlet CPF  <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="outlet_cpf" id="outlet_cpf" required>
                                        </div>
                                    </div>
                
                                    <div class="mb-3 row">
                                        <label for="outlet_cpl" class="col-sm-3 col-form-label fw-semi-bold">Outlet CPL <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="outlet_cpl" id="outlet_cpl" required>
                                        </div>
                                    </div>
                
                                    <div class="mb-3 row">
                                        <label for="outlet_cpp" class="col-sm-3 col-form-label fw-semi-bold">Outlet contact person phone <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="outlet_cpp" id="outlet_cpp" required>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                      
                    </div>

                   
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success modal_action actionBtn"></button>
                </div>
            </form>
        </div>
        
    </div>
</div>
