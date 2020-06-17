

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
					<li class="breadcrumb-item active" aria-current="page">Gallery</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-2 text-right">
			<a href="Create_Album.php" class="btn btn-primary width70 m-auto" type="submit">Create Album</a>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">

				<div class="alert alert-warning text-center my-4">
					<strong>No albums found</strong>
				</div>
				<h6>Picnic of Islamabad</h6>
				<hr>
				<div class="row">
					<div class="col-md-3">
						<span class="text-disabled">Images: </span> 0
					</div>
					<div class="col-md-3">
						<span class="text-disabled">Visibility: </span> 1 Student, 2 Employees
					</div>
					<div class="col-md-3">
						<span class="text-disabled">Status: </span> Unpublished
					</div>
					<div class="col-md-3">
						<span class="text-disabled">Created on: </span> 08/05/2020
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-md-12">
						<div class=" text-center addImage p-5">
							<p class="text-disabled my-0">Start adding photos to your album</p>
							<a href="" class="btn btn-light">Add Images</a>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-12">
						<div class="row mb-4">
							<div class="col-md-6">
								<strong>Add Images to Picninc of Islamabad</strong>
							</div>
							<div class="col-md-6 text-right">
								<a href="" class="btn btn-dark m-0 width80">Cancel</a>
							</div>
						</div>
						<div class="text-center dropImage">
							<p class="text-disabled my-0">Drag and Drop your images here</p>
							<a href="" class="btn btn-light">Select Images to Upload</a>
						</div>
					</div>
				</div>	
				<div class="row mt-5">
					<div class="col-md-12">
						<div class="row mb-4">
							<div class="col-md-6">
								<strong>Add Images to Picninc of Islamabad</strong>
							</div>
							<div class="col-md-6 text-right">
								<a href="" class="btn btn-light m-0">Select More Images</a>
								<a href="" class="btn btn-primary m-0">Upload Images to Album</a>
							</div>
						</div>
						<div class="row mt-5">
							<div class="col-md-4">
								<img src="assets/img/demoIMG.jpg">
							</div>
							<div class="col-md-4">
								<label>Image Description <small>(Optional)</small></label>
								<textarea class="mt-3 mb-4 form-control" rows="4"></textarea><br>
								<a href="">Remove Image</a>
							</div>
						</div>
					</div>
				</div>	

				<!-- Uploaded Album -->
				<div class="UploadedContent mt-5">
					<div class="row">
						<div class="col-md-4">
							<h6>Picnic of Islamabad</h6>
						</div>
						<div class="col-md-8 text-right">
							<a href="" class="btn btn-primary m-0">Download Album</a>
							<a href="" class="btn btn-primary m-0">Add Images</a>
							<a href="" class="btn btn-primary m-0 width70">Edit</a>
							<a href="" class="btn btn-primary m-0">Publish Album</a>
							<div class="dropdown d-inline">
								<a href="" class="btn btn-primary dropdown-toggle m-0 width70" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									More
								</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="#">Delete Album</a>
									<a class="dropdown-item" href="#">Delete Images</a>
								</div>
							</div>
						</div>
					</div>

					<hr>
					<div class="row">
						<div class="col-md-3">
							<span class="text-disabled">Images: </span> 06
						</div>
						<div class="col-md-3">
							<span class="text-disabled">Visibility: </span> 1 Student, 2 Employees
						</div>
						<div class="col-md-3">
							<span class="text-disabled">Status: </span> Unpublished
						</div>
						<div class="col-md-3">
							<span class="text-disabled">Created on: </span> 08/05/2020
						</div>
					</div>	
					<div class="row mt-5">
						<div class="col-md-4">
							<div class="content">
								<div class="content-overlay"></div>
								<img src="assets/img/demoIMG.jpg" class="content-image">

								<div class="content-details fadeIn-top fadeIn-right">
									<div class="media-body">
										<div class="dropdown float-right">
											<a href="#" type="button" class="btn btn-light width70 overlayBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit
											</a>
											<ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
												<li class="ms-dropdown-list">
													<a class="media p-2" href="#">
														<div class="media-body">
															<span>Edit Description</span>
														</div>
													</a>
													<a class="media p-2" href="#">
														<div class="media-body">
															<span>Delete</span>
														</div>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="content">
								<div class="content-overlay"></div>
								<img src="assets/img/demoIMG.jpg" class="content-image">

								<div class="content-details fadeIn-top fadeIn-right">
									<div class="media-body">
										<div class="dropdown float-right">
											<a href="#" type="button" class="btn btn-light width70 overlayBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit
											</a>
											<ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
												<li class="ms-dropdown-list">
													<a class="media p-2" href="#">
														<div class="media-body">
															<span>Edit Description</span>
														</div>
													</a>
													<a class="media p-2" href="#">
														<div class="media-body">
															<span>Delete</span>
														</div>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="content">
								<div class="content-overlay"></div>
								<img src="assets/img/demoIMG.jpg" class="content-image">

								<div class="content-details fadeIn-top fadeIn-right">
									<div class="media-body">
										<div class="dropdown float-right">
											<a href="#" type="button" class="btn btn-light width70 overlayBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit
											</a>
											<ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
												<li class="ms-dropdown-list">
													<a class="media p-2" href="#">
														<div class="media-body">
															<span>Edit Description</span>
														</div>
													</a>
													<a class="media p-2" href="#">
														<div class="media-body">
															<span>Delete</span>
														</div>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>		
				<!-- Uploaded Album -->			

			</div>
		</div>
	</div>
</div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



