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
					<a href="placement-archived.php" class="btn btn-success m-auto">Archived Placements</a>
					<a href="placement-announce-new.php" class="btn btn-success m-auto">Announce New Placement</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
					<li class="breadcrumb-item active" aria-current="page">Placements</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>Title</th>
								<th>Company</th>
								<th>Date</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="placement-employee-view.php">Research Assistant</a></td>
								<td>SIBA University</td>
								<td>22 May 2020</td>
								<td>
									<a href="javascript:void(0);" data-toggle="modal" data-target="#modal-1">Edit</a> | 
									<a href="javascript:void(0);">Delete</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>Title</th>
								<th>Company</th>
								<th>Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="javascript:void(0);" data-toggle="modal" data-target=".bd-example-modal-lg">Research Assistant</a></td>
								<td>SIBA University</td>
								<td>22 May 2020</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-3" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title">Edit Placement</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>

			<div class="modal-body">
				<form class="need-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="">Title</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleName" placeholder="Research Assistant">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="">Date</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="date" class="form-control" id="exampleName" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="">Company</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleName" placeholder="SIBA University">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="">Deparment</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Research Assistant is required for Mathematics" rows="4"></textarea>
                            </div>
                        </div>
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
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title">Placement</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>

			<div class="modal-body">
				<h5>Research Assistant</h5>
				<h6 class="text-success">22 May 2020</h6>
				<div class="alert alert-secondary my-4">
					<strong>Research Assistant is required for Mathematics department from the following candidates: 1 Final Semester Students of BS Mathematics</strong>
				</div>	
				<div class="text-center">
					<a href="placement-view-invitation.php" class="btn btn-primary width70">View Invitation</a>
				</div>
            </div>

        </div>
    </div>
</div>



<?php include_once('footer.php')?>