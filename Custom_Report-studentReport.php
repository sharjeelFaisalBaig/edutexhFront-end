

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-6">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		            <li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data and Reports</a></li>
		            <li class="breadcrumb-item"><a href="Custom_Report.php">Custom Report</a></li>
		            <li class="breadcrumb-item active" aria-current="page">Student Report</li>
				</ol>
			</nav>
		</div>
		<!-- <div class="col-md-6 text-right">
			<button class="btn btn-primary width70 m-auto" data-toggle="modal" data-target=".bd-example-modal-lg" type="submit">New Student Report</button>
			<button class="btn btn-primary width70 m-auto" data-toggle="modal" data-target=".bd-example-modal-lg" type="submit">New Employee Report</button>
		</div> -->

		<div class="col-md-8 m-auto">

			<div class="ms-panel-body">
				<form class="needs-validation mb-5" novalidate>
					<div class="form-row">
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-3">
					                <label><strong>Name of the Report</strong></label>
								</div>
								<div class="col-md-6">
				                    <input type="text" class="form-control" placeholder="Student Report" required>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="table-responsive">
					<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered table-striped">
						<thead>
							<tr>
								<th colspan="3">Select the input criterias</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Addmission Date</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox2">Date of Birth</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox3">Country</label>
                                    </div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox4">Nationality</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox5">Student Category</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox6">Batch</label>
                                    </div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox7">Immediate Contact</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox8">Father</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox9">Mother</label>
                                    </div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox4">Addmission No.</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox5">First Name</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox6">Middle Name</label>
                                    </div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox4">Last Name</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox5">Gender</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox6">Blood Group</label>
                                    </div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox4">Language</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox5">Religion</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox6">City</label>
                                    </div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox4">State</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox5">Pin Code</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox6">Birth Place</label>
                                    </div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox4">Phone</label>
                                    </div>
								</td>
								<td>
									<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox5">Mobile</label>
                                    </div>
								</td>
								<td>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="table-responsive my-4">
					<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered table-striped">
						<thead>
							<tr>
								<th colspan="3">Input Criteria to be Used in Search</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Addmission Date</td>
								<td>
									<label class="text-right mr-1 w-25">Greater than</label>
									<select class="form-control d-inline w-auto h-auto py-0 px-3">
				                    </select>
									<select class="form-control d-inline w-auto h-auto py-0 px-3">
				                    </select>
									<select class="form-control d-inline w-auto h-auto py-0 px-3">
				                    </select>
								</td>
							</tr>
							<tr>
								<td>Addmission Date</td>
								<td>
									<label class="text-right mr-1 w-25">Less than</label>
									<select class="form-control d-inline w-auto h-auto py-0 px-3">
				                    </select>
									<select class="form-control d-inline w-auto h-auto py-0 px-3">
				                    </select>
									<select class="form-control d-inline w-auto h-auto py-0 px-3">
				                    </select>
								</td>
							</tr>
							<tr>
								<td>Addmission Date</td>
								<td>
									<label class="text-right mr-1 w-25">Equals</label>
									<select class="form-control d-inline w-auto h-auto py-0 px-3">
				                    </select>
									<select class="form-control d-inline w-auto h-auto py-0 px-3">
				                    </select>
									<select class="form-control d-inline w-auto h-auto py-0 px-3">
				                    </select>
								</td>
							</tr>
							<tr>
								<td>Country</td>
								<td>
				                    <input type="text" class="form-control d-inline w-50 h-auto py-1" name="" placeholder="Pakistan">
								</td>
							</tr>
							<tr>
								<td>Addmission No</td>
								<td>
									<label class="text-right mr-1 w-25">Like</label>
				                    <input type="text" class="form-control d-inline w-50 h-auto py-1" name="" placeholder="">
								</td>
							</tr>
							<tr>
								<td>Addmission No</td>
								<td>
									<label class="text-right mr-1 w-25">Begins with</label>
				                    <input type="text" class="form-control d-inline w-50 h-auto py-1" name="" placeholder="">
								</td>
							</tr>
							<tr>
								<td>Addmission No</td>
								<td>
									<label class="text-right mr-1 w-25">Equals</label>
				                    <input type="text" class="form-control d-inline w-50 h-auto py-1" name="" placeholder="">
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="row">
					<div class="col-md-5">
						<ul>
							<li class="border-1 p-2 alert alert-primary mt-4 mb-2">
								<strong>Select and Order the Fields to be Shown in the Report</strong>
							</li>
							<li class="border-1 p-2">
								Date of Birth
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Nationality
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Addmission No
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Middle Name
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Last Name
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Gender
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Blood Group
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Language
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Religion
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Address Line 1
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Address Line 2
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								City
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								State
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Pin Code
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
							<li class="border-1 p-2">
								Birth Place
								<button class="float-right btn btn-default p-0 m-0 width30">
									<i class="fas fa-caret-right text-danger"></i>
								</button> 
							</li>
						</ul>
					</div>
					<div class="col-md-7">
						<ul>
							<li class="border-1 p-2 alert alert-primary mt-4 mb-2">
								<strong>Review and Order the Fields as Required in the Report</strong>
							</li>
							<li class="border-1 p-2">
								<div class="row">
									<div class="col-3">
										First Name
									</div>
									<div class="col-5">
										<input type="text" class="form-control d-inline w-100 h-auto py-0 m-0" name="" placeholder="First Name">
									</div>
									<div class="col-4 text-right">
										<button class=" btn btn-default p-0 my-0 width30">
											<i class="fas fa-times text-danger m-0" style="font-size: 14px;"></i>
										</button> 
										<button class=" btn btn-default p-0 mx-1 my-0 width30">
											<i class="fas fa-caret-up text-danger m-0" style="font-size: 14px;"></i>
										</button> 
										<button class=" btn btn-default p-0 my-0 width30">
											<i class="fas fa-caret-down text-danger m-0" style="font-size: 14px;"></i>
										</button>
									</div>
								</div>
							</li>
							<li class="border-1 p-2">
								<div class="row">
									<div class="col-3">
										Addmission Date
									</div>
									<div class="col-5">
										<input type="text" class="form-control d-inline w-100 h-auto py-0 m-0" name="" placeholder="Addmission Date">
									</div>
									<div class="col-4 text-right">
										<button class=" btn btn-default p-0 my-0 width30">
											<i class="fas fa-caret-down text-danger m-0" style="font-size: 14px;"></i>
										</button>
										<button class=" btn btn-default p-0 mx-1 my-0 width30">
											<i class="fas fa-caret-up text-danger m-0" style="font-size: 14px;"></i>
										</button>
										<button class=" btn btn-default p-0 my-0 width30">
											<i class="fas fa-times text-danger m-0" style="font-size: 14px;"></i>
										</button> 
									</div>
								</div>
							</li>
							<li class="border-1 p-2">
								<div class="row">
									<div class="col-3">
										Country
									</div>
									<div class="col-5">
										<input type="text" class="form-control d-inline w-100 h-auto py-0 m-0" name="" placeholder="Country">
									</div>
									<div class="col-4 text-right">
										<button class=" btn btn-default p-0 my-0 width30">
											<i class="fas fa-caret-down text-danger m-0" style="font-size: 14px;"></i>
										</button>
										<button class=" btn btn-default p-0 mx-1 my-0 width30">
											<i class="fas fa-caret-up text-danger m-0" style="font-size: 14px;"></i>
										</button>
										<button class=" btn btn-default p-0 my-0 width30">
											<i class="fas fa-times text-danger m-0" style="font-size: 14px;"></i>
										</button> 
									</div>
								</div>
							</li>
							<li class="border-1 p-2">
								<div class="row">
									<div class="col-3">
										Batch
									</div>
									<div class="col-5">
										<input type="text" class="form-control d-inline w-100 h-auto py-0 m-0" name="" placeholder="Batch">
									</div>
									<div class="col-4 text-right">
										<button class=" btn btn-default p-0 my-0 width30">
											<i class="fas fa-caret-down text-danger m-0" style="font-size: 14px;"></i>
										</button>
										<button class=" btn btn-default p-0 mx-1 my-0 width30">
											<i class="fas fa-caret-up text-danger m-0" style="font-size: 14px;"></i>
										</button>
										<button class=" btn btn-default p-0 my-0 width30">
											<i class="fas fa-times text-danger m-0" style="font-size: 14px;"></i>
										</button> 
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Publishing News </h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation mb-2" novalidate>
					<div class="form-row">
						<div class="col-md-6">
							<label for="validationCustom03">Title</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="" required>
								<div class="invalid-feedback">This Field is Required</div>
							</div>
						</div>
						<div class="col-md-10">
							<label for="validationCustom03">Body</label>
							<div class="input-group">
								<textarea class="form-control" id="validationCustom03" rows="9" placeholder=""></textarea>
							</div>
						</div>
						<div class="col-md-4">
							<label for="validationCustom03">Attach files (5MB max)</label>
							<div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">No file Selected...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
						</div>

					</div>
				</form>
			</div>

			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-primary shadow-none" type="submit"></button> -->
				<button type="button" class="btn btn-primary" data-dismiss="modal">Publish News</button>
			</div>

		</div>
	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



