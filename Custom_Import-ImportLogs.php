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
                    <li class="breadcrumb-item"><a href="Custom_Import-NewImports.php">New Imports</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Log Details</li>
                </ol>
            </nav>
        </div>

        <div class="col-md-12">
            <div class="ms-panel-body">
                <div class="row mt-5">
                    <div class="col-md-8"></div>
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
                                <th>Row Number</th>
                                <th>Status</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>Failed</td>
                                <td>Marital status should be either married, single, widowed or divorced.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>4</td>
                                <td>Failed</td>
                                <td>Marital status should be either married, single, widowed or divorced.</td>
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



