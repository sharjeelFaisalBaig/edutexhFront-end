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
          <li class="breadcrumb-item active" aria-current="page">Templates</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-10">
        <h6 class="my-4"><b>CERTIFICATE | </b><small>TEMPLATES</small></h6>
    </div>
    <div class="col-md-2">
        <a href="Academic-certificate_templates_newTemplate_sub.php" class="btn btn-primary">New Template</a>
    </div>
     
     <div class="col-md-12">
        <hr>
     </div>


     <div class="col-md-8 m-auto">

        <div class="col-md-12">
            <h6>Certificate Templates</h6>
        </div>
        <div class="col-md-12">
            <p class="text-muted">Manage All The Certificates Templates Of All Different Kinds Of Certificate This Institute IssuesFor Students ANd Employes</p>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="alert alert-warning text-center my-4">
                    <strong>No Certificate Template Present</strong>
                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>

        <div class="col-md-12 my-4">
    
                <div class="">
                    <table class="table thead-primary">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Employee Templates</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-bordered">
                            <th scope="row" class="border-0">Character Certificate</th> 
                            <td class="border-0"></td>
                            <td class="border-0"></td>
                            <td><a href="">Edit</a></td>
                            <td><a href="">Delete</a></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
        </div>


     </div>


    




<!-- 
<div class="modal fade " tabindex="-1" id="modal_newTemplate" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">New Template</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>

			<div class="modal-body">


            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Certificate Name <small>(Heading)</small></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="certificateName" placeholder="Enter Supplier Name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Contact No.</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="contactNo" placeholder="Enter Certificate Number">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Address</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="address" placeholder="Enter Supplier Address">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Applicable User Type</label>
                <div class="col-sm-9">
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

            <div class="form-group row">
                <label class="col-sm-2 col-form-label d-inline">Certificate Serial No.</label>
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
                <div class="col-md-2">
                    <input type="text" class="form-control m-auto" id="address" placeholder="">
                </div>
                <label class="col-md-2">Serial No Prefix</label>
            </div>

			</div>
			<div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div> -->
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->