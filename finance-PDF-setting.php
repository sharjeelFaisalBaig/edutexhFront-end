

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
		            <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Finance_settings_sub.php">Finance Settings</a></li>
					<li class="breadcrumb-item active" aria-current="page">PDF Settings</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<div class="row">
	                    <div class="col-md-12 mb-4">
	                        <h6>Alignment of Institution Details</h6>
	                        <div class="form-row mt-3">
	                            <div class="col-md-2">
	                                <div class="custom-control custom-radio custom-control">
	                                    <input type="radio" class="custom-control-input" id="customRadio1" name="example" value="customEx" checked="">
	                                    <label class="custom-control-label cursor-pointer" for="customRadio1">Left Align</label>
	                                </div>
	                            </div> 
	                            <div class="col-md-2">
	                                <div class="custom-control custom-radio custom-control">
	                                    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx" checked="">
	                                    <label class="custom-control-label cursor-pointer" for="customRadio2">Center Align</label>
	                                </div>
	                            </div>
	                            <div class="col-md-2">
	                                <div class="custom-control custom-radio custom-control">
	                                    <input type="radio" class="custom-control-input" id="customRadio5" name="example" value="customEx">
	                                    <label class="custom-control-label cursor-pointer" for="customRadio5">Right Align</label>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-12 mb-4">
	                        <h6>Signature</h6>
	                        <div class="form-row mt-3">
	                            <div class="col-md-2">
	                                <div class="custom-control custom-radio custom-control">
	                                    <input type="radio" class="custom-control-input" id="customRadio3" name="example2" value="customEx" checked="">
	                                    <label class="custom-control-label cursor-pointer" for="customRadio3">Enable</label>
	                                </div>
	                            </div> 
	                            <div class="col-md-2">
	                                <div class="custom-control custom-radio custom-control">
	                                    <input type="radio" class="custom-control-input" id="customRadio4" name="example2" value="customEx" checked="">
	                                    <label class="custom-control-label cursor-pointer" for="customRadio4">Disable</label>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-12 mb-4">
	                        <h6>Custom Footer</h6>
	                        <div class="form-row mt-3">
	                            <div class="col-md-8">
	                            	<textarea rows="5" class="form-control"></textarea>
	                            </div>
	                        </div>
	                        <a href="javascript:void();" class="btn btn-primary width70">Save Settings</a>
	                    </div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



