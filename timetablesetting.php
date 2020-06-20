<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="ms-panel-header pt-0">
				<h6 class="d-md-inline"><i class="fas fa-calendar-alt"></i> Time Table</h6> |  <small>Settings</small>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Timetable</a></li>
					<li class="breadcrumb-item active" aria-current="page">Settings</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-7 m-auto">
			<div class="ms-panel-body">
				<div class="">
					<div class="">
						<div class="row">
							<div class="col-12">
								<div class="input-group mb-1">
									<ul class="ms-list d-flex">
										<li class="ms-list-item pl-0">
											<label class="ms-checkbox-wrap">
												<input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
											</label> <span> Subject Name </span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-12">
								E.g. Mathematics (MTHS), in the timetable pdf will show only Mathematics
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7 m-auto">
			<div class="ms-panel-body">
				<div class="">
					<div class="">
						<div class="row">
							<div class="col-12">
								<div class="input-group mb-1">
									<ul class="ms-list d-flex">
										<li class="ms-list-item pl-0">
											<label class="ms-checkbox-wrap">
												<input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
											</label> <span> Subject Code </span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-12">
								E.g. Mathematics (MTHS), in the timetable pdf will show only MTHS
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7 m-auto">
			<div class="ms-panel-body">
				<div class="">
					<div class="">
						<div class="row">
							<div class="col-12">
								<div class="input-group mb-1">
									<ul class="ms-list d-flex">
										<li class="ms-list-item pl-0">
											<label class="ms-checkbox-wrap">
												<input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
											</label> <span> Subject Name (Subject Code) </span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-12">
								E.g. Mathematics (MTHS), in the timetable pdf will show Mathematics (MTHS)
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7 m-auto">
			<div class="ms-panel-body">
				<div class="">
					<div class="">
						<div class="row">
							<div class="col-12">
								<div class="input-group mb-1">
									<ul class="ms-list d-flex">
										<li class="ms-list-item pl-0">
											<label class="ms-checkbox-wrap">
												<input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
											</label> <span> Subject Code (Subject Name) </span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-12">
								E.g. Mathematics (MTHS), in the timetable pdf will show MTHS (Mathematics)
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7 m-auto">
			<div class="ms-panel-body">
				<div class="">
					<div class="">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-success">
									<i class="fa fa-save"></i> Save Settings
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<?php include_once('footer.php')?>
