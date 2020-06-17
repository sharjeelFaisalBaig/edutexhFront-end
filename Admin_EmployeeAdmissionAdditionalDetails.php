

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                    <li class="breadcrumb-item"><a href="Administration-HumanResource_sub.php">Human Resource</a></li>
                    <li class="breadcrumb-item"><a href="Administration-HR-Setting_sub.php">HR Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Employee Addmission Additional Details</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <form class="need-validation w-50 m-auto" novalidate="">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Name</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleName" placeholder="CNIC">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Status</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item m-0 p-1">
                                            <label class="ms-checkbox-wrap">
                                                <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span>Active</span>
                                        </li>
                                        <li class="ms-list-item  m-0  p-1">
                                            <label class="ms-checkbox-wrap">
                                                <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span>Inactive</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">In mandatory</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <ul class="ms-list d-flex">
                                        <li class="m-auto">
                                            <input type="checkbox" value="" checked="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Input method</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>TextBox</option>
                                        <option>Text Area</option>
                                        <option>Select Box</option>
                                        <option>CheckBox</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                            <a href=""><i class="fas fa-times text-danger"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                            <a href=""><i class="fas fa-times text-danger"></i></a> 
                                        </span>
                                    </div>
                                </div>
                                <a href="" class="text-success">Add</a>
                                <br>
                                <div class="btn btn-primary width70">Create</div>
                                
                            </div>
                        </div>
                    </form>
                    <div class="alert alert-warning text-center my-4">
                        <strong>No Additional Details Record Find</strong>
                    </div>

                    <div class="table-responsive">
                        <table id="" class="table w-100 mt-4 thead-primary border-1">
                            <thead>
                                <tr>
                                    <th colspan="4">Active Fields</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>CNIC</td>
                                    <td class="text-left">
                                        <i class="fas fa-caret-down"></i>
                                    </td>
                                    <td class="text-right">
                                        <a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Height</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <i class="fas fa-caret-down"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <i class="fas fa-caret-up"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Weight</td>
                                    <td class="text-right">
                                        <i class="fas fa-caret-up"></i>
                                    </td>
                                    <td class="text-right">
                                        <a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
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

<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Edit Employee Additional Details </h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="">Name</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleName" placeholder="CNIC">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-4">
                        <label class="">Status</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <ul class="ms-list d-flex">
                                <li class="ms-list-item m-0 p-1">
                                    <label class="ms-checkbox-wrap">
                                        <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                                    </label>
                                    <span>Active</span>
                                </li>
                                <li class="ms-list-item  m-0  p-1">
                                    <label class="ms-checkbox-wrap">
                                        <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                                    </label>
                                    <span>Inactive</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="">In mandatory</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <ul class="ms-list d-flex">
                                <li class="m-auto">
                                    <input type="checkbox" value="" checked="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="">Input method</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control">
                                <option>TextBox</option>
                                <option>Text Area</option>
                                <option>Select Box</option>
                                <option>CheckBox</option>
                            </select>
                        </div>
                    </div>
                </div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none">Update</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>

		</div>
	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



