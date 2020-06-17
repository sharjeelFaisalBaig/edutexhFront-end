

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
                    <li class="breadcrumb-item active" aria-current="page">Report</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>

                        <div class="dropdown text-right">
                            <a href="#" class="btn btn-primary">Export CSV</a>
                        </div>
                    </div>
                </div>
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
                                <th>No.</th>
                                <th>Name</th>
                                <th>Hostel Type</th>
                                <th>Total rooms</th>
                                <th>Available rooms</th>
                                <th>Occupied</th>
                                <th>Warden</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Allama Iqbal</td>
                                    <td>Gents</td>
                                    <td>10</td>
                                    <td>8</td>
                                    <td>2</td>
                                    <td>Muhammad Saleem</td>
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
				<h6 class="modal-title has-icon ms-icon-round ">Edit Fee Collection Date </h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">

                    <div class="row">
                        <div class="col-md-4">
                            <label class="">Name  <span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleName" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="">Start Date<span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="datetime-local" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="">Due Date<span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="datetime-local" class="form-control">
                            </div>
                        </div>
                    </div>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none">Update</button>
			</div>

		</div>
	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



