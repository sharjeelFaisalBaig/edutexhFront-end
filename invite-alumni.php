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
                    <li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
                    <li class="breadcrumb-item"><a href="Collaboration-Alumni_sub.php">Alumni</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Invite Alumni</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="">Event :</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control">
                                    <option>Annual Get To Gather</option>
                                    <option>Select event</option>
                                    <option>Parents Dat</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-2">
                                <p>Or</p>
                            </div>
                            <div class="col-lg-10">
                                <h5>Create Alumni Event</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-secondary">
                    <h5>Annual Get To Gather</h5>
                    <h6>26/05/2020 - 28/05/2020</h6>
                    <p>You all are invited</p>
                </div>

                <div>
                    <button class="btn btn-primary">Invite</button>
                    <button class="btn btn-primary">Cancel</button>
                </div>
                <hr>
                <div class="mt-4 table-responsive">
                    <h6>Select Alumni</h6>
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">Course</th>
                                <th scope="col">Year of completion</th>
                                <th scope="col">Batch</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <ul class="ms-list ms-task-block">
                                        <li class="ms-list-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="">
                                                <label class="form-check-label" for="inlineCheckbox2">Play Group</label>
                                            </div>
                                        </li>
                                    </ul>
                                </th>
                                <th>
                                    <ul class="ms-list ms-task-block">
                                        <li class="ms-list-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="">
                                                <label class="form-check-label" for="inlineCheckbox3">2021</label>
                                            </div>
                                        </li>
                                    </ul>
                                </th>
                                <th>
                                    <ul class="ms-list ms-task-block">
                                        <li class="ms-list-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="">
                                                <label class="form-check-label" for="inlineCheckbox4">PG-Blue</label>
                                            </div>
                                        </li>
                                    </ul>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="row my-5">
                    <div class="col-md-7">
                        <h6>Invitation</h6>
                        <textarea class="form-control" id="validationCustom03" rows="7" placeholder="You are cordially invited...."></textarea>
                        <ul class="ms-list ms-task-block">
                            <li class="ms-list-item">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="">
                                    <label class="form-check-label" for="inlineCheckbox5">Allow alumni to comment on the event</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7">
                        <h6>Invite co-ordinators and organizers</h6>
                        <small>Invite students and employees to organize this event</small>

                        <div class="row mt-4">
                            <div class="col-md-10 m-auto">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Admin User</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-disabled">Employee</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Muhammad Sufyan Shaikh</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-disabled">Employee</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Muhammad Kaleem</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-disabled">Student</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Majid Khan</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-disabled">Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-md-6">
                                <a href="" data-toggle="modal" data-target=".bd-example-modal-lg">
                                    <i class="fas fa-plus">&nbsp;&nbsp;&nbsp;Add an Employee</i>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="" data-toggle="modal" data-target=".bd-example-modal-lg2">
                                    <i class="fas fa-plus">&nbsp;&nbsp;&nbsp;Add a Student</i>
                                </a>
                            </div>
                        </div>
                        <hr>
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
                <h6 class="modal-title has-icon ms-icon-round ">Alumni Event Organizers-Invite Employees </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form class="needs-validation mb-2">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Department</label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="validationCustom25">
                                        <option value="">English</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="table-responsive overflowY"> <!-- give "overflowY" desire width overflow will apply -->
                                <table class="table table-bordered thead-primary">
                                    <thead>
                                        <tr>
                                            <th width="50">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="">
                                                </div>
                                            </th>
                                            <th>Employee Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="">
                                                </div>
                                            </td>
                                            <td>Muhammad Sufyan Shaikh</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="">
                                                </div>
                                            </td>
                                            <td>Muhammad Saleem</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <small>2 Selected</small>
                        </div>
                        <div class="col-md-2 text-center">
                            <button class="btn btnRytArrow vertical-center">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="col-md-5">
                            <div class="table-responsive overflowY"> <!-- give "overflowY" desire width overflow will apply -->
                                <table class="table table-bordered thead-primary">
                                    <thead>
                                        <tr>
                                            <th>Selected Users</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                System Admin(1)
                                                <a href=""><span aria-hidden="true" class="float-right">&times;</span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                English(1)
                                                <a href=""><span aria-hidden="true" class="float-right">&times;</span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none" type="submit">Add Organizers</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">Alumni Event Organizers-Invite Student </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form class="needs-validation mb-2">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row mb-3">
                                <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label-sm">Select Course</label>
                                <div class="col-sm-7">
                                    <select class="form-control" id="validationCustom25">
                                        <option value="">Play Group</option>
                                    </select>

                                </div>
                            </div>
                            <div class="table-responsive overflowY"> <!-- give "overflowY" desire width overflow will apply -->
                                <table class="table table-bordered thead-primary">
                                    <thead>
                                        <tr>
                                            <th width="50">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="">
                                                </div>
                                            </th>
                                            <th>Student Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="">
                                                </div>
                                            </td>
                                            <td>Muhammad Kaleem</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="">
                                                </div>
                                            </td>
                                            <td>Muhammad Arshad</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <small>2 Selected</small>
                        </div>
                        <div class="col-md-2 text-center">
                            <button class="btn btnRytArrow vertical-center">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group row mb-3">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Batch</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="validationCustom25">
                                        <option value="">Pink</option>
                                    </select>

                                </div>
                            </div>
                            <div class="table-responsive overflowY"> <!-- give "overflowY" desire width overflow will apply -->
                                <table class="table table-bordered thead-primary">
                                    <thead>
                                        <tr>
                                            <th>Selected Users</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Pink(1)
                                                <a href=""><span aria-hidden="true" class="float-right">&times;</span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none" type="submit">Add Organizers</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



