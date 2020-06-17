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
					<li class="breadcrumb-item active" aria-current="page">Analysis	</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-4">
			<div class="ms-panel-body">
				<h6 class="mb-5">Feedback Gender Testing - 01</h6>
				<label>Target</label>
				<select class="form-control" id="validationCustom25" required="">
                    <option value="">Muhammad Sufyan Shaikh</option>
                </select>
                <p class="my-3"><strong>Question 1 : Gender</strong></p>
                <p>Responses</p>
			</div>
		</div>
		<div class="col-md-8 m-auto">
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



<?php include_once('footer.php')?>