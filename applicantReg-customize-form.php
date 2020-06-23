<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="ms-panel-header pt-0">
				<h6 class="d-md-inline"><i class="fas fa-user-alt"></i> Applicant Registration</h6> |  <small>Customize Form</small>
				<div class="float-md-right">
					<a href="javascript:void(0);" data-toggle="modal" data-target="#modal-1" class="btn btn-success m-md-auto">Add New Section</a>
					<a href="javascript:void(0);" data-toggle="modal" data-target=".bd-example-modal-lg2" class="btn btn-success m-md-auto">Reorder Sections</a>
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
					<li class="breadcrumb-item"><a href="ApplicantRegistration_Setting.php">Settings</a></li>
					<li class="breadcrumb-item active" aria-current="page">Customize Form</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-9 m-auto">
			<div class="ms-panel-body">

				<h6 class="mb-4">Customize Application Form</h6>
				<small>Customize the application form based on your requirements. All the courses of this organization will be having this form by default. If required, this form can be customized for each course too.</small>
				<div class="row mt-4">
					<div class="col-md-6">
						<p class="font-weight-bold">Student Personal Details</p>
					</div>
					<div class="col-md-6 text-md-right font-weight-bold">
						<a href="javascript:void(0);"  data-toggle="modal" data-target=".bd-example-modal-lg3">Reorder Fields</a> &nbsp;&nbsp;&nbsp;
						<a href="javascript:void(0);"  data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add New Fields</a>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary border-1">
						<tbody>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">First Name</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Middle Name</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Last Name</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Date of Birth</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Gender</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Nationality</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Student Photo</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Student Category</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row mt-4">
					<div class="col-md-6">
						<p class="font-weight-bold">
							Sibling Information &nbsp;&nbsp;&nbsp; 
							<a href="javascript:void(0);">Edit</a>&nbsp;&nbsp;&nbsp;
							<a href="javascript:void(0);">Delete</a>
						</p>
					</div>
					<div class="col-md-6 text-md-right font-weight-bold">
						<a href="javascript:void(0);" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add New Fields</a>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary border-1">
						<thead>
							<tr>
								<th width="80">
									<input class="form-check-input ml-0 mt-0" type="checkbox" id="inlineCheckbox1" value="option1" style="position: unset;">
								</th>
								<th width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Select Fields</label>
								</th>
								<th width="500">
									Mandatory
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="border-bottom">
								<td colspan="3">No Fields Added.</td>
							</tr>
						</tbody>
					</table>
				</div>
			<!-- --------------------------------------------------------------------------------- -->
				<div class="row mt-4">
					<div class="col-md-6">
						<p class="font-weight-bold">Student Communication Details</p>
					</div>
					<div class="col-md-6 text-md-right font-weight-bold">
						<a href="javascript:void(0);"  data-toggle="modal" data-target=".bd-example-modal-lg3">Reorder Fields</a> &nbsp;&nbsp;&nbsp;
						<a href="javascript:void(0);"  data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add New Fields</a>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary border-1">
						<thead>
							<tr>
								<th width="80">
									<input class="form-check-input ml-0 mt-0" type="checkbox" id="inlineCheckbox1" value="option1" style="position: unset;">
								</th>
								<th width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Select Fields</label>
								</th>
								<th width="500">
									Mandatory
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Address Line 1</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Address Line 2</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">City</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">State</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Pin Code</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Country</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Phone</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Mobile</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">E-mail</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<!-- --------------------------------------------------------------------------------- -->
				<div class="row mt-4">
					<div class="col-md-6">
						<p class="font-weight-bold">
							Elective Subjects 
						</p>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary border-1">
						<thead>
							<tr>
								<th width="80">
									<input class="form-check-input ml-0 mt-0" type="checkbox" id="inlineCheckbox1" value="option1" style="position: unset;">
								</th>
								<th width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Select Fields</label>
								</th>
								<th width="500">
									Mandatory
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Choose Electives</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<!-- --------------------------------------------------------------------------------- -->		
				<div class="row mt-4">
					<div class="col-md-6">
						<p class="font-weight-bold">Previous Institution Details</p>
					</div>
					<div class="col-md-6 text-md-right font-weight-bold">
						<a href="javascript:void(0);"  data-toggle="modal" data-target=".bd-example-modal-lg3">Reorder Fields</a> &nbsp;&nbsp;&nbsp;
						<a href="javascript:void(0);"  data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add New Fields</a>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary border-1">
						<thead>
							<tr>
								<th width="80">
									<input class="form-check-input ml-0 mt-0" type="checkbox" id="inlineCheckbox1" value="option1" style="position: unset;">
								</th>
								<th width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Select Fields</label>
								</th>
								<th width="500">
									Mandatory
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Institution Name</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Qualifying Exam Name</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Exam Roll No.</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Final Score</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<!-- --------------------------------------------------------------------------------- -->	
				<h6 class="mt-4">Guardian Details</h6>
				<small>Guardian details of the applicant can be collected in this section</small>
				<br>
				<div class="form-group mt-2">
				<label class="d-inline">Number of Mandatory Guardian Details</label>
					<select class="form-control d-inline" style="width: 70px;">
						<option>1</option>
					</select>
				</div>

				<div class="row mt-4">
					<div class="col-md-6">
						<p class="font-weight-bold">Guardian Personal Details</p>
					</div>
					<div class="col-md-6 text-md-right font-weight-bold">
						<a href="javascript:void(0);"  data-toggle="modal" data-target=".bd-example-modal-lg3">Reorder Fields</a> &nbsp;&nbsp;&nbsp;
						<a href="javascript:void(0);"  data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add New Fields</a>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary border-1">
						<thead>
							<tr>
								<th width="80">
									<input class="form-check-input ml-0 mt-0" type="checkbox" id="inlineCheckbox1" value="option1" style="position: unset;">
								</th>
								<th width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Select Fields</label>
								</th>
								<th width="500">
									Mandatory
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">First Name</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Last Name</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Relation</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Date of Birth</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Education</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Occupation</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Income</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<!-- --------------------------------------------------------------------------------- -->
				<div class="row mt-4">
					<div class="col-md-6">
						<p class="font-weight-bold">Guardian Contact Details</p>
					</div>
					<div class="col-md-6 text-md-right font-weight-bold">
						<a href="javascript:void(0);"  data-toggle="modal" data-target=".bd-example-modal-lg3">Reorder Fields</a> &nbsp;&nbsp;&nbsp;
						<a href="javascript:void(0);"  data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add New Fields</a>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary border-1">
						<thead>
							<tr>
								<th width="80">
									<input class="form-check-input ml-0 mt-0" type="checkbox" id="inlineCheckbox1" value="option1" style="position: unset;">
								</th>
								<th width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Select Fields</label>
								</th>
								<th width="500">
									Mandatory
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Office Address Line 1</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Office Address Line 2</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">City</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">State</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Country</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Office Phone 1</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Office Phone 2</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Mobile</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">E-mail</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<!-- --------------------------------------------------------------------------------- -->
				<div class="row mt-4">
					<div class="col-md-6">
						<p class="font-weight-bold">
							Sibling Information &nbsp;&nbsp;&nbsp; 
							<a href="javascript:void(0);">Edit</a>&nbsp;&nbsp;&nbsp;
						</p>
					</div>
					<div class="col-md-6 text-md-right font-weight-bold">
						<a href="javascript:void(0);" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add New Fields</a>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary border-1">
						<thead>
							<tr>
								<th width="80">
									<input class="form-check-input ml-0 mt-0" type="checkbox" id="inlineCheckbox1" value="option1" style="position: unset;">
								</th>
								<th width="730">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Select Fields</label>
								</th>
								<th width="350">
									Mandatory
								</th>
								<th width="150"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Office Address Line 1</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
								<td>
									<a href="javascript">Edit</a> | 
									<a href="javascript">Delete</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<!-- --------------------------------------------------------------------------------- -->
				<div class="row mt-4 mb-3">
					<div class="col-md-10">
						<p class="font-weight-bold">Attachments</p>
						<small>Attachments of the applicants in this section will be transferred to Student's Profile while addmission. Size of an uploaded file must be less than 5 MB.</small>
					</div>
					<div class="col-md-2 text-md-right font-weight-bold">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#modal-2"><i class="fas fa-plus"></i> Add New Fields</a>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary border-1">
						<thead>
							<tr>
								<th width="80">
									<input class="form-check-input ml-0 mt-0" type="checkbox" id="inlineCheckbox1" value="option1" style="position: unset;">
								</th>
								<th width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Select Fields</label>
								</th>
								<th width="500">
									Mandatory
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="border-bottom">
								<td colspan="3">No Fields Added.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="row mt-4 mb-3">
					<div class="col-md-10">
						<p class="font-weight-bold">Attachments</p>
						<small>Attachments of the applicants in this section will be transferred to Student's Profile while addmission. Size of an uploaded file must be less than 5 MB.</small>
					</div>
					<div class="col-md-2 text-md-right font-weight-bold">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#modal-2"><i class="fas fa-plus"></i> Add New Fields</a>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary border-1">
						<thead>
							<tr>
								<th width="80">
									<input class="form-check-input ml-0 mt-0" type="checkbox" id="inlineCheckbox1" value="option1" style="position: unset;">
								</th>
								<th width="730">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Select Fields</label>
								</th>
								<th width="350">
									Mandatory
								</th>
								<th width="150"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="border-bottom">
								<td width="80">
									<input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
								</td>
								<td width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Attach Student Photo</label>
								</td>
								<td width="500">
									<input class="form-check-input ml-0" type="checkbox" id="" value="">
								</td>
								<td>
									<a href="javascript">Edit</a> | 
									<a href="javascript">Delete</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<!-- ---------------------------------------------------------------------------------- -->
				<div class="row mt-4 mb-3">
					<div class="col-md-10">
						<p class="font-weight-bold">Administration Section</p>
						<small>Attachments of the applicants in this section will be transferred to Student's Profile while addmission. Size of an uploaded file must be less than 5 MB.</small>
					</div>
					<div class="col-md-2 text-md-right font-weight-bold">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#modal-2"><i class="fas fa-plus"></i> Add New Fields</a>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary border-1">
						<thead>
							<tr>
								<th width="80">
									<input class="form-check-input ml-0 mt-0" type="checkbox" id="inlineCheckbox1" value="option1" style="position: unset;">
								</th>
								<th width="500">
									<label class="form-check-label cursor-pointer" for="inlineCheckbox1">Select Fields</label>
								</th>
								<th width="500">
									Mandatory
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="border-bottom">
								<td colspan="3">No Fields Added.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<hr>
				<a href="javascript:void(0);" class="btn btn-primary width70">Save Changes</a>
				<a href="javascript:void(0);" class="btn btn-primary width70">Cancel</a>


			</div>
		</div>
	</div>
