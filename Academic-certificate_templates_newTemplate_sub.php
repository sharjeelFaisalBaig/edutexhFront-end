<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
          <li class="breadcrumb-item"><a href="Academic-certificate_sub.php">Certificates</a></li> 
          <li class="breadcrumb-item"><a href="Academic-certificate_templates_sub.php">Templates</a></li>  
          <li class="breadcrumb-item active" aria-current="page">New Template</li>
        </ol>
      </nav>
    </div>

    <div class="col-md-10">
        <h6 class="my-4"><b>TEMPLATES | </b><small>New TEMPLATES</small></h6>
    </div>
    <div class="col-md-2">
        <a href="Academic-certificate_templates_sub.php" class="btn btn-primary">Home</a>
    </div>
     
     <div class="col-md-12">
        <hr>
     </div>

    <div class="col-md-8 m-auto">
    
                <div class="form-group row">
                    <h6 class="col-sm-12 col-form-label  d-inline">Certificate Name <small>(Heading)</small></h6>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="certificateName" placeholder="Enter Certificate Name">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <h6 class="col-sm-12 col-form-label d-inline">Contact No.</h6>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="contactNo" placeholder="Enter Certificate Number">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <h6 class="col-sm-12 col-form-label d-inline">Address</h6>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="address" placeholder="Enter Supplier Address">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <h6 class="col-sm-12 col-form-label">Applicable User Type</h6>
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="ml-2"></span>
                            <input class="form-input" type="radio" name="exampleRadios" id="genderMale" value="option1" checked="">
                            <label class="form-label" for="exampleRadios1">
                            Student   
                            </label>
                            <span class="ml-2"></span>
                            <input class="form-input" type="radio" name="exampleRadios" id="genderFemale" value="option1" checked="">
                            <label class="form-label" for="exampleRadios1">
                            Employee
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <h6 class="col-sm-12 col-form-label d-inline">Certificate Serial No.</h6>
                    <div class="row">
                    <div class="col-sm-6">
                        <span class="ml-2"></span>
                        <input class="form-input" type="radio" name="exampleRadios" id="genderMale" value="option1" checked="">
                        <label class="form-label" for="exampleRadios1">
                        Generate Automatically   
                        </label>
                        <span class="ml-2"></span>
                        <input class="form-input" type="radio" name="exampleRadios" id="genderFemale" value="option1" checked="">
                        <label class="form-label" for="exampleRadios1">
                        Enter Manually While
                        </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control m-auto" id="address" placeholder="">
                    </div>
                    <label class="col-md-2">Serial No Prefix</label>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <h6 class="col-sm-12 col-form-label">Background Picture :</h6>
                    <div class="col-md-12">
                        <input type="file" data-toggle="tooltip" title="Insert Background Image" class="form-control-file" data-placement="right" id="userPhoto">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <h6 class="col-md-12 col-form-label">Layout Settings </h6>

                    <div class="col-md-3 my-2">
                        <div class="row">
                            <label class="col-md-4">Top Spacing</label>
                            <div class="col-md-8 input-group">
                                <input type="text" class="form-control" id="">
                                <div class="input-group-append">
                                    <span class="input-group-text">Px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-3 my-2">
                        <div class="row">
                            <label class="col-md-4">Right Spacing</label>
                            <div class="col-md-8 input-group">
                                <input type="text" class="form-control" id="">
                                <div class="input-group-append">
                                    <span class="input-group-text">Px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-3 my-2">
                        <div class="row">
                            <label class="col-md-4">Left Spacing</label>
                            <div class="col-md-8 input-group">
                                <input type="text" class="form-control" id="">
                                <div class="input-group-append">
                                    <span class="input-group-text">Px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-3 my-2">
                        <div class="row">
                            <label class="col-md-4">Bottom Spacing</label>
                            <div class="col-md-8 input-group">
                                <input type="text" class="form-control" id="">
                                <div class="input-group-append">
                                    <span class="input-group-text">Px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <h6 class="col-sm-12 col-form-label">Barcode</h6>
                    <label class="col-md-2 my-2">Generate For</label>
                    <div class="col-md-4">
                        <select class="form-control" id="">
                            <option selected>Admission</option>
                            <option value="1">abc</option>
                            <option value="2">efg</option>
                            <option value="3">xyz</option>
                        </select>                          
                    </div>
                    <label class="col-md-2 my-2">Orientation</label>
                    <div class="col-md-4">
                        <select class="form-control" id="">
                            <option selected>Right Vertical</option>
                            <option value="1">abc</option>
                            <option value="2">efg</option>
                            <option value="3">xyz</option>
                        </select>                          
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <h6 class="col-sm-12 col-form-label">User Photo Style - Font</h6>
                    <div class="col-md-4 my-2">     
                            <span class="ml-2"></span>
                            <input class="form-input" type="radio" name="exampleRadios" id="genderMale" value="option1" checked="">
                            <label class="form-label" for="exampleRadios1">
                            Square   
                            </label>
                            <span class="ml-2"></span>
                            <input class="form-input" type="radio" name="exampleRadios" id="genderFemale" value="option1" checked="">
                            <label class="form-label" for="exampleRadios1">
                            Circle
                            </label>  
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <label class="col-md-4">Bottom Spacing</label>
                            <div class="col-md-8 input-group">
                                <input type="text" class="form-control" id="">
                                <div class="input-group-append">
                                    <span class="input-group-text">Px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 m-auto">
                    <a href="Academic-certificate_templates_preview_sub.php" class="btn btn-primary">Preview</a>
                </div> 

    </div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->