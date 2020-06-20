<?php require_once('header.php')?>
<style>
.alert-secondary {
    color: #383d41;
    background-color: #f4f4f4;
    border-color: #f4f4f4;
}
</style>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="ms-panel-header pt-0">
				<h6 class="d-md-inline"><i class="fas fa-file-alt"></i> Placements</h6> |  <small>All Placements</small>
				<div class="float-md-right">
					<a href="placement-invite-student.php" class="btn btn-success m-auto">Invite Students</a>
					<a href="placement-registrations.php" class="btn btn-success m-auto">Registrations</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="placement.php">Placements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Research Assistant</li>
                </ol>
            </nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
				<h5>Research Assistant</h5>
				<h6 class="text-success">22 May 2020</h6>
				<div class="alert alert-secondary my-4">
					<strong>Research Assistant is required for Mathematics department from the following candidates: 1 Final Semester Students of BS Mathematics</strong>
				</div>	
				<div class="text-center">
					<a href="placement-edit.php" class="btn btn-primary width70">Edit</a>
					<a href="javascript:void(0);" class="btn btn-primary width70">Archive this event</a>
				</div>
				<div class="row mt-4">
					<div class="col-md-3 text-md-right">
						<label class="font-weight-bold mt-2">Generate Report</label>
					</div>
					<div class="col-md-4 offset-md-1">
						<select class="form-control">
							<option>Select Type</option>
							<option>Invited</option>
							<option>Applied</option>
							<option>Approved</option>
							<option>Attended</option>
							<option>Placed</option>
						</select>
					</div>
					<div class="col-md-2 text-md-right">
						<a href="placement-reports.php" class="btn btn-primary m-auto width30">Go</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>