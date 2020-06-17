<!-- header -->
<?php require 'header.php';?>
<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data and Reports</a></li>
                    <li class="breadcrumb-item"><a href="Custom_Import.php">Custom Import</a></li>
					<li class="breadcrumb-item active" aria-current="page">New</li>
				</ol>
			</nav>
		</div>

		<div class="ms-panel w-100">
			<div class="ms-panel-header">
                <div>
                    <div class="d-inline-block">
                        <i class="fas fa-file-export"></i>
                        <h6 class="d-inline-block">Custom Imports</h6>
                        <span class="ml-2 mr-2">|</span>
                        <p class="d-inline-block">All Exports</p>
                    </div>
                </div>
			</div>
			<div class="ms-panel-body">
               
                <div class="mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row mb-3">
                                <div class="col-lg-4 col-md-2">
                                    <label class="">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Employee Addmission" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-4 col-md-2">
                                    <label class="">Model</label>
                                </div>
                                <div class="col-lg-8 col-md-4">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Employee Addmission</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-4 col-md-2">
                                    <label for="validationCustom37">Associated Data</label>
                                </div>
                                <div class="col-lg-8 col-md-4">
                                    <div class="card ms-widget">
                                        <div class="card-body">
                                            <ul class="ms-list ms-task-block">
                                                <li class="ms-list-item">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Employee Bank Details</label>
                                                    </div>
                                                </li>
                                                <li class="ms-list-item">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox2">Employee Additional Details</label>
                                                    </div>
                                                </li>
                                                <li class="ms-list-item">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox3">Privileges</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn btn-primary mt-2 width70">Save</div>
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

<!-- footer -->



