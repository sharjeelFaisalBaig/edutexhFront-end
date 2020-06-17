<?php include_once('header.php')?>

<div class="ms-content-wrapper">

	<div class="row">
		<div class="col-md-7">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
                    <li class="breadcrumb-item"><a href="managestudentrollnumber.php">Manage Students Roll Number</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Batches</li>
                </ol>
            </nav>
        </div>

        <div class="col-md-8 m-auto">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <h6>List of batches</h6>
                </div>
                <div class="ms-panel-body clearfix">
                    <div class="table-responsive">
                        <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                            <thead>
                                <tr>
                                    <th>Batch name</th>
                                    <th>Roll no. status</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>G2-A 2020</td>
                                    <td class="text-disabled">Not set</td>
                                    <td>
                                        <a href="" data-toggle="modal"  data-target=".bd-example-modal-lg">Set roll number</a>
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


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">
                Setting - Religious Studies</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Roll number prefix</strong>
                    </div>
                    <div class="col-md-3">
                        <strong>G2 <a href=""  data-toggle="modal" data-target="#roll-num" >Edit</a></strong><br>
                        <small><i>This is the default class prefix.</i></small>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-3">
                        <strong>Sorted based on</strong>
                    </div>
                    <div class="col-md-3">
                        <strong>Addmission no</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h6>List of students</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a href="">Reset all</a></h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Student Name</th>
                                <th>Addmission No.</th>
                                <th>Roll Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Muhammad Kaleem</td>
                                <td>S101</td>
                                <td>G2 <input type="text" class="form-control customInput" name="" placeholder="01"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Muhammad Arshad</td>
                                <td>S102</td>
                                <td>G2 <input type="text" class="form-control customInput" name="" placeholder="02"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Majid Khan</td>
                                <td>S103</td>
                                <td>G2 <input type="text" class="form-control customInput" name="" placeholder="03"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="roll-num" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">Set/Edit roll number prefix </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="examplePassword">Roll number prefix : </label>
                        <input type="text" class="form-control" id="examplePassword" placeholder="Roll num">
                        <small>Max 6 characters</small>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none">Save</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>
<?php include_once('footer.php')?>