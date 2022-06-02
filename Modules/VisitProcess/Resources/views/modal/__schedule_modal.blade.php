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
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold justify-content-start d-flex">Field Staff *</label>
                        <div class="col-xl-9 col-xxl-10">
                            <select class="form-control placeholder-single">                                       
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
                                </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold justify-content-start d-flex">Location *</label>
                        <div class="col-xl-9 col-xxl-10">
                            <select class="form-control placeholder-single">                                       
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>           
                                </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold justify-content-start d-flex">Outlet *</label>
                        <div class="col-xl-9 col-xxl-10">
                            <select class="form-control placeholder-single">                                       
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>           
                                </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold justify-content-start d-flex">Schedule Date *</label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold justify-content-start d-flex">Schedule Time *</label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold justify-content-start d-flex">Objectives *</label>
                        <div class="col-xl-9 col-xxl-10">
                            <input type="text" class="form-control" placeholder="Location" id="recipient-name">
                        </div>
                    </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success modal_action actionBtn"> Save schedule</button>
                </div>
            </div>
        </form>
    </div>
</div>
