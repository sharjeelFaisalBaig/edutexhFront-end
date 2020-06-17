

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">

        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>

                        <div class="dropdown text-right">
                            <a href="#" class="btn btn-primary">View All</a>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-md-6 m-auto">
                            <div class="row">
                                    <div class="col-md-4">
                                        <label class="">Hostel Name :</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleName" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Other Information :</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Gents</option>
                                            <option>Commeon</option>
                                            <option>Ladies</option>
                                        </select>
                                    </div>



                                </div>
                                </div>
                            <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-check-label" for="inlineCheckbox1">Hostel Address</label>

                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="exampleName" placeholder="">
                                        <div class="btn btn-success width70">Save</div>
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



