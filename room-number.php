

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
                    <li class="breadcrumb-item"><a href="Administration-Hostel-Sub.php">Hostel</a></li>
                    <li class="breadcrumb-item"><a href="room-details.php">Rooms Details</a></li>
                    <li class="breadcrumb-item active" aria-current="page">01</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-10 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>

                        <div class="dropdown text-right">
                            <a href="edit-room.php" class="btn btn-primary">Edit Rooms</a>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-6">
                                    <p class="">Hostel Name</p>
                                    <p class="">Room number</p>
                                    <p class="">Student per room</p>
                                    <p class="">Rent</p>
                                    <p class="">Is Air Conditioned?</p>
                                    <p class="">Is Furnished?</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-success">: &nbsp; Allama Iqbal</p>
                                    <p class="text-success">: &nbsp; 01</p>
                                    <p class="text-success">: &nbsp; 2</p>
                                    <p class="text-success">: &nbsp; 3000.00</p>
                                    <p class="text-success">: &nbsp; No</p>
                                    <p class="text-success">: &nbsp; No</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table id="" class="table w-100 mt-4 table-bordered thead-primary border-1">
                                    <thead>
                                    <tr>
                                        <th>Si No.</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Abdul Qudoos</td>
                                        <td>PG - Pink</td>
                                        <td class="text-right">
                                            <a href="change-allocation.php" class="nav-item">Change</a> |
                                            <a href="" class="nav-item">Vacate</a>
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



