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
                    <li class="breadcrumb-item active" aria-current="page">Email Alumni</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
                <div class="mb-4 table-responsive">
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
                
                <div class="row">
                    <div class="col-md-7">
                        <h6>Message</h6>
                        <div class="input-group mt-3">
                            <input type="text" class="form-control" placeholder="Subject" name="">
                        </div>
                        <div class="input-group mt-3">
                            <textarea class="form-control" id="validationCustom03" rows="5" placeholder="Add Your Message"></textarea>
                        </div>
                        <a href="" class="btn btn-primary width70">Send</a>
                        <a href="" class="btn btn-primary width70">Cancel</a>
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



