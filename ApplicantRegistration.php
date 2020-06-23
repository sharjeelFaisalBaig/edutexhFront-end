<!-- header -->

<?php require 'header.php';?>

<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="">
        <div class="row">
            <div class="col-md-12">
             <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class="fas fa-user-alt"></i> Applicant Registration</h6> |  <small>Customize Form</small>
                <div class="float-md-right">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#modalonclose" class="btn btn-primary m-md-auto">Add Course</a>
                    <a href="ApplicantRegistration_Setting.php" class="m-0 btn btn-primary width70 m-md-auto">Setting</a>
                    <a href="Discipline Module_New.php" class="m-0 btn btn-primary width70 m-md-auto">Manage Pins</a>
                    <a href="Discipline Module_New.php" class="m-0 btn btn-primary m-md-auto width70 m-md-auto">Preview</a>


                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Applicant Registration</li>
                </ol>
            </nav>
        </div></div>
    </div>
</div>
<div class="col-md-8 m-md-auto">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="alert alert-warning text-center my-4">
                <strong>Registration course was successfully created</strong>
            </div>
        </div>      
        <div class="col-md-2"></div> 
    </div>        
    <div class="row">
     <div class="col-md-12 m-auto">
        <div class="row">
            <div class="col-md-7">
                <label>Create and manage applications for new joinees of courses in your organization.you can active applicant rgistration for each course with customized forms and fields based on your requirements.</label></div>
                <div class="col-md-3">
                    <input type="text" class="form-control height w-100">
                </div>
                <div class="col-md-2">
                 <a href="#" class="btn btn-primary m-auto width70">Search</a>
             </div>
         </div>
     </div>
 </div>
 <div class="table-responsive mt-5">
    <table class="table table-bordered thead-primary">
        <thead>
            <tr>
                <th scope="col">Courses</th>
                <th scope="col">Applicant</th>
                <th scope="col">Application Fees(Rs.)</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"colspan="4">Active Courses(0)</th>
            </tr>
            <tr>
                <td colspan="4"><label class="m-0">No courses registered</label></td>
            </tr>
            <tr>
               <th scope="row"colspan="4">Inactive Courses(1)<a href="" class="float-right" style="margin-right:80px;">Activate</a></th>
           </tr>
           <tr>
            <td><label></label>MBA(2.5 Years)(Master Of Business Adiministration</td> 
            <td>0</td>
            <td>500</td>
            <td><a href="applicantReg-view-details.php"><b>Applicant</b></a><label>&nbsp;&nbsp;&nbsp;&nbsp;</label><a href=""><b>Settings</b></a></td>
        </tr>
    </tbody>
</table>



</div>
</div>
</div>

</div>
</div>
<div class="modal fade bd-example-modal-lg" id="modalonclose" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Add Course</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="validationCustom18" class="mt-1"><b>Course</b></label>    
                    </div>
                    <div class="col-md-4">
                        <select class="form-control height">
                            <option selected="">Master Of Business Admistration</option>
                            <option value="2">abc</option>
                            <option value="2">Above</option>
                            <option value="3">xyz</option>
                        </select>        
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="validationCustom18" class="mt-1"><b>Display Name</b></label>    
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control inputtype">        
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="validationCustom18" class="mt-1"><b>Amount</b></label>    
                    </div>
                    <div class="col-md-4">
                        <input type="number" class="form-control inputtype">        
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="validationCustom18" class="mt-1"><b>Active Registration</b></label>    
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" class="form-control inputtype mt-1">        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12 ml-0"><a href="Discipline Module_New.php" class="m-0 float-right btn btn-primary width70">Add Course</a></div>
            </div>
        </div>

    </div>
</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->