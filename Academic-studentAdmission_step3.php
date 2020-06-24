<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Admission | </b><small>Add Parent / Guardian</small></h6>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-student.php">Students</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Students Admission</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row form-group my-5">
            <label class="col-md-2">Student Admission No :</label>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
        </div>
        <hr>
        <div class="row">
            <h5>Parent-Personal Details</h5>
        </div>
        <hr>
        <form>
            <div class="row form-group mt-2">
                <label class="col-md-2">First Name<h6 class="text-danger d-inline"> *</h6>:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2">Last Name :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2">Relation<h6 class="text-danger d-inline"> *</h6> :</label>
                <div class="col-md-6">
                    <select class="form-control " id="country">
                        <option selected="">Father</option>
                        <option value="mother">Mother</option>
                        <option value="brother">Brother</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2">Date Of Birth :</label>
                <div class="col-md-6">
                    <input type="dateTime-local" class="form-control hasDatePicker">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2">Education :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2">Occupation :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2">Income :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>
        </form>
        <hr>
        <div class="row">
            <h5>Parent - Contact Details</h5>
        </div>
        <hr>
        <form class="form my-4">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Address Line 1 :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="addr1" placeholder=" Block 9-C Green Street London e.t.c. ">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Address Line 2 :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="addr2" placeholder=" Next To Fortis Hopital e.t.c. ">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">City :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="city" placeholder=" City ">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">State :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="state" placeholder="State">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Country :</label>
                <div class="col-sm-6">
                    <select class="form-control " id="country">
                        <option selected="">Pakistan (پاکستان)</option>
                        <option value="">Albania (Shqipëria)</option>
                        <option value="">Algeria (Dzayer)</option>
                        <option value="">Andorra (Andorra)</option>
                        <option value="">Angola (Angola)</option>
                        <option value="">Antigua and Barbuda (Antigua and Barbuda)</option>
                        <option value="">Argentina (Argentina)</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">PIN Code :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="pin_code" placeholder="0000">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mobile :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="pin_code" placeholder="0300000120">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Phone 1 :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="pin_code" placeholder="021 12812">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Phone 1 :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="pin_code" placeholder="021 12812">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email :</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="pin_code" placeholder="abc@xyz.com">
                </div>
            </div>
        </form>
        <div class="row">
            <h5>Upload Photo</h5>
        </div>
        <hr>
        <form>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Upload Picture </label>
                <div class="col-sm-10">
                    <input type="file" data-toggle="tooltip" title="" class="form-control-file" data-placement="right" id="userPhoto" data-original-title="Insert Image Uder 500KB Recommended Resolution Is 125x125" aria-describedby="tooltip827717">
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-2">
                <a href="Academic-studentAdmission_step4.php" class="btn btn-primary">Click Here To Skip</a>
            </div>
            <div class="col-md-2">
                <a href="Academic-studentAdmission_step4.php" class="btn btn-primary">Finish</a>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->