</div>


<!-- Add Section -->
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-3" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title">Create a Form Section</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>

			<div class="modal-body">
				<form class="need-validation" novalidate="">
					<small>Form Sections are used to group relevent fields in the application. While naming a section, be sure that the name represents the fields inside the section.</small>
					<br>
					<label class="mt-4">Name</label>
					<div class="form-group">
						<input type="text" class="form-control w-50" placeholder="Sibling Information">
					</div>
					<label class="mt-4">Description</label>
					<div class="form-group">
						<textarea class="form-control w-75" placeholder="" rows="5"></textarea>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" data-dismiss="modal">Create Section</button>
			</div>

		</div>
	</div>
</div>

<!-- Add New Field -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title">Add a New Input Field</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>

			<div class="modal-body">
				<form class="need-validation" novalidate="">
					<small>New fields created in applicant registration can be used only for applicant evaluation. They cannot be linked to student's profile during addmission.</small>

					<div class="row">
						<div class="col-md-6 my-3">
							<label>Field Name<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="" placeholder="Sibling Name" required="">
						</div>
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<label>Input Method</label>
							<select class="form-control">
								<option>Single-line Text</option>
							</select>
						</div>
						<div class="col-md-6"></div>
						<div class="col-md-6 my-3">
							<label>Record Type</label>
							<select class="form-control w-100">
								<option>Alphanumeric (A-Z, 0-9)</option>
							</select>		
						</div>
						<div class="col-md-6 mt-3">
							<label>Input Suffix</label>
							<input type="text" class="form-control w-100" name="" required="">
						</div>
						<div class="col-md-3">
							<div class="custom-control custom-radio custom-control mt-3">
								<input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
								<label class="custom-control-label" for="customRadio">Optional Field</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="custom-control custom-radio custom-control mt-3">
								<input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
								<label class="custom-control-label" for="customRadio2">Mandatory Field</label>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" data-dismiss="modal">Create Field</button>
			</div>

		</div>
	</div>
