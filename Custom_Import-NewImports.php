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
                    <li class="breadcrumb-item active" aria-current="page">New Import</li>
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
                        <p class="d-inline-block">New Import</p>
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
                        <p class="text-disabled">Custom Import is useful to enter many records of institutional data at once using a comma separated value (CSV) file.</p>
                    </li>
                    <li class="ml-5 mb-3">
                        <p class="text-disabled">The headers in the CSV file indicate the value that has no entered. Use the instructions given below to enter data into the file.</p>
                    </li>
                    <li class="ml-5 mb-3">
                        <p class="text-disabled">The mandatory fields have been marked using the asterisk(*) mark before each column.</p>
                    </li>
                    <li class="ml-5 mb-5">
                        <p class="text-disabled">A maximum of 1000 rows can be imported at once.</p>
                    </li>
                </ul>

                <h6>Employee Addmission</h6>
                <div class="table-responsive mt-3">
                    <table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
                        <thead class="text-white">
                            <tr>
                                <td>Columns</td>
                                <td>Excepted Values</td>
                                <td>Example and Instructions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>*Employee Category Name</td>
                                <td>An Active Employee Category </td>
                                <td>System Admin etc.</td>
                            </tr>
                            <tr>
                                <td>*Employee Number</td>
                                <td>Alphanumeric, underscore, hyphen and black slash (/)</td>
                                <td>AYS/2018/5001</td>
                            </tr>
                        </tbody>
                    </table>
                </div>



                <div class="row mt-5">
                    <div class="col-md-8"><small>This will show after refresh.</small></div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label>Status</label>
                            </div>
                            <div class="col-md-8 text-right">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>All</option>
                                        <option>Failed</option>
                                        <option>Completed with errors</option>
                                        <option>Success</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive mt-3">
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



