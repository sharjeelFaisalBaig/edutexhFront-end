<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
					<li class="breadcrumb-item"><a href="Collaboration-Forms_sub.php">Forms</a></li>
					<li class="breadcrumb-item"><a href="Feedback_Forms.php">Feedback Forms</a></li>
					<li class="breadcrumb-item active" aria-current="page">Consolidated Report</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Target</th>
								<th>Overall %</th>
								<th>Gender</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Muhammad Sufyan Shaikh</td>
								<td>NA</td>
								<td>
									<a href="" class="nav-item" data-toggle="modal" data-target=".bd-example-modal-lg" >2 Responses</a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Muhammad Saleem</td>
								<td>NA</td>
								<td>
									<a href="" class="nav-item" data-toggle="modal" data-target=".bd-example-modal-lg" >2 Responses</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>

		</div>
	</div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-md-4 text-right">
						<h6 class="my-5">Male (Wt.)</h6>
						<h6 class="mb-5">Female (Wt.)</h6>
						<h6 class="mb-5">Not Known (Wt.)</h6>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-7">
						<div class="chart">
							<table id="data-table" border="1" cellpadding="10" cellspacing="0" summary="skillset">
								<thead>
									<tr>
										<td>&nbsp;</td>
										<th scope="col">CSS</th>
										<th scope="col">SEO</th>
										<th scope="col">Design</th>
										<th scope="col">HTML</th>
										<th scope="col">CMS</th>
									</tr>
								</thead>
								<tbody>
									<tr>		
										<td>90</td>
										<td>50</td>
										<td>80</td>
										<td>95</td>
							            <td>80</td>
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

<?php include_once('footer.php')?>