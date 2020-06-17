

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-10">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-HumanResource_sub.php">Human Resource</a></li>
                    <li class="breadcrumb-item"><a href="Administration-HR-Setting_sub.php">HR Settings</a></li>
                    <li class="breadcrumb-item"><a href="admin_leave-group.php">Leave Group</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-9 m-auto">
			<div class="ms-panel w-100">
				
				<div class="ms-panel-body">

					<div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Leave Group: </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <strong>Regular Employees</strong>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Description: </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <span>All the employees of the institute can avail of this group of leaves.</span>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-9 text-md-right">
                                    <label>Leave Types: </label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>3</strong>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-9 text-md-right">
                                    <label>Assigned Employees: </label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>0</strong>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
					<hr>		

					<h6>Add Employees to Leave Group</h6>
					<small class="">Add employees who share the same leave type to this group. Search by Department or use the Advanced Search to find employees using different parameters.</small>

					<form class="needs-validation mb-3 mt-4" novalidate>
						<div class="form-row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-7">
										<label>Department</label>
										<div class="form-group">
											<select class="form-control" id="validationCustom25" required="">
						                        <option value="">Hostel</option>
						                    </select>
						                </div>
									</div>
									<div class="col-md-5">
										<button class="btn btn-default width70 mt30" type="submit">Advanced Search</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 mt-sm-4 mt-md-0">
								<div class="row">
									<div class="col-md-5"></div>
									<div class="col-md-7">
										<label>Search Employees</label>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search News" required>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>

					<div class="table-responsive mt-3">
	                    <table id="data-table-4" class="table w-100 thead-primary table-bordered ms-card">
	                        <thead>
	                            <tr>
	                                <th colspan="4">
	                                    <div class="form-check form-check-inline">
	                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
	                                        <label class="form-check-label" for="inlineCheckbox1">Name</label>
	                                    </div>
	                                </th>
	                                <th>Department</th>
	                                <th>Position</th>
	                                <th>Grade</th>
	                            </tr>
	                        </thead>
	                                    
	                        <tbody>
	                            <tr>
	                                <td colspan="4">
	                                    <div class="form-check form-check-inline">
	                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
	                                        <label class="form-check-label" for="inlineCheckbox2">Muneer Ahmed(E13)</label>
	                                    </div>
	                                </td>
	                                <td>Hostel</td>
	                                <td>Hostel Manager</td>
	                                <td></td>
	                                
	                            </tr>
	                            <tr>
	                                <td colspan="4">
	                                    <div class="form-check form-check-inline">
	                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
	                                        <label class="form-check-label" for="inlineCheckbox3">Muhammad Farooq(E17)</label>
	                                    </div>
	                                </td>
	                                <td>Hostel</td>
	                                <td>Computer Assistant</td>
	                                <td></td>
	                                
	                            </tr>
	                            <tr>
	                                <td colspan="4">
	                                    <div class="form-check form-check-inline">
	                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
	                                        <label class="form-check-label" for="inlineCheckbox4">Mudassir Hussain(E21)</label>
	                                    </div>
	                                </td>
	                                <td>Hostel</td>
	                                <td>Peon</td>
	                                <td></td>
	                                
	                            </tr>
	                           
	                        </tbody>
	                    </table>
	                </div>
					<div>
						<p class="m-0 d-inline">3 of 3 Employees Selected</p>
					    <p class="float-md-right">
					    	<button class="btn btn-primary width70 m-md-0" data-toggle="modal" data-target="#modal-1" type="submit">Add Employee to Leave Group</button>
					    	<button class="btn btn-primary width70 m-md-0" type="submit">Cancel</button>
					    </p>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>

<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title">Edit Leave Groups</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>All selected employees will be added to leave group <strong>Regular Employees</strong></p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none width70" data-toggle="modal" data-target="#modal-2" data-dismiss="modal">Ok</button>
                <button type="button" class="btn btn-light width30" data-dismiss="modal" >Cancel</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title">Leave Groups</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-2">Employees added to leave group <strong>Regular Employees</strong></p>
                        <i class="fa fa-check mb-2" aria-hidden="true"></i> 
                        <br>
                        <strong>Employees Added : 3 of 3 Employees</strong>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none width70" data-dismiss="modal">Ok</button>
            </div>

        </div>
    </div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



