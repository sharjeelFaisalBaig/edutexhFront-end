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
					<li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data and Reports</a></li>
					<li class="breadcrumb-item active" aria-current="page">Data Export</li>
				</ol>
			</nav>
		</div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>
                        <div class="d-inline-block">
                            <i class="fas fa-file-export"></i>
                            <h6 class="d-inline-block">Data Exports</h6>
                            <span class="ml-2 mr-2">|</span>
                            <p class="d-inline-block">All Exports</p>
                        </div>
                        <div class="dropdown float-right">
                            <button class="btn btn-primary">View Schedule Jobs</button>
                            <button class="btn btn-primary">New</button>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">

                    <div class="alert alert-warning text-center">
                        <strong>No Exports present</strong>
                    </div>
                    <div class="mt-4">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Exports</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">

                                            <div class="ms-card-body" style="overflow-y: auto; height: 200px;">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Course</span>

                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Employee</span>
                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Employee attendance</span>
                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Employee category</span>
                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Employee department</span>
                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Employe grade</span>
                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Employee</span>
                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Employee</span>
                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Employee</span>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Format</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>CSV</option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="btn btn-primary width70">Export</div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <div class="">
                        <table class="table table-hover thead-primary">
                            <thead>
                            <tr>
                                <th scope="col">SI. No</th>
                                <th scope="col">Modal Name</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Status</th>
                                <th scope="col">Format</th>
                                <th scope="col">Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>Employee</td>
                                <td>08/May/2020 11:07 PM</td>
                                <td>
                                    Success
                                </td>
                                <td>CSV</td>
                                <td>Download file</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



