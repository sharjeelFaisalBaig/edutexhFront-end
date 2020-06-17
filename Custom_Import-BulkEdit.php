<!-- header -->
<?php require 'header.php';?>
<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">

	<div class="row">
		<div class="col-md-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data and Reports</a></li>
                    <li class="breadcrumb-item"><a href="Custom_Import.php">Custom Import</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bulk Edit</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-4 text-right">
            <a href="" class="btn btn-success m-0">Imports</a>
        </div>

        <div class="col-md-12">
            <div class="ms-panel-header">
                <div>
                    <div class="d-inline-block">
                        <i class="fas fa-file-export"></i>
                        <h6 class="d-inline-block">CSV Data Imports</h6>
                        <span class="ml-2 mr-2">|</span>
                        <p class="d-inline-block">Edit</p>
                    </div>
                </div>
            </div>
            <div class="ms-panel-body">
                <div class="row">
                    <div class="col-3">
                        <label for="validatedCustomFile">Select File (500KB max)</label>
                    </div>
                    <div class="col-4">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile">
                                <label class="custom-file-label" for="validatedCustomFile">No file Selected...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary mt-2 width70">Upload</a>
                    </div>
                </div>

                <ul>
                    <li class="mb-3 mt-5"><strong>Instruction</strong></li>
                    <li class="ml-5 mb-3">
                        <p class="text-disabled">Bulk edit feature is useful when a change needs to be made to many records that were uploaded through Custom Import.</p>
                    </li>
                    <li class="ml-5 mb-3">
                        <p class="text-disabled">It uses certain columns of the import as reference keys to identify the existing records. Enter the value of the Reference Key given below and enter the value against the columns that you want to change.</p>
                    </li>
                    <li class="ml-5 mb-3">
                        <p class="text-disabled">For What values that have to remain unchanged, keep the column as blank. This applies for mandatory fields also that have a * mark in the CSV file.</p>
                    </li>
                    <li class="ml-5 mb-5">
                        <p class="text-disabled">To uncheck a previously entered value, enter NULL against that column.</p>
                    </li>
                </ul>

                <div class="table-responsive mt-3">
                    <table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
                        <thead class="text-white">
                            <tr>
                                <th>Data Type</th>
                                <th>Fields that cannot be edited</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Employee Addmission</td>
                                <td>Employee Number</td>
                            </tr>
                            <tr>
                                <td>Student Addmission</td>
                                <td>Addmission No</td>
                            </tr>
                            <tr>
                                <td>Guardian Addition</td>
                                <td>Ward Addmission Number, First Name, Relation</td>
                            </tr>
                            <tr>
                                <td>Student Attendance</td>
                                <td>Student Addmission Number, Month date</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="table-responsive mt-5">
                <small>Show After Click on Imports</small>
                    <table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
                        <thead class="text-white">
                            <tr>
                                <th>S.No</th>
                                <th>Export Name</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Employee Addmission</td>
                                <td>08 May 2020 &nbsp; 10:32 PM</td>
                                <td>Success</td>
                                <td><a href="Custom_Import-ImportLogs.php">Import Log Details</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Employee Addmission</td>
                                <td>08 May 2020 &nbsp; 10:32 PM</td>
                                <td>Completed with errors</td>
                                <td>Import Log Details</td>
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



