<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6 class="my-4 d-md-inline"><b>Subject Center| </b><small>Subject Skill Set</small></h6>
            <div class="float-md-right">
                <a href="#" class="btn btn-primary m-0" data-target="#modal_createSkillSet" data-toggle="modal">Create Skill Set</a>
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
          <li class="breadcrumb-item active" aria-current="page">Skill Set</li>
        </ol>
      </nav>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="col-md-8 m-auto">
        <div class="row d-none" id="to_show_2">
            <div class="col-md-8 offset-md-2">
                <div class="alert alert-warning text-center my-4">
                    <strong>Subject Skill Set Created</strong>
                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>
        <h5 class="col-md-12 my-3">Subject Skill Set</h5>
        <hr>
        <p class="col-md-12 text-muted">Skills Are Paramenters And Use To Evaluate Skill Set Create Subject Skil Set And Assign Them To Subjects For Example Subject Skill Set English Will Have The Skills (Reading , Writing , Listening etc.) Reading Skill Will Have Sub Skills (Pronounciation , Comprehension , Fluency etc.)</p>
        <div class="row my-5" id="to_hide">
            <div class="col-md-12">    
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">Skill Set</th>
                                <th scope="col">No. OF Subject Skill</th>
                                <th scope="col">Formula</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr >
                                <td>
                                    <p><a href="#" data-target="#modal_createSkillSet" data-toggle="modal">Create A Skill Set</a></p>
                                </td>
                                <td class=""></td>
                                <td class=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row d-none" id="to_show_1">
            <div class="col-md-12">    
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">Skill Set</th>
                            <th scope="col">No. OF Subject Skill</th>
                            <th scope="col">Formula</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>English</td>
                            <td>0</td>
                            <td>-</td>
                            <td><a href="Academic-SubjectCenter_skillSet_view_sub.php">View</a></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</div>
<div class="modal fade" tabindex="-1" id="modal_createSkillSet" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round">Create Skill Set</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
                <h6 class="col-md-12">Skill Set Name</h6>
                <hr>
                <p class="col-md-12 text-muted">Skills Are Parameter Use To Evaluate Subject Exams Create Skill Set And Assign To The Subject Example (Reading Skills)</p>
                <input type="text" class="form-control my-5" placeholder="Suject Name e.g English , Math etc.">
                <label class="col-md-12"><b>Calculations</b></label>
                <div class="row m-auto">
                    <div class="col-md-6">
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio">Calculate Skill Score</label><br>
                            <small>Select This Option To Calculate And Display Skill Set Marks In Reports</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio2">Don't Calculate Skill Set Score</label><br>
                            <small>Select This Option If You Want To Calculate Total Marks For Skill Set</small>
                        </div>
                    </div>
                </div>
            </div>
			<div class="modal-footer">
				<button type="button" href="#" onclick="showHide()" data-dismiss="modal" class="btn btn-primary">Create Skill Set</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<script>
    var to_show_var_1 = document.querySelector("#to_show_1").classList;
    var to_show_var_2 = document.querySelector("#to_show_2").classList;
    var to_hide_var = document.querySelector("#to_hide").classList;
    function showHide(){
        console.log(to_show_var_1 ,to_show_var_2 , to_hide_var)
        to_show_var_1.remove("d-none");
        to_show_var_2.remove("d-none");
        to_hide_var.add("d-none");
    }
</script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->