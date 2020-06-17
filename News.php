

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
                    <li class="breadcrumb-item active" aria-current="page">News</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-2 text-right">
			<button class="btn btn-primary width70 m-auto" data-toggle="modal" data-target=".bd-example-modal-lg" type="submit">Add</button>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-header">
					<h6>School News | <small>Latest Announcements</small></h6>
				</div>
				<div class="ms-panel-body">
					<form class="needs-validation mb-5" novalidate>
						<div class="form-row">
							<div class="col-md-5">
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="Search News" required>
									</div>
									<div class="col-md-6">
										<button class="btn btn-primary width70 m-0" type="submit">Search</button>
									</div>
								</div>
							</div>
							<div class="col-md-7 text-right">
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-6 text-right">
						                <p>Showing</p>
									</div>
									<div class="col-md-4 text-right">
										<select class="form-control" id="validationCustom25" required="">
					                        <option value="">Last 3 Months</option>
					                        <option value="">Last 6 Months</option>
					                        <option value="">Last 1 Years</option>
					                    </select>
									</div>
								</div>
							</div>
						</div>
					</form>

					<div class="alert alert-warning text-center my-4">
						<strong>No news found</strong>
				    </div>

				    <a href="News_VisitPM.php" class="card mb-2">
				    	<div class="card-body">
				    		<h6>Visit of Prime Minister of Pakistan</h6>
					    	<p>PM Imran Khan will visite our institute by 16th july 2020.</p>
				    	</div>
				    	<div class="card-footer">
				    		<div class="row">
				    			<div class="col-md-6">
					    			09 May 2020
					    		</div>
					    		<div class="col-md-6 text-right">
					    			Comments : 0
					    		</div>
				    		</div>
				    	</div>
				    </a>
				    <p>Showing 1 of 1 Announcements</p>					

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



