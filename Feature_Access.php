

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
					<li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
					<li class="breadcrumb-item active" aria-current="page">Feature Access Settings</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel w-100">

				<div class="ms-panel-body">
                    <small>You can configure the list of features that parent/guradian of your institutioncan have access to.</small>

					<div class="table-responsive mt-4">
						<table id="data-table-4" class="table w-100 thead-primary table-bordered ms-card">
							<thead>
								<tr>

									<th colspan="4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Parent Guardian Features</label>
                                        </div>
                                    </th>
								</tr>
							</thead>
										
							<tbody>
								<tr>
									<td colspan="4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox2">Gallery</label>
                                        </div>
								    </td>
								</tr>
								<tr>
                                    <td colspan="4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox3">Hotel</label>
                                        </div>
                                    </td>
								</tr>
								<tr>
                                    <td colspan="4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox4">Transport</label>
                                        </div>
                                    </td>
								</tr>
								<tr>
                                    <td colspan="4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox5">Student Documents</label>
                                        </div>
                                    </td>

								</tr>
								<tr>
                                    <td colspan="4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox6">Assignment</label>
                                        </div>
                                    </td>
								</tr>
								<tr>
                                    <td colspan="4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox7">Tasks</label>
                                        </div>
                                    </td>
								</tr>
								<tr>
									<td colspan="5">
										<button class="btn btn-primary" type="submit">Save Settings</button>
									</td>
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



