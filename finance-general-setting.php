

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-6">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		            <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Finance_settings_sub.php">Finance Settings</a></li>
					<li class="breadcrumb-item active" aria-current="page">General Settings</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h6>General Settings</h6>
                        <small>Configure settings required to manage the different fees in your institution</small>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6>Fee Receipt Mode</h6>
                        <small>Select how many receipts should be generated for one transaction when using Pay all Fees</small>
                        <div class="form-row mt-3">
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio1" name="example" value="customEx">
                                    <label class="custom-control-label cursor-pointer" for="customRadio1">Single</label>
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx" checked="">
                                    <label class="custom-control-label cursor-pointer" for="customRadio2">Multiple</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6>Multiple Fee Account</h6>
                        <small>Group fee into different account labels using this setting. Filter in reports to isolate transactions under a particular account. When disabled, all transactions go under the default fee account.</small>
                        <div class="form-row mt-3">
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio3" name="example2" value="customEx">
                                    <label class="custom-control-label cursor-pointer" for="customRadio3">Enable</label>
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio4" name="example2" value="customEx" checked="">
                                    <label class="custom-control-label cursor-pointer" for="customRadio4">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6>Multiple Receipt Templates</h6>
                        <small>Create customized receipt templates using this setting. Design receipt headers and footers for different fee types and apply to the respective finance category.</small>
                        <div class="form-row mt-3">
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio5" name="example3" value="customEx">
                                    <label class="custom-control-label cursor-pointer" for="customRadio5">Enable</label>
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio6" name="example3" value="customEx" checked="">
                                    <label class="custom-control-label cursor-pointer" for="customRadio6">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6>Multiple Receipt Sets</h6>
                        <small>Use this setting to create different receipt number sequences for different fees.</small>
                        <div class="form-row mt-3">
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio7" name="example4" value="customEx">
                                    <label class="custom-control-label cursor-pointer" for="customRadio7">Enable</label>
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio8" name="example4" value="customEx" checked="">
                                    <label class="custom-control-label cursor-pointer" for="customRadio8">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6>Default Fee Receipt Settings</h6>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <label>Default Fee Receipt Prefix</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" placeholder="Receipt" class="form-control" name="">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label>Default Fee Receipt Starting Number</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" placeholder="001" class="form-control" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h6>Enable Tax Settings</h6>
                        <div class="form-row mt-3">
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio9" name="example5" value="customEx" checked="">
                                    <label class="custom-control-label cursor-pointer" for="customRadio9">Enable</label>
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio10" name="example5" value="customEx">
                                    <label class="custom-control-label cursor-pointer" for="customRadio10">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6>Enable Invoice Generation</h6>
                        <div class="form-row mt-3">
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio11" name="example6" value="customEx" checked="">
                                    <label class="custom-control-label cursor-pointer" for="customRadio11">Enable</label>
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio12" name="example6" value="customEx">
                                    <label class="custom-control-label cursor-pointer" for="customRadio12">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6>Invoice Number Settings</h6>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label>Starting Invoice Number</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="INV-001" class="form-control" name="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6>Amount in Words</h6>
                        <small>Enable this setting to show the fees paid amount in words in the fee receipts..</small>
                        <div class="form-row mt-3">
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio13" name="example7" value="customEx">
                                    <label class="custom-control-label cursor-pointer" for="customRadio13">Enable</label>
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="custom-control custom-radio custom-control">
                                    <input type="radio" class="custom-control-input" id="customRadio14" name="example7" value="customEx" checked="">
                                    <label class="custom-control-label cursor-pointer" for="customRadio14">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <button class="btn btn-primary width70">Save Settings</button>
			</div>
		</div>

	</div>
</div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



