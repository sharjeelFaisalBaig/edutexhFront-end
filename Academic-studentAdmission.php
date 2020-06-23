<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students | </b><small>Admission</small></h6>
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
        <div class="row my-4">
            <p class="d-inline"> Fields Marked With </p><h6 class="text-danger d-inline"> *</h6><p class="d-inline"> Must Be Filled</p>
        </div>
        <div class="row">
            <h5>Personal Details</h5>
        </div>
        <hr>
        <form>
            <div class="form-group row mt-5">
                <label class="col-md-2 col-form-label">First Name<h6 class="text-danger d-inline"> *</h6> :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="fname">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Middle Name :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="mname">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Last Name :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="lname">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Date Of Birth<h6 class="text-danger d-inline"> *</h6> :</label>
                <div class="col-md-6">
                    <input type="dateTime-local" class="form-control hasDatePicker" id="lname">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gender:</label>
                <div class="col-sm-6 my-2">
                    <span class="ml-2"></span>
                    <input class="form-input" type="radio" name="exampleRadios" id="male" value="option1">
                    <label class="form-label" for="male">
                        Male
                    </label>
                    <span class="ml-2"></span>
                    <input class="form-input" type="radio" name="exampleRadios" id="female" value="option1">
                    <label class="form-label" for="female">
                        Female
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Blood Group :</label>
                <div class="col-sm-6">
                    <select class="form-control " id="bloodGroup">
                        <option selected>Unknown</option>
                        <option value="1">abc</option>
                        <option value="2">efg</option>
                        <option value="3">xyz</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Birth Place :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nationality :</label>
                <div class="col-sm-6">
                    <select class="form-control ">
                        <option selected>Pakistan</option>
                        <option value="1">India</option>
                        <option value="2">efg</option>
                        <option value="3">xyz</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Mother Tongue :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Catagory :</label>
                <div class="col-sm-6">
                    <select class="form-control ">
                        <option selected>Staff Child</option>
                        <option value="1">India</option>
                        <option value="2">efg</option>
                        <option value="3">xyz</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Religion :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>
        </form>
        <hr>
        <div class="row">
            <h5>Contact Details</h5>
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
                <label class="col-sm-2 col-form-label">Phone :</label>
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
        <hr>
        <h6 class="col-md-12">Course And Batch Details</h6>
        <hr>
        <form>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Course<h6 class="text-danger d-inline"> *</h6> :</label>
                <div class="col-sm-6">
                    <select class="form-control " id="country">
                        <option selected="">Master OF Bussiness Administration</option>
                        <option value="">s</option>
                        <option value="">a</option>
                        <option value="">r</option>
                        <option value="">s</option>
                        <option value="">s</option>
                        <option value="">s</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Batch<h6 class="text-danger d-inline"> *</h6> :</label>
                <div class="col-sm-6">
                    <select class="form-control " id="country">
                        <option selected="">MBA-Semister II-A-2020</option>
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
                <label class="col-sm-2 col-form-label">Roll No :</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="pin_code">
                </div>
            </div>   
        </form>
        <hr>
        <div class="row">
            <h5>Settings</h5>
        </div>
        <hr>
        <form>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Bio Matric ID :</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="pin_code" placeholder="000000">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Enable e-mails Features</label>
                <div class="col-sm-10">
                    <label class="ms-checkbox-wrap">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                    </label>
                </div>
            </div>  
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Assign Transport</label>
                <div class="col-sm-10">
                    <label class="ms-checkbox-wrap">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                    </label>
                </div>
            </div>
        </form>
        <hr>
        <div class="row">
            <h5>Settings</h5>
        </div>
        <hr>
        <form>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Upload User Picture </label>
                <div class="col-sm-10">
                    <input type="file" data-toggle="tooltip" title="" class="form-control-file" data-placement="right" id="userPhoto" data-original-title="Insert Image Uder 500KB Recommended Resolution Is 125x125" aria-describedby="tooltip827717">
                </div>
            </div>
        </form>
        <div class="col-md-4 m-auto">
            <a href="Academic-studentAdmission_step2.php" class="btn btn-primary">Save & Proceed</a>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->