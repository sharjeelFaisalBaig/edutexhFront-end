<!-- header -->
<?php require 'header.php';?>
<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaborate</a></li>
					<li class="breadcrumb-item"><a href="Collaboration-Alumni_sub.php">Alumni</a></li>
					<li class="breadcrumb-item active" aria-current="page"> Create Alumni Event</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-6 m-auto">
			<div class="ms-panel-body">
                <div class="mt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-2">
                                    <label class="">Event Title</label>
                                </div>
                                <div class="col-lg-8 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="Category" required="">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-2">
                                    <label for="start-date">Start Date</label>
                                </div>
                                <div class="col-lg-8 col-md-4">
                                    <div class="input-group">
                                        <input class="form-control" type="datetime-local" id="startdate">
                                        <div class="invalid-feedback">
                                            Please provide an Date separator.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-2">
                                    <label for="end-date">End Date</label>
                                </div>
                                <div class="col-lg-8 col-md-4">
                                    <div class="input-group">
                                        <input class="form-control" type="datetime-local" id="enddate">
                                        <div class="invalid-feedback">
                                            Please provide an Date separator.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4 col-md-2">
                                    <label class="">Event Description</label>
                                </div>
                                <div class="col-lg-8 col-md-4">
                                    <div class="form-group">
                                        <textarea name="" id="" class="form-control" rows="5"></textarea>
                                    </div>
                                    <div class="btn btn-primary width70">Create</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
			</div>

		</div>

	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>
<script>
    // date
    document.querySelector("#start-date").valueAsDate = new Date();
    document.querySelector("#end-date").valueAsDate = new Date();
</script>
<!-- footer -->



