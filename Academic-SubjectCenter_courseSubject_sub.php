<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
    .cstm_font{
        font-size:10px;
    }
    .cstm_border_1{
        border-left:0px !important;
    }
    .margin_cstm{
        margin-right:-50px;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Subject Center| </b><small>Course Subjects</small></h6>
                <div class="float-md-right">
                    <a href="#" class="btn btn-primary m-0">Subject Import Logs</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                <li class="breadcrumb-item"><a href="Academic-subjectCenter_sub.php">Subject Center</a></li> 
                <li class="breadcrumb-item active" aria-current="page">Course Subject</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="row mt-4">
                <h5 class="ml-2">Courses</h5>
            </div>
            <div class="row form-group my-4">
                <label class="col-md-2 mt-2">Course</label>
                <div class="col-md-4">
                    <select class="form-control">
                        <option value="grade-5">Grade 5</option>
                        <option value="grade-6">Grade 6</option>
                        <option value="grade-7">Grade 7</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row">
                <small class="col-md-5">List Of All The Subjects For This Course You Can Add New Subjects And Manage Their Prefrences Here</small>
                <div class="col-md-7">
                    <a href="#" data-toggle="modal" data-target="#modal_importSubjects" class="d-inline float-md-right ml-3">Import Subjects</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="d-inline float-md-right ml-3" data-toggle="modal" data-target="#modal_subjects"><span class="text-success d-inline">+</span>Subject</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="d-inline float-md-right ml-3"><span class="text-success d-inline">+</span>Elective Group</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="d-inline float-md-right ml-3" data-toggle="modal" data-target="#modal_subjectGroup"><span class="text-success d-inline">+</span>Subject Group</a>
                </div>
            </div>
            <div class="row" id="to_hide">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="alert alert-warning text-center my-4">
                        <strong>No Subjects , Subject Group , Elective Group Assigned Created</strong>
                    </div>
                </div>
                <div class="col-md-2"></div> 
            </div>
            <div class="row mt-5" id="to_show">
                <a href="#" class="col-md-12">Reorder</a>
            </div>
            <div class="row  mt-1" id="to_show_1">
                <div class="col-md-12">    
                    <div class="table-responsive">
                        <table class="table table-bordered thead-primary">
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="bold d-inline">Sports(SPo)</h6>
                                        <small class="d-inline"><i class="cstm_font">Subjects</i></small>
                                    </td>
                                    <td>
                                        <a href="Academic-SubjectCenter_courseSubject_editSubject_sub.php" class="d-inline float-md-right  ml-4">Edit</a>
                                        &nbsp;
                                        <a href="#" class="d-inline  float-md-right">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-1" id="to_show_3">
                <div class="col-md-12">    
                    <div class="table-responsive">
                        <table class="table table-bordered thead-primary">
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="bold d-inline">Principals OF Accounting(ACA 101)</h6>
                                        <small class="d-inline"><i class="cstm_font">Subjects</i></small>
                                    </td>
                                    <td>
                                        <a href="Academic-SubjectCenter_courseSubject_editSubject_sub.php" class="d-inline float-md-right  ml-4">Edit</a>
                                        &nbsp;
                                        <a href="#" class="d-inline  float-md-right">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-1" id="to_show_3">
                <div class="col-md-12">    
                    <div class="table-responsive">
                        <table class="table table-bordered thead-primary">
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="bold d-inline">Principals OF Marketing(MKT 101)</h6>
                                        <small class="d-inline"><i class="cstm_font">Subjects</i></small>
                                    </td>
                                    <td>
                                        <a href="Academic-SubjectCenter_courseSubject_editSubject_sub.php" class="d-inline float-md-right  ml-4">Edit</a>
                                        &nbsp;
                                        <a href="#" class="d-inline  float-md-right">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-1" id="to_show_3">
                <div class="col-md-12">    
                    <div class="table-responsive">
                        <table class="table table-bordered thead-primary">
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="bold d-inline">Islamiat(ISL 101)</h6>
                                        <small class="d-inline"><i class="cstm_font">Subjects</i></small>
                                    </td>
                                    <td>
                                        <a href="Academic-SubjectCenter_courseSubject_editSubject_sub.php" class="d-inline float-md-right  ml-4">Edit</a>
                                        &nbsp;
                                        <a href="#" class="d-inline  float-md-right">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-1" id="to_show_2">
                <div class="col-md-12">    
                    <div class="table-responsive">
                        <table class="table table-bordered thead-primary">
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="bold d-inline">Science</h6>
                                        <small class="d-inline"><i class="cstm_font">Subject Group</i></small>
                                    </td>
                                    <td>
                                        <a href="Academic-SubjectCenter_courseSubject_editSubject_sub.php" class="d-inline float-md-right  ml-3">Edit</a>
                                        &nbsp;
                                        <a href="#" class="d-inline float-md-right ml-3"data-toggle="modal" data-target="#modal_subjects"><span class="text-success d-inline">+</span>Subject</a>
                                        &nbsp;
                                        <a href="#" class="d-inline float-md-right ml-3"><span class="text-success d-inline">+</span>Elective Group</a>
                                        &nbsp;
                                        <a href="#" class="d-inline  float-md-right">Delete</a>
                                    </td>
                                </tr>
                                <tr class="table-bordered">
                                    <td class="border-0"></td>
                                    <td class="cstm_border_1">
                                        <small class="cstm-font ml-5">No Subject Present</small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-1" id="to_show_2">
                <div class="col-md-12">    
                    <div class="table-responsive">
                        <table class="table table-bordered thead-primary">
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="bold d-inline">Speacialization</h6>
                                        <small class="d-inline"><i class="cstm_font">Elective Group</i></small>
                                    </td>
                                    <td>
                                        <a href="Academic-SubjectCenter_courseSubject_editSubject_sub.php" class="d-inline float-md-right  ml-3">Edit</a>
                                        &nbsp;
                                        <a href="#" class="d-inline float-md-right ml-3" data-toggle="modal" data-target="#modal_subjects"><span class="text-success d-inline">+</span>Subject</a>
                                        &nbsp;
                                        <a href="#" class="d-inline  float-md-right">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="mx-5">
                                            <h6 class="bold d-inline">Finance (FIN 101)</h6>
                                            <small class="d-inline"><i class="cstm_font">Subject</i></small>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="Academic-SubjectCenter_courseSubject_editSubject_sub.php" class="d-inline float-md-right  ml-4">Edit</a>
                                        &nbsp;
                                        <a href="#" class="d-inline  float-md-right">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="mx-5">
                                            <h6 class="bold d-inline">Marketing (MKT 102)</h6>
                                            <small class="d-inline"><i class="cstm_font">Subject</i></small>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="Academic-SubjectCenter_courseSubject_editSubject_sub.php" class="d-inline float-md-right  ml-4">Edit</a>
                                        &nbsp;
                                        <a href="#" class="d-inline  float-md-right">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="mx-5">
                                            <h6 class="bold d-inline">Human Resources Management (HRM 101)</h6>
                                            <small class="d-inline"><i class="cstm_font">Subject</i></small>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="Academic-SubjectCenter_courseSubject_editSubject_sub.php" class="d-inline float-md-right  ml-4">Edit</a>
                                        &nbsp;
                                        <a href="#" class="d-inline  float-md-right">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_subjectGroup" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round "> 
                    Manage Subject Group  
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <label class="col-md-12 mt-4">Subject Group Name</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Enter Subject Group Name !">
                        <hr>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="row">
                    <label class="col-md-12 bold">Calculation</label>
                    <br/>
                    <div class="col-md-6">
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio">Calculate Skill Score</label><br>
                            <small>Select This Option To Calculate And Display Subject Group Marks In Reports</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio2">Don't Calculate Skill Set Score</label><br>
                            <small>Select This Option If You Want To Calculate Total Marks For Subject Group</small>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <p>Subject Group Marks Derivation Formula</p>
                    </div>    
                </div>
                <div class="row mt-2">
                    <div class="col-md-12 my-2">
                         <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio">Sum</label><br>
                            <small>Score Of All Skill Will Be Added To Derive The Skill Set Score</small>
                        </div>
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio2">Average</label><br>
                            <small>Score Of All Skill Will Be Added And Divided By THe Number Of The Skills To Get The Average Which Will Be The Score Of The Skill Set</small>
                        </div>
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio3">Best Of</label><br>
                            <small>Score Of All Skill Will Be Compared And The Highest Score Among The Skills Will Be The Skill Set Score</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
				<button type="button" href="#" data-dismiss="modal" onclick="show()" class="btn btn-primary">Create Subject Group</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button> 
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_importSubjects" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round "> 
                    Import Subject   
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <label class="col-md-12 mt-4">Course</label>
                    <div class="col-md-12">
                        <select class="form-control">
                            <option value="grade-1">Grade I</option>
                            <option value="play-group">Play Group</option>
                        </select>
                    </div>
                    <br>
                    <br>
                </div>
                <hr>
                <div class="row mt-3">
                    <p class="col-md-4 text-muted">Select Subjects</p>
                    <div class="col-md-3 offset-md-5">
                        <a href="#" class="float-md-right d-inline">All</a>
                        <p class="float-md-right d-inline"> &nbsp;,&nbsp; </p>
                        <a href="#" class="float-md-right-d-inline margin_cstm">None</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="ms-checkbox-wrap">
                            <input type="checkbox" id="c1">
                            <i class="ms-checkbox-check" id="c1"></i>
                        </label>
                        <label for="c1" class="d-inline">English Eng-101</label>&nbsp;&nbsp;
                        <small for="c1" class="d-inline">Subject</small>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-12">
                        <label class="ms-checkbox-wrap">
                            <input type="checkbox" id="c2">
                            <i class="ms-checkbox-check" id="c2"></i>
                        </label>
                        <label for="c2" class="d-inline">Mathematics (MATH)</label>&nbsp;&nbsp;
                        <small for="c2" class="d-inline">Subject</small>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-12">
                        <label class="ms-checkbox-wrap">
                            <input type="checkbox" id="c3">
                            <i class="ms-checkbox-check" id="c3"></i>
                        </label>
                        <label for="c3" class="d-inline">Urdu (URDU)</label>&nbsp;&nbsp;
                        <small for="c3" class="d-inline">Subject</small>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
				<button type="button" href="#" onclick="show()" data-dismiss="modal" class="btn btn-primary">Import Subjects</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button> 
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_subjects" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round "> 
                    Create Subject   
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-md-12 mt-4">Course Subject Name</label>
                        <input type="text" class="form-control" placeholder="Enter Subject Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="col-md-12 mt-4">Code</label>
                        <input type="text" class="form-control" placeholder="Enter Subject Code">
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-12 mt-4">Weekly Classes</label>
                        <input type="text" class="form-control" placeholder="Enter Subject Code">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-md-12 mt-4">Credit Hours</label>
                        <input type="text" class="form-control" placeholder="Enter Credit Hours">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-12">
                        <label for="isActive" class="col-md-4">Is Activity</label>
                        <label class="ms-checkbox-wrap col-md-2">
                            <input type="checkbox" id="isActive">
                            <i class="ms-checkbox-check" id="isActive"></i>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-md-4">Select Skill Set</label>
                        <select class="form-control">
                            <option value="english">English</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <label for="exam" class="col-md-4">No Exams</label>
                        <label class="ms-checkbox-wrap col-md-2">
                            <input type="checkbox" id="exam">
                            <i class="ms-checkbox-check" id="exam"></i>
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
				<button type="button" href="#" onclick="show(" data-dismiss="modal" class="btn btn-primary">Create Subjects</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button> 
            </div>
        </div>
    </div>
</div>
<!-- <script>
    var to_show_var_1 = document.getElementById("to_show_1").classList;
    var to_show_var_2 = document.getElementById("to_show_2").classList;
    var to_hide_var   = document.getElementById("to_hide").classList;
    function show(){
        to_show_var_1.remove("d-none");
        to_show_var_2.remove("d-none");
        to_hide_var.add("d-none");
    };
</script> -->
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->    