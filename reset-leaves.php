

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
					<li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Human Resource </a></li>
					<li class="breadcrumb-item"><a href="Administration-Settings_sub.php"> Employee LeaveManagement </a></li>
					<li class="breadcrumb-item"><a href="Administration-Settings_sub.php">  Leave Reset </a></li>
					<li class="breadcrumb-item active" aria-current="page">Reset leaves</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel w-100">
                <div>
                    <h4>Reset leaves</h4>
                    <p class="text-secondary ">Leave Reset updates the employee's leave balance for all leave tupes. You can perform a Leave Reset for an individual employee, for all employee of a department, or for all emplyee in the institution.</p>
                </div>
				<div class="ms-panel-body">
                    <div class="row">
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Search employee name/number">
                        </div>
                        <div class="col-4">
                            <select name="" class="form-control" id="">
                                <option value="">English</option>
                            </select>
                        </div>
                    </div>
					<div class="table-responsive mt-4">
						<table id="data-table-4" class="table w-100 thead-primary table-bordered ms-card">
							<thead>
								<tr>

									<th colspan="4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Employee number</th>
                                    <th>Department</th>
                                    <th>Last reset date</th>
								</tr>
							</thead>
										
							<tbody>
								<tr>
									<td colspan="4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                        </div>
								    </td>
                                    <td>Muhammad Sufiyan Shaikh</td>
                                    <td>E1</td>
                                    <td>English</td>
                                    <td>27-04-2020</td>
								</tr>
								<tr>
                                    <td colspan="4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                        </div>
                                    </td>
                                    <td>Muhammad Saleem</td>
                                    <td>E1</td>
                                    <td>English</td>
                                    <td>27-04-2020</td>
								</tr>
								<tr>
                                    <td colspan="4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                        </div>
                                    </td>
                                    <td>Muhammad Saleem</td>
                                    <td>E1</td>
                                    <td>English</td>
                                    <td>27-04-2020</td>
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



