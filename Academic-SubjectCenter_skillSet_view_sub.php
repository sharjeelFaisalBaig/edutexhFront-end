<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
    .bg-cstm{
        background-color:rgb(237,237,237);
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6 class="my-4 d-md-inline"><b>Subject Skill Set | </b><small>View</small></h6>
            <div class="float-md-right">
                <a href="#" class="btn btn-primary width70" id="to_hide_1" type="submit">Delete Skill Set</a>
                <a href="#" class="btn btn-primary width70 d-none" id="to_show_1" type="submit">Edit Skill Set</a>
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
          <li class="breadcrumb-item"><a href="Academic-subjectCenter_skillSet_sub.php">Skill Set</a></li>  
          <li class="breadcrumb-item active" aria-current="page">English</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row mt-5">
            <p class="col-md-2 text-muted">Skill Set</p>
            <div class="col-md-4 offset-md-2">
                <h6 class="d-inline">English</h6>
                &nbsp;&nbsp;&nbsp;
                <a href="#" class="d-inline"><u>Edit Skill Set</u></a>
            </div>
        </div>
        <hr>
        <div class="row bg-cstm my-5" id="to_hide_2">
            <div class="col-md-4 m-auto">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p class="text-muted">Now Setup This Grading Profile</p><br>
                <a href="#" data-toggle="modal" data-target="#modal_manageSkill" class="btn btn-primary mx-4 mb-2">Add Subject Skills</a>
            </div>
        </div>
        <div class="row d-none" id="to_show_2">
            <div class="col-md-12">    
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">Skill Name</th>
                            <th scope="col">Formula</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Reading</td>
                            <td>-</td>
                            <td><a href="#" data-toggle="modal" data-target="#modal_addSkill">Add Subject Skills</a></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="This Skill Set Has Dependencies"></i>
            </div>
        </div>
        <div class="row d-none mt-4" id="to_show_3">
            <div class="col-md-12">    
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">Skill Name</th>
                            <th scope="col">Formula</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bold">Reading</td>
                            <td id="to_hide_table"><p class="text-center">-</p></td>
                            <td><a href="#" data-toggle="modal" data-target="#modal_addSkill">Add Subject Skills</a></td>
                        </tr>
                        <tr>
                            <td><p class="text-muted text-center my-2">-Pronounciation</p></td>
                            <td class="border-0"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><p class="text-muted text-center my-2">-Comprehesion</p></td>
                            <td class="border-0 bordercstm"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bold">Reading</td>
                            <td id="to_hide_table"><p class="text-center">-</p></td>
                            <td><a href="#" data-toggle="modal" data-target="#modal_addSkill">Add Subject Skills</a></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="This Skill Set Has Dependencies"></i>
            </div>
        </div>
    </div>
</div>    
<div class="modal fade" id="modal_manageSkill" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round "> 
                    Manage Subject Skills
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row mt-5">
                    <p class="col-md-2 text-muted">Skill Set</p>
                    <div class="col-md-4 offset-md-2">
                        <h6><u>English</u></h6>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <h6>Skill Name</h6>
                    </div>
                    <div class="col-md-4 offset-md-2">
                        <h6>Max Marks</h6>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="e.g Reading etc.">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="e.g 10 etc.">
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-times text-danger my-2"></i>    
                    </div>
                </div>
                <div class="row mx-1">
                    <div class="custom-control custom-radio custom-control mt-3 col-md-6">
                        <input type="radio" class="custom-control-input" id="calc_0" name="example1" value="customEx4">
                        <label class="custom-control-label" for="calc_0">Calculate Skill Score</label><br>
                    </div>
                    <div class="custom-control custom-radio custom-control mt-3 col-md-6">
                        <input type="radio" class="custom-control-input" id="dcalc_0" name="example1" value="customEx1">
                        <label class="custom-control-label" for="dcalc_0">Don't Calculate Skill Score</label><br>
                    </div>
                </div>
                <hr>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="e.g Reading etc.">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="e.g 10 etc.">
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-times text-danger my-2"></i>    
                    </div>
                </div>
                <div class="row mx-1">
                    <div class="custom-control custom-radio custom-control mt-3 col-md-6">
                        <input type="radio" class="custom-control-input" id="calc" name="example2" value="customEx2">
                        <label class="custom-control-label" for="calc">Calculate Skill Score</label><br>
                    </div>
                    <div class="custom-control custom-radio custom-control mt-3 col-md-6">
                        <input type="radio" class="custom-control-input" id="dcalc" name="example2" value="customEx3">
                        <label class="custom-control-label" for="dcalc">Don't Calculate Skill Score</label><br>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <i name="add" class="fas fa-plus text-success d-inline mx-1"></i>&nbsp;&nbsp;<label class="d-inline">Add</label>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Skill Set Marks</h6>
                    </div>    
                </div>
                <div class="row my-5">
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
                <hr>
            </div>
            <div class="modal-footer">
				<button type="button" href="#" onclick="showHide()" data-dismiss="modal" class="btn btn-primary">Save Skills</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button> 
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_addSkill" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round "> 
                    Manage Subject Skills
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row mt-5">
                    <p class="col-md-3 text-muted">Subject Skill</p>
                    <div class="col-md-6 offset-md-2">
                        <h6 class="d-inline"><u><b>Reading</b></u></h6> &nbsp;
                        <a href="#" class="d-inline">Edit Subject Skills</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <p class="col-md-3 text-muted">Skill Set</p>
                    <div class="col-md-2 offset-md-2">
                        <h6 class="d-inline"><u><b>English</b></u></h6>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <h6>Sub Skill Name</h6>
                    </div>
                    <div class="col-md-4 offset-md-2">
                        <h6>Max Marks</h6>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="e.g Pronounciation etc.">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="e.g 10 etc.">
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-times text-danger my-2"></i>    
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="e.g Comprehension etc.">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="e.g 10 etc.">
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-times text-danger my-2"></i>    
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <i name="add" class="fas fa-plus text-success d-inline mx-1"></i>&nbsp;&nbsp;<label class="d-inline">Add</label>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Skill Marks Derivation Formula</h6>
                    </div>    
                </div>
                <div class="row my-5">
                    <div class="col-md-12 my-2">
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="sum" name="example">
                            <label class="custom-control-label" for="sum">Sum</label><br>
                            <small>The Scores Of All Kinds Of The SKills Will Be Added To Derive The Skills Set Score</small>
                        </div>         
                    </div>
                    <div class="col-md-12 my-2">
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="avg" name="example">
                            <label class="custom-control-label" for="avg">Average</label><br>
                            <small>The Scores Of All The Skills Will Be Added And Divided By The Number Of Skills To Get The Average , Which Will Be The Score Of Skill Set</small>
                        </div>         
                    </div>
                    <div class="col-md-12 my-2">
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="best" name="example">
                            <label class="custom-control-label" for="best">Best</label><br>
                            <small>The Scores Of All The Skills Will Be Compared And The Highest Score Among The Skills Will Be The Skill Set Score</small>
                        </div>         
                    </div>
                </div>
                <hr>
            </div>
            <div class="modal-footer">
				<button type="button" href="#" data-dismiss="modal" class="btn btn-primary">Save Sub Skill</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button> 
            </div>
        </div>
    </div>
</div>
<script>
    var to_show_1 = document.getElementById("to_show_1").classList;
    var to_show_2 = document.getElementById("to_show_2").classList;
    var to_show_3 = document.getElementById("to_show_3").classList;
    var to_hide_1 = document.getElementById("to_hide_1").classList;
    var to_hide_2 = document.getElementById("to_hide_2").classList;
    function showHide(){
        to_show_1.remove("d-none");
        to_show_2.remove("d-none");
        to_show_3.remove("d-none");
        to_hide_1.add("d-none");
        to_hide_2.add("d-none");
    };
</script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->