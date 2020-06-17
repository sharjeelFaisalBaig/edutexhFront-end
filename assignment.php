<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="ms-panel-header pt-0">
				<h6 class="d-md-inline"><i class="fas fa-file-alt"></i> Assignments</h6> |  <small>All Assignments</small>
				<a href="assignment-create-new.php" class="btn btn-success float-md-right m-auto">Create New Assignment</a>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
					<li class="breadcrumb-item active" aria-current="page">Assignment</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
				<form>
					<div class="form-row">
						<div class="col-md-2">
							<label for="validationCustom03" class="mt-2">Subject</label>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<select class="form-control" id="validationCustom25">
                                    <option value="">General Science - G1 - A - 2020</option>
                                </select>
							</div>
						</div>
					</div>
				</form>

				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Title</th>
								<th>Due Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><a href="assignment-darwinEmployee.php">Darwin Theory</a></td>
								<td>15 May 2020</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Subject</th>
								<th>Assignments</th>
								<th>Due Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>General Science</td>
								<td><a href="assignment-darwinStudent.php">Darwin Theory</a></td>
								<td>15 May 2020</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>