</div>

<!-- Reorder Sections -->
<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header bg-primary">
				<h6 class="modal-title has-icon text-dark">Reorder Application Form Sections</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<div class="ms-panel-body">
					<div class="row">
						<div class="col-md-12">
							<small class="section-title">You can drag and drop each section to rearrange the order in which the sections will be shown in the application form.</small>

							<ul class="ms-list ms-sortable-list ms-card border-bottom-0 mt-4">
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<strong>Reorder Section</strong>
									</div>
									<div class="media-body text-right">
										<a href="javascript:void(0);">Reset Order</a>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Student Personal Details</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Student Communication Details</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Elective Subjects</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Previous Institution Details</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Guardian Details</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Sibling Information</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Attachments</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Administration Section</span>
									</div>
								</li>
							</ul>

						</div>
					</div>
				</div>  
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" data-dismiss="modal">Save Order</button>
			</div>

		</div>
	</div>
</div>

<!-- Reorder Fields -->
<div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header bg-primary">
				<h6 class="modal-title has-icon text-dark">Reorder Application Form Fields</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<div class="ms-panel-body">
					<div class="row">
						<div class="col-md-12">
							<h6>Student Personal Details</h6>

							<ul class="ms-list ms-sortable-list ms-card border-bottom-0 mt-4">
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<strong>Reorder Fields</strong>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>First Name</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Middle Name</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Last Name</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Date of Birth</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Gender</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Nationality</span>
									</div>
								</li>
								<li class="ms-list-item media border-bottom mb-0">
									<i class="fas fa-bars"></i>
									<div class="media-body">
										<span>Student Photo</span>
									</div>
								</li>
							</ul>

						</div>
					</div>
				</div>  
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" data-dismiss="modal">Save Order</button>
			</div>

		</div>
	</div>
</div>

<!-- Add New Attachment -->
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-3" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title">Add a New Attachment Field</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>

			<div class="modal-body">
				<form class="need-validation" novalidate="">
					<small>Applicant attachment for this field will be transferred to Subject's Profile while addmission.</small>

					<div class="row">
						<div class="col-md-8 my-3">
							<label>Name<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="" placeholder="Attach Student Photo" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="custom-control custom-radio custom-control mt-3">
								<input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx" checked="">
								<label class="custom-control-label" for="customRadio">Optional Field</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="custom-control custom-radio custom-control mt-3">
								<input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
								<label class="custom-control-label" for="customRadio2">Mandatory Field</label>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="submit" class="btn btn-primary shadow-none" data-dismiss="">Create Field</button>
			</div>

		</div>
	</div>
</div>

<?php include_once('footer.php')?>