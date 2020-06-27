

<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<link rel="stylesheet" href="assets/samples.css">

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		            <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Finance_settings_sub.php">Finance Settings</a></li>
                    <li class="breadcrumb-item"><a href="finance-receipt-template.php">Receipt Templates</a></li>
					<li class="breadcrumb-item active" aria-current="page">New</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-10 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<form class="needs-validation mb-2" novalidate>
						<div class="form-row">
							<div class="col-md-5">
								<label for="validationCustom03">Name</label>
								<div class="input-group">
									<input type="text" class="form-control" id="validationCustom03" placeholder="Academic Fees">
								</div>
							</div>
							<div class="col-md-12">
								<label class="font-weight-bold">Header</label>
								<br>
								<small>Design the fee receipt header using the editor below. Add details like name and address of the institution, logo and other details. Use the footer to add additional instructions in the receipt.</small>
							</div>
							<div class="col-md-10 mt-3">
								<div id="editor">
									<div class="text-center">
										<h3>Mehran Model School Pano-Akill</h3>
										<h3 class="my-3">Library Fees</h3>
									</div>
								</div>
							</div>
							<div class="col-md-12 mt-3">
								<label class="font-weight-bold">Footer</label>
								<textarea class="form-control" rows="4">This is a computer-generated receipt, hence no need for signature.</textarea>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-5">
								<h6><i class="fas fa-plus"></i> Additional Header Templates</h6>
								<small>Create templates for A5 and Thermal Page sizes.</small>
								<div class="form-group mt-3">
									<select class="form-control">
										<option>Select a Template</option>
										<option>A5 Portrait</option>
										<option>Thermal Responsive</option>
									</select>
								</div>
							</div>
							<div class="col-md-8">
								<div id="editor2">

								</div>
							</div>
						</div>
						<hr>
						<a href="finance-receipt-template.php" class="btn btn-primary">Save Receipt Template</a>
						<a href="finance-template-preview.php" class="btn btn-primary">Save and Preview Receipt Template</a>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>





<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script src="assets/sample.js"></script>
<script src="assets/ckeditor.js"></script>
<script>
	initSample();
</script>
<script>
	initSample2();
</script>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



