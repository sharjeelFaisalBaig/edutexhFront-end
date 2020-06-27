

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
					<li class="breadcrumb-item"><a href="Administration-Finance_assetLiability_sub.php">Asset Liability Management</a></li>
					<li class="breadcrumb-item active" aria-current="page">Create Liability</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-6 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<form class="needs-validation" novalidate>
						<div class="form-row mt-2">
							<div class="col-md-4">
								<label class="mt-2" for="validationCustom03">Title :</label>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<input type="text" class="form-control" id="validationCustom03" placeholder="Bank Loan">
								</div>
							</div>
							<div class="col-md-4">
								<label class="mt-2" for="validationCustom03">Description :</label>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<input type="text" class="form-control" id="validationCustom03" placeholder="HBL Loan">
								</div>
							</div>
							<div class="col-md-4">
								<label class="mt-2" for="validationCustom03">Amount :</label>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<input type="text" class="form-control" id="validationCustom03" placeholder="5000000">
								</div>
								<a href="javascript:void();" class="btn btn-primary width70">Save</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



