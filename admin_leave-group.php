

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-HumanResource_sub.php">Human Resource</a></li>
                    <li class="breadcrumb-item"><a href="Administration-HR-Setting_sub.php">HR Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Leave Groups</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-4 text-right">
            <a href="" data-toggle="modal" data-target="#modal-3" class="btn m-0 btn-success">Create Leave Groups</a>
        </div>
        <div class="col-md-9 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body"> 
                    <!-- <div class="alert alert-warning text-center my-4">
                        <strong>Leave group updated</strong>
                    </div> -->
                    <h6>Leave Group</h6>
                    <small class="my-3">Create a leave group to group leave types and assign employee to the group who share the same leaves. Manage leave types and employees in the group by clicking on the group.</small>

                    <div class="table-responsive">
                        <table id="" class="table w-100 mt-4 thead-primary table-bordered">
                            <thead>
                                <tr>
                                    <th>Leave Group Name</th>
                                    <th>Leave Types</th>
                                    <th>Employees</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">Create Leave Group</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-warning text-center my-4">
                        <strong>Leave group Created</strong>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Leave Group: </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <strong>Regular Employees</strong>&nbsp;&nbsp;&nbsp;<a href="" data-toggle="modal" data-target="#modal-1">Edit</a>
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
                                        <strong>0</strong>
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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Assigned Leave Types</strong>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <a href="" data-toggle="modal" data-target="#modal-4">
                                        <i class="fas fa-plus">&nbsp;&nbsp;&nbsp;Manage Leave Types</i>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive mt-3">
                                        <table id="data-table-4" class="table w-100 thead-primary table-bordered ms-card">
                                            <thead>
                                                <tr>
                                                    <th>Leave Type</th>
                                                    <th>Leave Count</th>
                                                    <th></th>
                                                </tr>
                                            </thead>        
                                            <tbody>
                                                <tr>
                                                    <td>Casual Leave(CL)</td>
                                                    <td>20</td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#modal-2">Remove</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Earned Leave(EL)</td>
                                                    <td>48</td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#modal-2">Remove</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Recreational Leave(RL)</td>
                                                    <td>15</td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#modal-2">Remove</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Employee Summary</strong>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <a href="admin_leave-group-manage-employee.php">
                                        <i class="fas fa-plus">&nbsp;&nbsp;&nbsp;Manage Employees</i>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive mt-3">
                                        <table id="data-table-4" class="table w-100 thead-primary table-bordered ms-card">
                                            <thead>
                                                <tr>
                                                    <th>Department</th>
                                                    <th>Employees</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                                        
                                            <tbody>
                                                <tr>
                                                    <td>Hostel</td>
                                                    <td>3</td>
                                                    <td>
                                                        <a href="admin_leave-group-manage-employee.php">View Employees</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <strong>Employee Summary</strong>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <a href="admin_leave-group-add-employee.php">
                                        <i class="fas fa-plus">&nbsp;&nbsp;&nbsp;Add Employees</i>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body bg-light mt-3" style="height: 300px;">
                                        <p class="text-white text-justify mt-5">
                                            Add Employees who will inherit all the leave types of this leave group
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title">Create Leave Groups</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
                <form>
                    <small>Create a leave group to group leave types and assign employees to the group who share the same leaves.</small>
                    <div class="row mt-4">
                        <div class="col-md-9">
                            <label class="">Name of Leave Group</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleName" placeholder="Regular Employees">
                            </div>
                            <label class="">Description</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none">Create Leave Group</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
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
                <form>
                    <small>Create a leave group to group leave types and assign employees to the group who share the same leaves.</small>
                    <div class="row mt-4">
                        <div class="col-md-9">
                            <label class="">Name of Leave Group</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleName" placeholder="Regular Employees">
                            </div>
                            <label class="">Description</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none">Update Leave Group</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title">Remove Leave Type</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>The leave type <strong>Casual Leave (CL) </strong>will be removed from leave group <strong>Regular Employees</strong></p>
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
                <h6 class="modal-title">Manage Leave Types for Leave Groups</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <small>Select from the list of the leave types that can be added to this leave group.</small>
                <div class="table-responsive mt-3">
                    <table id="data-table-4" class="table w-100 thead-primary table-bordered ms-card">
                        <thead>
                            <tr>
                                <th colspan="4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Leave Type</label>
                                    </div>
                                </th>
                                <th>Leave Count</th>
                            </tr>
                        </thead>
                                    
                        <tbody>
                            <tr>
                                <td colspan="4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox2">Casual Leave(CL)</label>
                                    </div>
                                </td>
                                <td width="150">
                                    <input type="text" class="form-control m-0 p-0 h-auto" placeholder="20" name="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox3">Earned Leave(EL)</label>
                                    </div>
                                </td>
                                <td width="150">
                                    <input type="text" class="form-control m-0 p-0 h-auto" placeholder="20" name="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox4">Maternity Leave(ML)</label>
                                    </div>
                                </td>
                                <td width="150">
                                    <input type="text" class="form-control m-0 p-0 h-auto" placeholder="20" name="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox5">Recreational Leave(RL)</label>
                                    </div>
                                </td>
                                <td width="150">
                                    <input type="text" class="form-control m-0 p-0 h-auto" placeholder="20" name="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none">Add to Group</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>



<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



