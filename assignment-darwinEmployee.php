<?php require_once('header.php')?>
<style>

.nav-tabs li a.active {
    color: #8d0302;
    background-color: rgb(255, 255, 255);
	border: none; 
    border-bottom: none;
	border-top-left-radius: unset; 
	border-top-right-radius: unset; 
}
.nav-tabs.tabs-bordered li a.active {
    background: #fff;
    color: rgb(50, 2, 1);
    border-bottom: 2px solid rgb(123, 3, 2);
}
.nav-tabs.tabs-bordered li a.active {
	background: #f4f4f4;
	font-weight: bolder;
	color: #07be6e;
}
.nav-tabs.tabs-bordered li a {
	background: #f4f4f4;
	font-weight: bolder;
}
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
				<div class="text-center">
					<a href="assignment-edit.php" class="btn btn-primary width70">Edit</a>
					<a href="javascript:void(0);" class="btn btn-primary width70">Delete Assignment</a>
				</div>
				<div class="alert alert-secondary my-4">
					<ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-4" role="tablist">
						<li role="presentation" ><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Assigned (4)</a></li>
						<li role="presentation" ><a href="#tab2" aria-controls="tab2" class="active show" role="tab" data-toggle="tab">Answer (1)</a></li>
						<li role="presentation" ><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Pending (3)</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade" id="tab1">
							<ul>
								<li class="border-bottom">G1001 - Faiza Aslam</li>
								<li class="border-bottom">G1001 - Faiza Aslam</li>
								<li class="border-bottom">G1001 - Faiza Aslam</li>
								<li class="border-bottom">G1001 - Faiza Aslam</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane active show fade in" id="tab2">
							<ul>
								<li class="border-bottom">
									<strong><a href="assignment-mohsinIrfan.php" class="text-dark">Mohsin Irfan</a></strong> 
									<span>(G1001)</span>
									<span>Pending</span>
									<span class="float-md-right">On 15 May 2020 3:02 PM</span>
									<div class="clearfix"></div>
								</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab3">
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>