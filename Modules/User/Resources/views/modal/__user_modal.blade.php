

    <div class="modal fade " id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-xl">

            <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data" class="ajaxForm needs-validation" id="ajaxForm" novalidate="" data="showCallBackData" accept-charset="UTF-8">
      
                @csrf

               <input type="hidden" name="_method" value="" id="acmethod">

                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-header py-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-18 fw-bold mb-0">User Info</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-2 row">
                                            <label for="firstname" class="col-sm-4 col-form-label fw-semi-bold text-start">First Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="firstname" id="firstname" required>
                                            </div>
                                        </div>
        
                                        <div class="mb-2 row">
                                            <label for="lastname" class="col-sm-4 col-form-label fw-semi-bold text-start">last Name</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="lastname" id="lastname">
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="lastname" class="col-sm-4 col-form-label fw-semi-bold text-start">Middle Name</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="lastname" id="lastname">
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="gender" class="col-sm-4 col-form-label fw-semi-bold text-start"> Gender <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="mySelect2Modal" name="gender" id="gender">
                                                 <option value="1">Male</option>
                                                 <option value="2">Female</option>
                                               </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-header py-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-18 fw-bold text-start mb-0">User Info</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-2 row">
                                            <label for="phone" class="col-sm-4 col-form-label fw-semi-bold text-start text-start"> Phone <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="phone" id="phone" required>
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="address" class="col-sm-4 col-form-label fw-semi-bold text-start">Address</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" ></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="email" class="col-sm-4 col-form-label fw-semi-bold text-start">Email <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="email" id="email" required>
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="password" class="col-sm-4 col-form-label fw-semi-bold text-start">Password <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="password" name="password" id="password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-header py-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-18 fw-bold mb-0">User Info</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-2 row">
                                            <label for="country_id" class="col-sm-4 col-form-label fw-semi-bold text-start"> Country <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="mySelect2Modal">                                       
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
                                        <div class="mb-2 row">
                                            <label for="state_id" class="col-sm-4 col-form-label fw-semi-bold text-start"> State <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select  class="mySelect2Modal">                                       
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
                                        <div class="mb-2 row">
                                            <label for="lga_id" class="col-sm-4 col-form-label fw-semi-bold text-start"> LGA <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select  class="mySelect2Modal">                                       
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
                                        <div class="mb-2 row">
                                            <label for="education_id" class="col-sm-4 col-form-label fw-semi-bold text-start"> Education <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select  class="mySelect2Modal">                                       
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-header py-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-18 fw-bold text-start mb-0">Bank Info</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-2 row">
                                            <label for="nin" class="col-sm-4 col-form-label fw-semi-bold text-start"> NIN <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="nin" id="nin" required>
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="bvn" class="col-sm-4 col-form-label fw-semi-bold text-start"> BVN <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="bvn" id="bvn" required>
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="bank_name" class="col-sm-4 col-form-label fw-semi-bold text-start"> Bank Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="bank_name" id="bank_name" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="account_name" class="col-sm-4 col-form-label fw-semi-bold text-start"> Account name  <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="account_name" id="account_name" required>
                                            </div>
                                        </div>
        
                                        <div class="mb-3 row">
                                            <label for="account_number" class="col-sm-4 col-form-label fw-semi-bold text-start"> Account No.  <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="account_number" id="account_number" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-header py-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-18 fw-bold text-start mb-0">Guarantors Info</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-2 row">
                                            <label for="guarantors_name" class="col-sm-4 col-form-label fw-semi-bold text-start">Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="guarantors_name" id="guarantors_name" required>
                                            </div>
                                        </div>
        
                                        <div class="mb-2 row">
                                            <label for="guarantors_phone" class="col-sm-4 col-form-label fw-semi-bold text-start"> phone  <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="guarantors_phone" id="guarantors_phone" required>
                                            </div>
                                        </div>
        
                                        <div class="mb-2 row">
                                            <label for="guarantors_email" class="col-sm-4 col-form-label fw-semi-bold text-start"> email  <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="guarantors_email" id="guarantors_email" required>
                                            </div>
                                        </div>
        
                                        <div class="mb-2 row">
                                            <label for="guarantors_id_type" class="col-sm-4 col-form-label fw-semi-bold text-start"> id type  <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="guarantors_id_type" id="guarantors_id_type" required>
                                            </div>
                                        </div>
        
                                        <div class="mb-2 row">
                                            <label for="guarantors_id" class="col-sm-4 col-form-label fw-semi-bold text-start"> id Upload  <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="file" name="guarantors_id" id="guarantors_id" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-header py-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-18 fw-bold text-start mb-0">Other Info</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-2 row">
                                            <label for="lassra" class="col-sm-4 col-form-label fw-semi-bold text-start"> LASSRA <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="lassra" id="lassra" required>
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="team_id" class="col-sm-4 col-form-label fw-semi-bold text-start"> Team <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="mySelect2Modal" name="team_id" id="team_id">
                                                    <option value="2">Team One</option>
                                                </select>
                                            </div>
                                        </div>
        
                                        <div class="mb-2 row">
                                            <label for="team_id" class="col-sm-4 col-form-label fw-semi-bold text-start"> User Type <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="mySelect2Modal" name="user_type" id="user_type">
                                                    <option value="2">User</option>
                                                    <option value="4">Fild Staff</option>
                                                </select>
                                            </div>
                                        </div>
        
                                        <div class="mb-2 row">
                                            <label for="image" class="col-sm-4 col-form-label fw-semi-bold text-start">Image</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="file" name="image">
                                                <input class="form-control" type="hidden" name="image_image" id="image">
                                                <input class="form-control" type="hidden" name="id" id="id">
                                            </div>
                                        </div>
        
                                        <div class="mb-2 row">
                                            <label for="status" class="col-sm-4 col-form-label fw-semi-bold text-start">Status <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <div class="radio">
                                                    <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                                    <label for="radio1">Active</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                                    <label for="radio2">InActive</label>
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
                    </div>

                </div>

            </form>
        </div>
    </div>