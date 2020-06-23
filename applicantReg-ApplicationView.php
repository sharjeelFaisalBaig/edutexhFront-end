<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
    .border-right-cstm{
        border-right:#F0F1F6 1px solid;
    }
    .border-left-cstm{
        border-left:#F0F1F6 1px solid;
    }
    .margin_cstm{
        margin-top:-15px;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class="fas fa-user-alt"></i>Applicant Registration</h6> | Archived Application
                <div class="float-md-right">
                    <a href="#" class="m-0 btn btn-primary m-md-auto width70 m-md-auto">Download Fee Recipt</a>
                    <a href="#" class="m-0 btn btn-primary m-md-auto width70 m-md-auto">Edit Applicaions</a>
                    <a href="#" class="m-0 btn btn-primary m-md-auto width70 m-md-auto">Download PDF</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="ApplicantRegistration.php">Applicant Registration</a></li>
                    <li class="breadcrumb-item"><a href="applicantReg-view-details.php">Master of Business Administration</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Muhammad Saleem</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-10 m-auto">
        <div class="row mt-3">
            <div class="col-md-1 mt-3">
                <p>Courses</p>
            </div>
            <div class="col-md-6 mt-3">
                <p class="font-weight-bold">MBA (2.5 Years Program) (Master of Business Administrationdmin)</p>
            </div>
            <div class="col-md-5">
                <div class="float-md-right">
                    <a href="#" onclick="showUpdate()" class="m-0 btn btn-primary m-md-auto width70 m-md-auto">Update Status</a>
                    <a href="#" class="m-0 btn btn-primary m-md-auto width70 m-md-auto">Allocate Applicant</a>
                    <a href="#" class="m-0 btn btn-primary m-md-auto width70 m-md-auto">Discard</a>
                </div>
            </div>
        </div>
        <hr>
        <div id="to_show" class="d-none mt-4">
            <div class="row">
                <div class="col-md-4 mt-2">
                    <label>Change The Status Of Selected Applicants</label>
                </div>
                <div class="col-md-3">
                    <select class="form-control">
                        <option selected="">Select Status</option>
                        <option value="Awaited">Awaited</option>
                        <option value="Pending">Pending</option>
                    </select>
                </div>
                <div class="col-md-2 mt-1">
                    <input class="form-check-input d-inline" type="checkbox" id="inlineCheckbox2" value="option1">
                    <label for="inlineCheckbox2" class="d-inline">Paid</label>
                </div>
                <div class="col-md-3">
                    <a href="#" onclick="hideUpdate(); showAllocate();" class="btn btn-primary d-inline">Update</a>
                    <a href="#" onclick="hideUpdate()" class="btn btn-primary d-inline">Cancel</a>&nbsp;
                </div>
            </div>
        </div>
        <div class="d-none" id="to_show_2">
            <div class="row">
                <div class="col-md-4 mt-2">
                    <label>Select Batch To Admit Selected Applicants</label>
                </div>
                <div class="col-md-4">
                    <select class="form-control">
                        <option selected="">Select Batch</option>
                        <option value="Awaited">MBA-SEM II-A-2020</option>
                        <option value="Pending">Pending</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4 m-auto">
                    <a href="#" onclick="hideAllocate(); hideUpdate();" class="btn btn-primary">Allocate Applicant</a>
                    <a href="#" onclick="hideAllocate()" class="btn btn-primary">Cancel</a>
                </div>
            </div>
        </div>
        <div class="row alert alert-dark mt-2">
            <div class="col-md-1 border-right-cstm"></div>
            <div class="col-md-3 offset-md-1">
                <p class="text-muted">Applicant Name</p>
                <p class="bold mt-1">Applicant Name</p>
            </div>
            <div class="col-md-3">
                <p class="text-muted">Status</p>
                <p class="bold mt-1">Pending</p>
            </div>
            <div class="col-md-3">
                <p class="text-muted">Application Fee (RS)</p>
                <p class="bold mt-1">500.00 (NOT PAID)</p>
            </div>
            <div class="col-md-1 border-left-cstm"></div>
        </div>
        <div class="alert alert-dark row margin_cstm" role="alert">
            <p class="col-md-2 bold">Registration No: 1</p>
            <div class="col-md-4 bold offset-md-6">
                <p class="float-md-right">Application Date : 27-MAY-2020</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="accordion has-gap ms-accordion-chevron margin_cstm" id="accordionExample2">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <div class="row alert alert-dark mt-5">
            <div class="col-md-1 border-right-cstm"></div>
            <div class="col-md-3 offset-md-1">
                <p class="text-muted">Applicant Name</p>
                <p class="bold mt-1">Applicant Name</p>
            </div>
            <div class="col-md-3">
                <p class="text-muted">Status</p>
                <p class="bold mt-1">Pending</p>
            </div>
            <div class="col-md-3">
                <p class="text-muted">Application Fee (RS)</p>
                <p class="bold mt-1">500.00 (NOT PAID)</p>
            </div>
            <div class="col-md-1 border-left-cstm"></div>
        </div>
        <div class="alert alert-dark row margin_cstm" role="alert">
            <p class="col-md-2 bold">Registration No: 1</p>
            <div class="col-md-4 bold offset-md-6">
                <p class="float-md-right">Application Date : 27-MAY-2020</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="accordion has-gap ms-accordion-chevron margin_cstm" id="accordionExample2">
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" role="button" data-target="#collapse5" aria-expanded="true" aria-controls="collapseFour">
                            <span>Student Personal Details</span>
                        </div>
                        <div id="collapse5" class="collapse" data-parent="#accordionExample2" style="">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var to_show_var = document.getElementById("to_show").classList;
    var to_show_var_2 = document.getElementById("to_show_2").classList;
    function showUpdate(){
        to_show_var.remove("d-none");
    }
    function hideUpdate(){
        to_show_var.add("d-none");
    }
    function showAllocate(){
        to_show_var_2.remove("d-none");
    }
    function hideAllocate(){
        to_show_var_2.add("d-none");
    }
</script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->