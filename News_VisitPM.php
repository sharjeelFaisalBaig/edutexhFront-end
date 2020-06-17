

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
                    <li class="breadcrumb-item"><a href="News.php">News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Visit of PM...</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-2 text-right">
			<button class="btn btn-primary width70 m-auto" data-toggle="modal" data-target=".bd-example-modal-lg" type="submit">Edit</button>
			<a href="" class="btn btn-primary width70 m-auto" type="submit">Delete</a>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-header">
					<h6>NEWS | <small>Read News</small></h6>
				</div>
				<div class="ms-panel-body">
					<div class="text-center">
						<h4>Visit of Prime Minister of Pakistan</h4>
						<p>08 May 2020</p>
					</div>
					<p>PM Imran Khan will visite our institute by 16th july 2020.</p>
					<hr>
					<div class="form-row mt-5 mb-3">
						<div class="col-md-7">
							<h6>Leave a Comment</h6>
							<div class="input-group">
								<textarea class="form-control" id="validationCustom03" rows="4" placeholder="I wil available"></textarea>
							</div>
							<button type="button" class="btn btn-primary width70">Submit Comment</button>
						</div>
					</div>

					<div class="px-4 py-2 mt-4">
						<div class="row">
							<div class="col-md-12">
								<h5>Comments(2)</h5>
								<hr>
							</div>
							<div class="col-md-8">
								<h6><a href=""><strong>Muhammad Sufyan</strong></a></h6>
								<p class="text-disabled">I will participate</p>
								<small class="text-disabled">Posted just now</small>
							</div>
							<div class="col-md-4">
								<p class="text-disabled">Waiting for Approval &nbsp; &nbsp; <a href="">Discard</a></p>
							</div>
						</div>
						<hr>
					</div>

					<div class="px-4 py-2 mt-4">
						<div class="row">
							<div class="col-md-12">
								<span class="approveComment">Approved Comments(1)</span>&nbsp;&nbsp;
								<span class="pendComment">Pending Comments(1)</span>
								<hr>
							</div>
							<div class="col-md-8">
								<h6><a href=""><strong>Muhammad Sufyan</strong></a></h6>
								<p class="text-disabled">I will participate</p>
								<small class="text-disabled">Posted 3 minutes ago</small>
							</div>
							<div class="col-md-4">
								<a href="">Approve &nbsp; &nbsp; </a>
								<a href="">Discard</a>
							</div>
						</div>
						<hr>
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
				<h6 class="modal-title has-icon ms-icon-round ">Edit News </h6>
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
				<button type="button" class="btn btn-primary" data-dismiss="modal">Update News</button>
			</div>

		</div>
	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



