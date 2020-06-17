

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-9">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-HumanResource_sub.php">Human Resource</a></li>
                    <li class="breadcrumb-item"><a href="Administration-HR-Setting_sub.php">HR Settings</a></li>
                    <li class="breadcrumb-item"><a href="admin_leave-group.php">Leave Group</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage/View Employee</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-3 text-md-right">
			<a href="admin_leave-group-add-employee.php" class="btn m-auto btn-success">Add Employee</a>
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

					<h6>Employees to Leave Group</h6>
					<small class="">Manage employees of this group. Search by department employee name / number or use the Advanced Search to find employees using different parameters.</small>

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
										<button class="btn btn-default width70 mt30" data-toggle="modal" data-target="#modal-4">Advanced Search</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 mt-sm-4 mt-md-0">
								<div class="row">
									<div class="col-md-5"></div>
									<div class="col-md-7">
										<label>Search Employees</label>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search" required>
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
	                                <th>Name</th>
	                                <th>Department</th>
	                                <th>Position</th>
	                                <th>Grade</th>
	                                <th></th>
	                            </tr>
	                        </thead>
	                                    
	                        <tbody>
	                            <tr>
	                                <td>Muneer Ahmed(E13)</td>
	                                <td>Hostel</td>
	                                <td>Hostel Manager</td>
	                                <td></td>
	                                <td>
	                                	<a href="" data-toggle="modal" data-target="#modal-3">Remove</a>
	                                </td>
	                                
	                            </tr>
	                            <tr>
	                                <td>Muhammad Farooq(E17)</td>
	                                <td>Hostel</td>
	                                <td>Computer Assistant</td>
	                                <td></td>
	                                <td>
	                                	<a href="" data-toggle="modal" data-target="#modal-3">Remove</a>
	                                </td>
	                                
	                            </tr>
	                            <tr>
	                                <td>Mudassir Hussain(E21)</td>
	                                <td>Hostel</td>
	                                <td>Peon</td>
	                                <td></td>
	                                <td>
	                                	<a href="" data-toggle="modal" data-target="#modal-3">Remove</a>
	                                </td>
	                                
	                            </tr>
	                           
	                        </tbody>
	                    </table>
	                </div>
					<div>
						<p class="m-0 d-inline">Showing 3 Employees</p>
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

<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title">Remove Employee from Leave Group</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>The employee <strong>Muneer Ahmed (E13) </strong>will be deleted from leave group <strong>Regular Employees</strong></p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none">Remove</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title">Advanced Search for Employees</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
            	<small>Specify search criterias for filtering employees in your organizations.</small>
                <form class="need-validation mt-3" novalidate="">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="">Department</label>
                        </div>
                        <div class="col-md-7">
                        	<div class="form-group">
                                <select class="form-control">
                                    <option value="">Select Employee Department</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="">Position</label>
                        </div>
                        <div class="col-md-7">
                        	<div class="form-group">
                                <select class="form-control">
                                    <option value="">Select Employee Position</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="">Grade</label>
                        </div>
                        <div class="col-md-7">
                        	<div class="form-group">
                                <select class="form-control">
                                    <option value="">Select Employee Grade</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <label class="">Gender</label>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <ul class="ms-list d-flex">
                                    <li class="ms-list-item m-0 p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> All </span>
                                    </li>
                                    <li class="ms-list-item m-0 p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Male </span>
                                    </li>
                                    <li class="ms-list-item  m-0  p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Female </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="">Category</label>
                        </div>
                        <div class="col-md-7">
                        	<div class="form-group">
                                <select class="form-control">
                                    <option value="">Select Employee Category</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="">Payroll Group</label>
                        </div>
                        <div class="col-md-7">
                        	<div class="form-group">
                                <select class="form-control">
                                    <option value="">Select a Payroll Group</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none">Search Employees</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



