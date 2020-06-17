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
		<div class="col-md-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="assignment.php">Assignment</a></li>
					<li class="breadcrumb-item active" aria-current="page">Darwin Theory</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
				<h6 class="text-success">Assignment is already due (15 May 2020)</h6>
				<div class="alert alert-secondary my-4">
					<strong>Write down about the Darwin Theory in detail? (Plagiarism is not allowed)</strong>
				</div>	
				<div class="text-center mb-3">
					<a href="assignment-answer.php" class="btn btn-primary">Answer this Assignment</a>
				</div>
				<p class="text-success">
					Darwin Theory - Mohsin Irfan <span class="text-dark font-weight-bold">Rejected</span>
					<a href="javascript:void(0);" class="text-success">(Resubmit)</a>
				</p>
				<p class="text-success">
					Darwin Theory - Mohsin Irfan <span class="text-dark font-weight-bold">Accepted</span>
				</p>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>