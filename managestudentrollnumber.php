

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
					<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
					<li class="breadcrumb-item active" aria-current="page">Manage Students Roll Number</li>
				</ol>
			</nav>
		</div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">

                <div class="ms-panel-body">
                    <form>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="">Sort Student Base On:</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Admission no</option>
                                        <option>Last name</option>
                                        <option>First name</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="btn btn-primary m-0">Save</div>
                                <div class="btn btn-primary m-0">Cancel</div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table id="" class="table w-100 thead-primary table-bordered">
                            <thead>
                            <tr>
                                <th>Course name</th>
                                <th>Roll number prefix</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Grade 2</td>
                                <td>G2</td>
                                <td>
                                    <a href="ManageRollNo_ViewBatch.php" class="text-black"> View Batches &nbsp;</a>
                                    <a href="#" class="text-black" data-toggle="modal" data-target="#roll-num" > Edit roll number prefix&nbsp; </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Grade 1</td>
                                <td>G1</td>
                                <td>
                                    <a href="ManageRollNo_ViewBatch.php" class="text-black"> View Batches &nbsp;</a>
                                    <a href="#" class="text-black" data-toggle="modal" data-target="#roll-num" > Edit roll number prefix&nbsp; </a>
                                </td>
                            </tr>
                            <tr>
                                <td>PG</td>
                                <td>G2</td>
                                <td>
                                    <a href="ManageRollNo_ViewBatch.php" class="text-black"> View Batches &nbsp;</a>
                                    <a href="#" class="text-black" data-toggle="modal" data-target="#roll-num" > Edit roll number prefix&nbsp; </a>
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

<div class="modal fade" id="roll-num" tabindex="-1" role="dialog" aria-labelledby="modal-3">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Set/Edit roll number prefix </h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form method="post">
					<div class="form-group">
						<label for="examplePassword">Roll number prefix : </label>
						<input type="text" class="form-control" id="examplePassword" placeholder="Roll num">
                        <small>Max 6 characters</small>
                    </div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none">Save</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>

		</div>
	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



