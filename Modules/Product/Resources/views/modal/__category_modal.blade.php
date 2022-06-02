<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
    <div class="modal-dialog modal-lg">

        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" class="ajaxForm needs-validation" id="ajaxForm" novalidate="" data="showCallBackData" accept-charset="UTF-8">
  
            @csrf

            <div class="modal-content">
                
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold justify-content-start d-flex"> Category name <i class="text-danger">*</i></label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="text" id="example-text-input" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold justify-content-start d-flex"> Description</label>
                        <div class="col-xl-9 col-xxl-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold justify-content-start d-flex"> Parent Category</label>
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
                                </optgroup>                                              
                            </select>
                        </div>
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



