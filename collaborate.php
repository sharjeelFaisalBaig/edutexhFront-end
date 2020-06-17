<!-- header -->
<?php require 'header.php';?>
<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
					<li class="breadcrumb-item active" aria-current="page">Collaborate</li>
				</ol>
			</nav>
		</div>
        <div class="col-md-10 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>
                        <div class="d-inline-block">
                            <i class="fas fa-video"></i>
                            <h6 class="d-inline-block">Online Meetings</h6>
                            <span class="ml-2 mr-2">|</span>
                            <p class="d-inline-block">All</p>
                        </div>
                        <div class="dropdown float-right">
                            <a class="btn btn-primary" style="color:white;" data-target="#modal_meeting" data-toggle="modal">New</a>
                            <button class="btn btn-primary">Server</button>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <div class="mb-4">
                        <div class="d-inline-block">
                            <h6 class="text-primary">Activities :: 08/05/2020</h6>
                        </div>
                        <div class="float-right">
                            <div class="row">
                                <div class="col-3">
                                    <label for="datepickerstart">Select a date</label>
                                </div>
                                <div class="col-5">
                                    <div class="input-group">
                                        <input class="form-control"  type="date" id="selectdate">
                                        <div class="invalid-feedback">
                                            Please provide an Date separator.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-primary mt-0">Go</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-warning text-center">
                        <strong>No meeting for the selected date</strong>
                    </div>
                <!-- <div class="mt-4">
                        <h6>Fields marked with <span class="text-primary">*</span> must be filled.</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="">Name :</label>
                                    </div>
                                    <div class="col-md-8">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Hello">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Server :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option></option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Select department534007 :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>English</option>
                                                <option>English</option>
                                                <option>English</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Select member</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">
                                            <div class="ms-card-header clearfix">
                                                <h6 class="ms-card-title">Select All</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Saleem</span>

                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Sufiyan sh...</span>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Select a course :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Pg-Pink</option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Select member</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">
                                            <div class="ms-card-header clearfix">
                                                <h6 class="ms-card-title">Select All</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Adbul Bari</span>
                                                        <span> Adbul Basit</span>
                                                        <span> Adbul Qudoos</span>
                                                        <span> Adbul Salam</span>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="scheduledate">Scheduled on <span class="text-primary">*</span></label>
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <input class="form-control"  type="date" id="scheduledate">
                                            <div class="invalid-feedback">
                                                Please provide an Date separator.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn btn-primary width70">Save</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pl-4 border-left ">
                                    <label for="validationCustom37">Member</label>
                                    <div class="ms-card ms-widget ms-card-fh">
                                        <div class="ms-card-body">
                                            <ul class="ms-list ms-task-block">
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Muhammad Sufiyan</span>
                                                </li>
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Abdul Basit</span>
                                                </li>
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Abdul Bari</span>
                                                </li>
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Abdul Qudoos</span>
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div> -->

            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <div class="">
                        <table class="table table-hover thead-primary">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Created by</th>
                                <th scope="col">Scheduled on</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    Meeting
                                </td>
                                <td>Admin User</td>
                                <td>12/10/19 11.03.00 UTC</td>
                                <td>
                                    Join
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label class="ms-checkbox-wrap ms-checkbox-primary">
                                        <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                                    </label>
                                </th>

                                <td>
                                    <i class="fas fa-file-alt"></i>
                                    My Resume
                                </td>
                                <td>12/10/19</td>
                                <td>
                                    <a href="#"><i class="material-icons">star</i></a>
                                    <a href="#"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                    <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
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



<div class="modal fade bd-example-modal-lg"  id="modal_meeting"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">New Meeting</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">



            <div class="mt-4">
                        <h6>Fields marked with <span class="text-primary">*</span> must be filled.</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="">Name :</label>
                                    </div>
                                    <div class="col-md-8">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Hello">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Server :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option></option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Select department534007 :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>English</option>
                                                <option>English</option>
                                                <option>English</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Select member</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">
                                            <div class="ms-card-header clearfix">
                                                <h6 class="ms-card-title">Select All</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Saleem</span>

                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Sufiyan sh...</span>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Select a course :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Pg-Pink</option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Select member</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">
                                            <div class="ms-card-header clearfix">
                                                <h6 class="ms-card-title">Select All</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Adbul Bari</span>
                                                        <span> Adbul Basit</span>
                                                        <span> Adbul Qudoos</span>
                                                        <span> Adbul Salam</span>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="scheduledate">Scheduled on <span class="text-primary">*</span></label>
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <input class="form-control"  type="date" id="scheduledate">
                                            <div class="invalid-feedback">
                                                Please provide an Date separator.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn btn-primary width70">Save</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pl-4 border-left ">
                                    <label for="validationCustom37">Member</label>
                                    <div class="ms-card ms-widget ms-card-fh">
                                        <div class="ms-card-body">
                                            <ul class="ms-list ms-task-block">
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Muhammad Sufiyan</span>
                                                </li>
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Abdul Basit</span>
                                                </li>
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Abdul Bari</span>
                                                </li>
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Abdul Qudoos</span>
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>





            </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" type="submit">Submit</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- footer -->


<?php require 'footer.php';?>
<script>
    document.querySelector("#selectdate").valueAsDate = new Date();
    document.querySelector("#scheduledate").valueAsDate = new Date();
</script>
<!-- footer -->



