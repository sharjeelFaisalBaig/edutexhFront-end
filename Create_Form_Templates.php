<?php include_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
					<li class="breadcrumb-item"><a href="Collaboration-Forms_sub.php">Forms</a></li>
					<li class="breadcrumb-item active" aria-current="page">Create Form Templates</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel ms-panel-fh" style="box-shadow: 0 0 0 0;">
				<div class="ms-panel-body clearfix">
					<div class="row">
						<div class="col-md-6 border-1 p-4">
							<ul class="nav nav-tabs d-flex nav-justified mb-3" role="tablist">
								<li role="presentation" ><a href="#tab13" aria-controls="tab13" class="active" role="tab" data-toggle="tab">Fields</a></li>
								<li role="presentation" ><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab">Settings</a></li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active show fade in" id="tab13">
									<div class="row">
										<div class="col-md-4">
											<a href="" class="btn btn-primary mb-3 w-100">Single line text</a>
										</div>
										<div class="col-md-4">
											<a href="" class="btn btn-primary mb-3 w-100">Checkbox</a>
										</div>
										<div class="col-md-4">
											<a href="" class="btn btn-primary mb-3 w-100">Paragraph</a>
										</div>
										<div class="col-md-4">
											<a href="" class="btn btn-primary mb-3 w-100">Horizontal line</a>
										</div>
										<div class="col-md-4">
											<a href="" class="btn btn-primary mb-3 w-100">Dropdown</a>
										</div>
										<div class="col-md-4">
											<a href="" class="btn btn-primary mb-3 w-100">Radio button</a>
										</div>
										<div class="col-md-4">
											<a href="" class="btn btn-primary mb-3 w-100">Attachment</a>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab14">
									<div class="form-row">
										<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Type</label>
										<div class="col-md-8 mb-2">
											<ul class="ms-list ms-task-block">
	                                            <li class="ms-list-item">
	                                                <div class="form-check form-check-inline">
	                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="">
	                                                    <label class="form-check-label" for="inlineCheckbox2">Mandatory</label>
	                                                </div>
	                                            </li>
	                                        </ul>
										</div>
										<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Label</label>
										<div class="col-md-8 mb-2">
											<input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Gender">
										</div>
										<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Label Description</label>
										<div class="col-md-8 mb-2">
											<textarea class="form-control" rows="5" placeholder="Please Select the Gender"></textarea>
										</div>
										<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Options <br><small>Enter weight for publishing a feedback form for generating ratings, it's optional.</small></label>

										<div class="col-md-8 mb-2">
											<div class="row mb-2">
												<div class="col-md-6">
													<input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Male">
												</div>
												<div class="col-md-4">
													<input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Weight">
												</div>
												<div class="col-md-1">
													<i class="fas fa-times text-danger"></i>
												</div>
											</div>
											<div class="row mb-2">
												<div class="col-md-6">
													<input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Female">
												</div>
												<div class="col-md-4">
													<input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Weight">
												</div>
												<div class="col-md-1">
													<i class="fas fa-times text-danger"></i>
												</div>
											</div>
											<div class="row mb-2">
												<div class="col-md-6">
													<input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Not Known">
												</div>
												<div class="col-md-4">
													<input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Weight">
												</div>
												<div class="col-md-1">
													<i class="fas fa-times text-danger"></i>
												</div>
											</div>
											<div class="row mb-2">
												<div class="col-md-6">
													<a href="" class="btn btn-primary mb-3 w-100">Add Option</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 border-1 p-4">
							<div class="row mb-3">
								<div class="col-md-12">
									<div class="form-row">
										<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Form name</label>
										<div class="col-md-9">
											<input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Add your form title here">
										</div>
									</div>
								</div>
							</div>

							<p class="mb-0">Gender</p>
							<small>Please Select the Gender</small>

                            <div class="custom-control custom-radio custom-control mt-3">
                                <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                                <label class="custom-control-label" for="customRadio">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control mt-3">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                                <label class="custom-control-label" for="customRadio2">Female</label>
                            </div>
                            <div class="custom-control custom-radio custom-control mt-3">
                                <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
                                <label class="custom-control-label" for="customRadio3">Not Known</label>
                            </div>

							<h6 class="mb-0 mt-3">This is a blank form</h6>
							<small class="text-disabled">Add fields by clicking or dragging the fields from the left sidebar</small>
							<div class="border-dotted text-center p-3 mt-4">
								<p class="m-0">Drag here</p>
							</div>
						</div>

						<div class="col-md-12 text-right">
							<a href="" class="btn btn-primary">Save template</a>
							<a href="" class="btn btn-primary width70">Use</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php include_once('footer.php')?>