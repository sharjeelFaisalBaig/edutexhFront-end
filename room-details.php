

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
                    <li class="breadcrumb-item active" aria-current="page">Rooms Details</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>

                        <div class="dropdown text-right">
                            <a href="add-room-detail.php" class="btn btn-primary">Add Rooms</a>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Select a Hostel:</label>
                        </div>
                        <div class="col-md-4">
                            <select name="" id="" class="form-control">
                                <option value="">Allama Iqbal</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table w-100 mt-4 table-bordered thead-primary border-1">
                            <thead>
                                <tr>
                                <th>Si No.</th>
                                <th>Room number</th>
                                <th>Students per room</th>
                                <th>Availabilty</th>
                                <th>Rent</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>01</td>
                                <td>2</td>
                                <td>2</td>
                                <td>3000.00</td>
                                <td class="text-right">
                                    <a href="" class="nav-item">Edit</a> |
                                    <a href="" class="nav-item">Delete</a>
                                </td>
                            </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>3000.00</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>03</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>3000.00</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>04</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>3000.00</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>05</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>3000.00</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>06</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>3000.00</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>07</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>3000.00</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>08</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>3000.00</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>09</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>3000.00</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item">Edit</a> |
                                        <a href="" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>3000.00</td>
                                    <td class="text-right">
                                        <a href="" class="nav-item">Edit</a> |
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



