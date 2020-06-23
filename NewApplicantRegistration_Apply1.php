<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
            <div class="col-md-8 mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="ApplicantRegistration.php">Applicant Registration</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Apply</li>
                    </ol>
                </nav>
            </div>
        </div>
    <div class="row">
        <div class="col-md-8 m-md-auto">
            <div class="row mt-4">
                <div class="col-md-3"><label>Course</label> </div>
                <div class="col-md-9"><label>MBA(2.5 Year Program)</label></div>

            </div>
            <div class="accordion has-gap ms-accordion-chevron mt-4" id="accordionExample2">
                <div class="card">
                  <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <span>Student Personal Details</span>
                  </div>
                  <div id="collapseFour" class="collapse" data-parent="#accordionExample2" style="">
                    <div class="row mt-3">
            <div class="col-md-3">
            <label for="validationCustom18" class="mt-1 p-1 ml-4"><b>First Name</b></label>    
        </div>
        <div class="col-md-4">
        <input type="text" class="form-control inputtype">        
        </div>
        </div>
        <div class="row mt-3">
        <div class="col-md-3">
            <label for="validationCustom18" class="mt-1 p-1 ml-4"><b>Last Name</b></label>    
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control inputtype">
        </div>
        </div>
        <div class="row mt-3">
        <div class="col-md-3">
            <label for="validationCustom18" class="mt-1 p-1 ml-4"><b>Date Of Birth</b></label>    
        </div>
        <div class="col-md-4">
            <input type="date" class="form-control inputtype">        
        </div>
        </div>
        <div class="row mt-3">
        <div class="col-md-3">
            <label for="validationCustom18" class="mt-1 p-1 ml-4"><b>Gender</b></label>    
        </div>
        <div class="col-md-4">
            <input type="radio" name="1"><label class="ml-2">Male</label>
            <input type="radio" name="1"><label class="ml-2">Female</label>        
        </div>
        </div>
        <div class="row mt-3">
        <div class="col-md-3">
            <label for="validationCustom18" class="mt-1 p-1 ml-4"><b>Nationality</b></label>    
        </div>
        <div class="col-md-4">
                    <select class="form-control height select">
                                <option selected="">Pakistan</option>
                                <option value="2">abc</option>
                                <option value="2">Above</option>
                                <option value="3">xyz</option>
                    </select>
                    </div>
        </div>
        <div class="row mt-3">
        <div class="col-md-3">
            <label for="validationCustom18" class="mt-1 p-1 ml-4"><b>Student Category</b></label>    
        </div>
        <div class="col-md-4">
                    <select class="form-control height select">
                                <option selected="">Regular</option>
                                <option value="1">abc</option>
                    </select>
                    </div>
        </div>
        <div class="row mt-3 mt-3"></div>
              </div>
                </div>
              </div>
</div>
</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->