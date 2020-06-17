

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-10">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
                    <li class="breadcrumb-item"><a href="Gallery.php">Gallery</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Album</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">

				<form class="needs-validation my-5" novalidate>
					<div class="form-row">
						<div class="col-md-5 mb-4">
							<label for="validationCustom03"><strong>Album Name</strong></label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="" required>
								<div class="invalid-feedback">This Field is Required</div>
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-4">
							<label for="validationCustom03"><strong>Album Visibility</strong></label>
							<div class="row">
                                <div class="col-md-4">
                                    <div class="custom-control custom-radio d-inline">
                                        <input type="radio" class="custom-control-input" id="customRadio5" name="example" value="customEx">
                                        <label class="custom-control-label" for="customRadio5"><strong>Public Album</strong></label>
                                    </div><br>
                                    <small>Public album will be visible to all the active users of your institutions like employees, students and parents</small>
                                </div>
                                <div class="col-md-4">
                                    <div class="custom-control custom-radio d-inline">
                                        <input type="radio" class="custom-control-input" id="customRadio6" name="example" value="customEx">
                                        <label class="custom-control-label" for="customRadio6"><strong>Private Album</strong></label>
                                    </div><br>
                                    <small>Public album will be visible to all the active users of your institutions like employees, students and parents</small>
                                </div>
                            </div>
						</div>
					</div>
				</form>	

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<p class="d-inline"><i class="fas fa-minus-square"></i> <strong>Select Batch</strong></p>
								<small class="float-right">1 selected</small>
							</div>
							<div class="card-body border-bottom">
								<input type="text" class="form-control" name="" placeholder="Search">
							</div>
							<div class="border-bottom px-4">
								<ul class="ms-list ms-task-block">
                                    <li class="ms-list-item">
                                        <div class="form-check form-check-inline">
	                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
	                                    </div>
                                        <div class="form-check form-check-inline">
                                        	<label class="form-check-label" for="inlineCheckbox3">
                                            	<strong>PG - Blue</strong><br>
	                                            <small>1 selected</small>
	                                        </label>
                                        </div>
                                    </li>
                                    <!-- <span><i class="fas fa-chevron-right"></i></span> -->
                                </ul>
							</div>
							<div class="border-bottom px-4">
								<ul class="ms-list ms-task-block">
                                    <li class="ms-list-item">
                                        <div class="form-check form-check-inline">
	                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
	                                    </div>
                                        <div class="form-check form-check-inline">
                                        	<label class="form-check-label" for="inlineCheckbox3">
                                            	<strong>PG - Blue</strong><br>
	                                            <small>0 Student</small>
	                                            <!-- <small class="text-right"><a href="">Select</a></small> -->
	                                        </label>
                                        </div>
                                    </li>
                                </ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<p class="px-4 py-1">Batch PG - Blue</p>
							<div class="card-header">
								<p class="d-inline"><i class="fas fa-minus-square"></i> <strong>Select Batch</strong></p>
								<small class="float-right">1 selected</small>
							</div>
							<div class="card-body border-bottom">
								<input type="text" class="form-control" name="" placeholder="Search">
							</div>
							<div class="border-bottom px-4">
								<ul class="ms-list ms-task-block">
                                    <li class="ms-list-item">
                                        <div class="form-check form-check-inline">
	                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
	                                    </div>
                                        <div class="form-check form-check-inline">
                                        	<label class="form-check-label" for="inlineCheckbox3">
                                            	<strong>Muhammad Saleem (S1)</strong>
	                                        </label>
                                        </div>
                                    </li>
                                </ul>
							</div>
							<div class="card-footer">
								<a href="" class="btn btn-dark m-0">Done</a>
							</div>
							
						</div>
					</div>
				</div>			

			</div>
		</div>

	</div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Publishing News </h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation mb-2" novalidate>
					<div class="form-row">
						<div class="col-md-6">
							<label for="validationCustom03">Title</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="" required>
								<div class="invalid-feedback">This Field is Required</div>
							</div>
						</div>
						<div class="col-md-10">
							<label for="validationCustom03">Body</label>
							<div class="input-group">
								<textarea class="form-control" id="validationCustom03" rows="9" placeholder=""></textarea>
							</div>
						</div>
						<div class="col-md-4">
							<label for="validationCustom03">Attach files (5MB max)</label>
							<div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">No file Selected...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
						</div>

					</div>
				</form>
			</div>

			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-primary shadow-none" type="submit"></button> -->
				<button type="button" class="btn btn-primary" data-dismiss="modal">Publish News</button>
			</div>

		</div>
	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



