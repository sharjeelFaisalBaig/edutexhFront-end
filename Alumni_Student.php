<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-7">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			        <li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
					<li class="breadcrumb-item"><a href="Collaboration-Alumni_sub.php">Alumni</a></li>
					<li class="breadcrumb-item active" aria-current="page">Alumni Student</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-5 text-md-right">
			<a href="invite-alumni.php" class="btn btn-primary width30">Invite Alumni</a>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">

					<div class="form-group row">
						<div class="col-md-3">
							<label for="colFormLabelSm" class="col-form-label">Course</label>
							<div class="input-group">
								<select class="form-control" id="validationCustom25" required="">
									<option value="">Play Group</option>
								</select>
								<div class="invalid-feedback">This Field is Required</div>
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<div class="col-md-3">
							<label for="colFormLabelSm" class="col-form-label">Year of Compilation</label>
							<div class="input-group">
								<select class="form-control" id="validationCustom25" required="">
									<option value="">2021</option>
								</select>
								<div class="invalid-feedback">This Field is Required</div>
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<div class="col-md-3">
							<label for="colFormLabelSm" class="col-form-label">Available Batches</label>
							<div class="input-group">
								<select class="form-control" id="validationCustom25" required="">
									<option value="">Select All</option>
									<option value="">Blue</option>
								</select>
								<div class="invalid-feedback">This Field is Required</div>
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<dir class="col-md-3">
							<a href="" class="btn btn-primary width30" style="margin-top: 20px;">Show Alumni</a>
						</dir>
					</div>

				</div>


				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Admission Number</th>
								<th>Year of Completion</th>
								<th>Last Attended Course</th>
								<th>Last Batch</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Abdul Salam</td>
								<td>S15</td>
								<td>2021</td>
								<td>Play Group</td>
								<td>PG - Blue</td>
							</tr>
							<tr>
								<td>Abdul Salam</td>
								<td>S15</td>
								<td>2021</td>
								<td>Play Group</td>
								<td>PG - Blue</td>
							</tr>
							<tr>
								<td>Abdul Salam</td>
								<td>S15</td>
								<td>2021</td>
								<td>Play Group</td>
								<td>PG - Blue</td>
							</tr>
							<tr>
								<td>Abdul Salam</td>
								<td>S15</td>
								<td>2021</td>
								<td>Play Group</td>
								<td>PG - Blue</td>
							</tr>
							<tr>
								<td>Abdul Salam</td>
								<td>S15</td>
								<td>2021</td>
								<td>Play Group</td>
								<td>PG - Blue</td>
							</tr>
							<tr>
								<td>Abdul Salam</td>
								<td>S15</td>
								<td>2021</td>
								<td>Play Group</td>
								<td>PG - Blue</td>
							</tr>
						</tbody>
						<!-- <tfoot>
							<div class="row">
								
							</div>
						</tfoot> -->
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>