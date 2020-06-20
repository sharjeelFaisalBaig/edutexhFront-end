<?php require_once('header.php')?>


<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="placement.php">Placements</a></li>
					<li class="breadcrumb-item active" aria-current="page">Archived Placements</li>
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
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>