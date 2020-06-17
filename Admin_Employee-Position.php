

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
                    <li class="breadcrumb-item active" aria-current="page">Employee Position</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <form class="need-validation w-50 m-auto" novalidate="">
                        <div class="row">
                            <div class="col-md-5">
                                <label class="">Name</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleName" placeholder="Examination Manager">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <label class="">Employee Category</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Non Teaching Staff</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-5">
                                <label class="">Status :</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item m-0 p-1">
                                            <label class="ms-checkbox-wrap">
                                                <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> Active </span>
                                        </li>
                                        <li class="ms-list-item  m-0  p-1">
                                            <label class="ms-checkbox-wrap">
                                                <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> Inactive </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn btn-primary width70">Create</div>
                            </div>
                        </div>
                    </form>                        
                    
                    <div class="table-responsive">
                        <table id="" class="table w-100 mt-4 thead-primary border-1">
                            <thead>
                                <tr>
                                    <th colspan="3">Active Fields</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>Assistant Professor(TS)</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Associate Professor(TS)</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Computer Assistant(NTS)</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Hostel Manager(NTS)</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Inventory Manager(NTS)</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Junior Teacher(TS)</td>
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
				<h6 class="modal-title">Edit Employee Position</h6>
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
                                <input type="text" class="form-control" id="exampleName" placeholder="Examination Manager">
                            </div>
                        </div>
                    </div>
                </form>
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="">Employee Category</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="">Non Teaching Staff</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="">Status :</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <ul class="ms-list d-flex">
                                <li class="ms-list-item m-0 p-1">
                                    <label class="ms-checkbox-wrap">
                                        <input type="radio" name="radioExample2" value=""> <i class="ms-checkbox-check"></i>
                                    </label>
                                    <span> Active </span>
                                </li>
                                <li class="ms-list-item  m-0  p-1">
                                    <label class="ms-checkbox-wrap">
                                        <input type="radio" name="radioExample2" checked="" value=""> <i class="ms-checkbox-check"></i>
                                    </label>
                                    <span> Inactive </span>
                                </li>
                            </ul>
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



