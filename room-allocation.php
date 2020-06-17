

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
                    <li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Hostel</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Room Allocation</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">

                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Search Student</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table w-100 mt-4 table-bordered thead-primary border-1">
                            <thead>
                                <tr>
                                <th>Si No.</th>
                                <th>Name</th>
                                <th>Batch</th>
                                <th>Admin No.</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="student-name-allocate.php">Sabiha</a></td>
                                    <td>PG - Pink</td>
                                    <td>S42</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="student-name-allocate.php">Shabana</a></td>
                                    <td>PG - Pink</td>
                                    <td>S42</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="student-name-allocate.php">Sabiha</a></td>
                                    <td>G1 - A - 2020</td>
                                    <td>S117</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="student-name-allocate.php">Shabana</a></td>
                                    <td>G1 - A - 2020</td>
                                    <td>S118</td>
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
				<h6 class="modal-title has-icon ms-icon-round ">Edit Passport Number </h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form method="post">
					<div class="form-group ">
						<label for="examplePassword">Passport Number : </label>
						<input type="text" class="form-control" id="examplePassword" placeholder="">
					</div>
				</form>
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



