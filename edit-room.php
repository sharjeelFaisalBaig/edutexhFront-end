

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
                    <li class="breadcrumb-item"><a href="room-details.php">Room Details</a></li>
                    <li class="breadcrumb-item"><a href="room-number.php">02</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Room.</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-md-8 m-auto">
                            <div class="row">
                                    <div class="col-md-4">
                                        <label class="">Hostel Name <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Allama Iqbal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Room number  <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleName" placeholder="">
                                    </div>



                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-check-label" for="inlineCheckbox1">Students per room  <span class="text-danger">*</span></label>

                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleName" placeholder="">
                                        </div>                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-check-label" for="inlineCheckbox1">Rent  <span class="text-danger">*</span></label>

                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleName" placeholder="">
                                    </div>                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-check-label" for="inlineCheckbox1">No. of rooms <span class="text-danger">*</span></label>

                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="exampleName" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label for="validationCustom37" class="mt-4">Is Air Conditioned? <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-8">
                                    <div class="ms-card ms-widget ms-card-fh">
                                        <div class="ms-card-header clearfix">
                                            <h6 class="ms-card-title">Select: All, None </h6>
                                        </div>
                                        <div class="ms-card-body">
                                            <ul class="ms-list ms-task-block">

                                                <li class="ms-list-item">
                                                    <label class="ms-checkbox-wrap">
                                                        <input type="checkbox" value="">
                                                        <i class="ms-checkbox-check"></i>
                                                    </label>
                                                    <span> Yes </span>

                                                </li>
                                                <li class="ms-list-item">
                                                    <label class="ms-checkbox-wrap">
                                                        <input type="checkbox" value="" checked="">
                                                        <i class="ms-checkbox-check"></i>
                                                    </label>
                                                    <span> No </span>

                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label for="validationCustom37" class="mt-4">Is Furnished? <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-8">
                                    <div class="ms-card ms-widget ms-card-fh">
                                        <div class="ms-card-header clearfix">
                                            <h6 class="ms-card-title">Select: All, None </h6>
                                        </div>
                                        <div class="ms-card-body">
                                            <ul class="ms-list ms-task-block">

                                                <li class="ms-list-item">
                                                    <label class="ms-checkbox-wrap">
                                                        <input type="checkbox" value="">
                                                        <i class="ms-checkbox-check"></i>
                                                    </label>
                                                    <span> Yes </span>

                                                </li>
                                                <li class="ms-list-item">
                                                    <label class="ms-checkbox-wrap">
                                                        <input type="checkbox" value="" checked="">
                                                        <i class="ms-checkbox-check"></i>
                                                    </label>
                                                    <span> No </span>

                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <button class="btn btn-success">Update</button>
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



