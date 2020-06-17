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
					<li class="breadcrumb-item active" aria-current="page">Custom Imports</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-12">
			<div class="ms-panel-header">
                <div>
                    <div class="d-inline-block">
                        <i class="fas fa-file-export"></i>
                        <h6 class="d-inline-block">Custom Imports</h6>
                        <span class="ml-2 mr-2">|</span>
                        <p class="d-inline-block">All Exports</p>
                    </div>
                    <div class="dropdown float-right">
                        <a href="Custom_Import-New.php" class="btn btn-primary width30">New</a>
                        <a href="" class="btn btn-primary">View Schedule Jobs</a>
                    </div>
                </div>
			</div>
			<div class="ms-panel-body">

                <!-- <div class="alert alert-warning text-center">
                    <strong>No Exports present</strong>
                </div> -->
                <div class="alert alert-warning text-center">
                    <strong>CSV Format Saved Successfully</strong>
                </div>

                <div class="table-responsive mt-4">
                    <table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
                        <thead class="text-white">
                            <tr>
                                <td>S.No</td>
                                <td>Name</td>
                                <td>Model</td>
                                <td>Options</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Employee Addmission</td>
                                <td>Employee Addmission</td>
                                <td>
                                    <a href="">Export CSV</a> | 
                                    <a href="">Import Data</a> | 
                                    <a href="Custom_Import-BulkEdit.php">Bulk Edit</a> | 
                                    <a href="">Delete</a> | 
                                    <a href="Custom_Import-NewImports.php">New Imports</a> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

			</div>
		</div>

	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



