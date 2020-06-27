

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
					<li class="breadcrumb-item active" aria-current="page">Printer Settings</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<div class="row">
	                    <div class="col-md-12 mb-4">
	                        <h6>Receipt Printer Type</h6>
	                        <div class="form-row mt-3">
	                            <div class="col-md-2">
	                                <div class="custom-control custom-radio custom-control">
	                                    <input type="radio" class="custom-control-input" id="customRadio1" name="example" value="customEx" checked="">
	                                    <label class="custom-control-label cursor-pointer" for="customRadio1">Normal Printer</label>
	                                </div>
	                            </div> 
	                            <div class="col-md-2">
	                                <div class="custom-control custom-radio custom-control">
	                                    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx" checked="">
	                                    <label class="custom-control-label cursor-pointer" for="customRadio2">Thermal Printer</label>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-4">
	                        <h6>Print Sheet Size</h6>
	                        <div class="form-group">
	                        	<select class="form-control">
	                        		<option>A4</option>
	                        		<option>A5</option>
	                        		<option>Landscape</option>
	                        		<option>A5 Portrait</option>
	                        	</select>
	                        </div>
	                    </div>
					</div>
	                <div class="row">
	                    <div class="col-md-4">
	                        <h6>Receipt Template</h6>
	                        <div class="form-group">
	                        	<select class="form-control">
	                        		<option>Select Receipt Template</option>
	                        	</select>
	                        </div>
	                    </div>
					</div>
					<div class="row">
	                    <div class="col-md-12 mb-4">
	                        <h6>Receipt Header</h6>
	                        <div class="form-row mt-3">
	                            <div class="col-md-2">
	                                <div class="custom-control custom-radio custom-control">
	                                    <input type="radio" class="custom-control-input" id="customRadio4" name="example2" value="customEx" checked="">
	                                    <label class="custom-control-label cursor-pointer" for="customRadio4">Auto Generated</label>
	                                </div>
	                            </div> 
	                            <div class="col-md-3">
	                                <div class="custom-control custom-radio custom-control">
	                                    <input type="radio" class="custom-control-input" id="customRadio3" name="example2" value="customEx" checked="">
	                                    <label class="custom-control-label cursor-pointer" for="customRadio3">Customized Header</label>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                	<div class="col-md-12">
	                		<div class="ms-card no-margin">
	                			<div class="media">
	                				<div class="media-body p-3">
	                					<h5 class="mt-0">MMSC</h5>
	                					<p>Eidgah Road,Pano-Akil</p>
	                					<span>www.mmsc.com | 0232323 | mmsc@gmail.com</span>
	                				</div>
	                			</div>
	                			<div class="bg-white border card-footer text-center">
	                				<h4>SCHOOL RELIEVING CERTIFICATE</h4>
	                				<div class="ms-card-heading-title mt-5">
	                					<p>Certificate Number <span class="red-text">15</span></p>
	                					<p>Date of Issue: <span class="red-text">dd-mm-yyyy</span></p>
	                				</div>
	                			</div>
	                		</div>
	                	</div>
	                </div>
	                <hr>
	                <a href="javascript:void();" class="btn btn-primary width70 m-auto">Save Settings</a>
				</div>
			</div>
		</div>

	</div>
</div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



