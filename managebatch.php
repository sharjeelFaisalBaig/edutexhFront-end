<?php include_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-7">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
					<li class="breadcrumb-item"><a href="Administration-Settings_courseBatch_sub.php">Manage Course/Batch</a></li>
					<li class="breadcrumb-item active" aria-current="page">Manage Batch</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-5 text-right">
			<a href="" class="btn btn-primary m-auto" data-toggle="modal" data-target="#modal-2" >Grading System</a>
			<a href="batchtransfer.php" class="btn btn-primary m-auto">Batch Transfer</a>
			<a href="revertbatch.php" class="btn btn-primary m-auto">Revert Batch Transfer</a>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel ms-panel-fh mt-5">
				<div class="ms-panel-body clearfix">
					<div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Select a Course:</label>
                                </div>
                                <div class="col-md-8">
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control ">
                                                <option>Grade 1</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

					</div>
					<br>
					<ul class="nav nav-tabs d-flex nav-justified mb-4" role="tablist">
						<li role="presentation" ><a href="#tab13" aria-controls="tab13" class="active" role="tab" data-toggle="tab">Active Batches (2)</a></li>
						<li role="presentation" ><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab">Inactive Batches (2) </a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active show fade in" id="tab13">
							<div class="table-responsive">
								<table id="data-table-4" class="table w-100 thead-primary table-bordered">
									<thead>
										<tr>
											<th>SI NO</th>
											<th>Batch Name</th>
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="A2020.php" class="text-black">G1 - A - 2020</a></td>
											<td>
												<a href="javascript:void(0)" class="nav-item">Deactivate</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab14">
							<div class="table-responsive">
								<table id="data-table-4" class="table w-100 thead-primary table-bordered">
									<thead>
										<tr>
											<th>SI NO</th>
											<th>Batch Name</th>
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="batch.php">G2 - B - 2020</a></td>
											<td>
												<a href="javascript:void(0)" class="nav-item">Activate</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
<?php include_once('footer.php')?>