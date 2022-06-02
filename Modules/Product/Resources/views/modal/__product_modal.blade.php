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
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">Product Name </label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="text" placeholder="Product Name" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold">Description </label>
                        <div class="col-xl-9 col-xxl-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">Brand </label>
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
                                </optgroup>                                              
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">Short Code</label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="text" placeholder="Short Code" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold "> Product Image</label>
                        <div class="col-xl-9 col-xxl-10">
                            <img src="assets/dist/img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold "> image</label>
                        <div class="col-xl-9 col-xxl-10">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">Recommended Retail Price </label>
                        <div class="col-xl-9 col-xxl-10">
                            <input type="number" class="form-control" placeholder="Recommended Retail Price" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">Unit Per Case *</label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="number" placeholder="Unit Per Case" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">Case Discount</label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="number" placeholder="Case Discount" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">Unit Price </label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="number" placeholder="Unit Price *" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">Unit Per Case </label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="number" placeholder="Unit Per Case" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">Client *</label>
                        <div class="col-xl-9 col-xxl-10">
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
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">Comparison Product</label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="text" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">OOS QTY</label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="text" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-3 col-xxl-2 col-form-label text-end fw-semi-bold ">MST QTY</label>
                        <div class="col-xl-9 col-xxl-10">
                            <input class="form-control" type="text" id="example-text-input">
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



