    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-xl">

            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" class="ajaxForm needs-validation" id="ajaxForm" novalidate="" data="showCallBackData" accept-charset="UTF-8">
      
                @csrf

                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label text-end fw-semi-bold justify-content-start d-flex">Client<span class="text-danger ms-2 fw-bold">*</span></label>
                            <div class="col-sm-8">
                                <select id="mySelect2First" class="form-control">                                       
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>                                              
                                </select>
                            </div>
                        </div>

                        
                        <div class="mb-3 row">
                            <label for="type" class="col-sm-3 col-form-label fw-semi-bold">Outlet Type <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                {!! Form::select('type', $types, '', ['class' => 'form-control','required'])!!}
                            </div>
                        </div>

                      
                        <div class="mb-3 row">
                            <label for="channel" class="col-sm-3 col-form-label fw-semi-bold">Outlet Channel <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                {!! Form::select('channel', $channels, '', ['class' => 'form-control','required'])!!}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_name" class="col-sm-3 col-form-label fw-semi-bold">Outlet Name <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="outlet_name" id="outlet_name" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_address" class="col-sm-3 col-form-label fw-semi-bold">Outlet Address <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="outlet_address" id="outlet_address" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="outlet_phone" class="col-sm-3 col-form-label fw-semi-bold">Outlet Phone <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="outlet_phone" id="outlet_phone" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="state_id" class="col-sm-3 col-form-label fw-semi-bold">State <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="state_id" id="state_id" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="location_id" class="col-sm-3 col-form-label fw-semi-bold">Location <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="location_id" id="location_id" required>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="street_no" class="col-sm-3 col-form-label fw-semi-bold">Outlet Street No <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="street_no" id="street_no" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="street_name" class="col-sm-3 col-form-label fw-semi-bold">Outlet Street Name <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="street_name" id="street_name" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gio_long" class="col-sm-3 col-form-label fw-semi-bold">Outlet Longitude <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="gio_long" id="gio_long" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gio_long" class="col-sm-3 col-form-label fw-semi-bold">Outlet Longitude <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="gio_long" id="gio_long" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gio_lat" class="col-sm-3 col-form-label fw-semi-bold">Outlet Latitude <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="gio_lat" id="gio_lat" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gio_long" class="col-sm-3 col-form-label fw-semi-bold">Outlet Longitude <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="gio_long" id="gio_long" required>
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

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success modal_action actionBtn"></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
