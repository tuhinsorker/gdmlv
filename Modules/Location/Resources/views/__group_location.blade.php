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
                            <h6 class="fs-17 fw-semi-bold mb-0">Group location setup</h6>
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
                                <div class="mb-2">
                                    <label class="col-form-label text-end fw-semi-bold">State *</label>
                                    <div class="col-12">
                                        <select id="mySelect2Second" class="form-control">                                                        
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

                                <div class="mb-2">
                                    <label class="col-form-label text-end fw-semi-bold">State Name *</label>
                                    <div id="area_id" style="margin-left: 17px; width: 480px;"><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="18">Demsa
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="19">Fufure
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="20">Ganye
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="21">Gayuk
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="22">Gombi
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="23">Grie
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="24">Hong
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="25">Jada
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="26">Lamurde
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="27">Madagali
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="28">Maiha
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="29">Mayo Belwa
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="30">Michika
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="31">Mubi North
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="32">Mubi South
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="33">Numan
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="34">Shelleng
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="35">Song
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="36">Toungo
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="37">Yola North
                                     </label><label class="checkbox-inline" style="margin: 10px; width: 140px;">
                                        <input type="checkbox" name="location_id[]" value="38">Yola South
                                     </label></div>
                                     
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
