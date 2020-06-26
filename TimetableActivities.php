<!-- header -->
<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">

	<div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class="fas fa-clock"></i> Time Table</h6> |  <small>Activities</small>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Timetable</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Activities</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <div class="col-md-4">
                        <div class="row">
                            <input type="date" class="form-control" name="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                        <table class="table table-hover thead-primary table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Class Timing</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Batch</th>
                                <th scope="col">Classroom</th>
                                <th scope="col">Building</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>08:00am-09:00am</td>
                                <td>English</td>
                                <td>G1-A-2010</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="assigned mb-4" style="display: none">
                        <div>
                            <div class="mb-4">
                                <div class="d-inline-block">
                                    <h6 class="d-inline-block">Development of Academic Module</h6>
                                    <p class="d-inline-block" style="font-size: 11px">by Admin</p>
                                    <p class="text-primary">Start date: 11 May 2020</p>
                                </div>
                                <div class="dropdown float-right">
                                    <a href="#" class="btn btn-primary">Mark as Completed</a>
                                    <button class="btn btn-primary">Assigned</button>
                                    <p class="text-primary">Due date : 29 May 2020</p>
                                </div>
                            </div>
                            <div class="alert alert-secondary text-center" role="alert">
                                Academic Module include, Finance, Inventory, Hostel, Transport, Human Resource, Reminder, Settings, etc Modules.
                            </div>
                            <a href="#">No file atteched</a>

                            <div class="form-group mt-4">
                                <label for="exampleFormControlTextarea1">Post an update</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="">Attach a file :</label>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mb-4">Submit</button>

                        <div class="border-bottom update">
                            <div class="border-bottom pb-2 mb-2">
                                <h6 class="text-primary">Update</h6>
                            </div>
                            <ul>
                                <li class="d-inline-block">
                                    <p class="text-secondary m-0" style="font-size: 11px">Admin</p>
                                    <p>Thw task is completed and file is attached.</p>
                                </li>
                                <div class="float-right">
                                    <li class="d-inline-block">
                                        <a href="#">Download attachment</a>
                                    </li>
                                    <li class="d-inline-block">
                                        <p class="text-secondary">posted 1 minute ago</p>
                                    </li class="d-inline-block">
                                    <li class="d-inline-block">Delete</li>
                                </div>

                            </ul>
                        </div>
                    </div>
                    <div class="compeleted mb-4" style="display: none">
                        <div>
                            <div class="mb-4">
                                <div class="d-inline-block">
                                    <h6 class="d-inline-block">Development of Academic Module</h6>
                                    <p class="d-inline-block" style="font-size: 11px">by Admin</p>
                                    <p class="text-primary">Start date: 11 May 2020</p>
                                </div>
                                <div class="dropdown float-right">
                                    <a href="#" class="btn btn-primary">Mark as Completed</a>
                                    <button class="btn btn-primary">Completed</button>
                                    <p class="text-primary">Due date : 29 May 2020</p>
                                </div>
                            </div>
                            <div class="alert alert-secondary text-center" role="alert">
                                Academic Module include, Finance, Inventory, Hostel, Transport, Human Resource, Reminder, Settings, etc Modules.
                            </div>
                            <a href="#">No file atteched</a>

                            <div class="form-group mt-4">
                                <label for="exampleFormControlTextarea1">Post an update</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="">Attach a file :</label>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mb-4">Submit</button>

                        <div class="border-bottom update">
                            <div class="border-bottom pb-2 mb-2">
                                <h6 class="text-primary">Update</h6>
                            </div>
                            <ul>
                                <li class="d-inline-block">
                                    <p class="text-secondary m-0" style="font-size: 11px">Admin</p>
                                    <p>Thw task is completed and file is attached.</p>
                                </li>
                                <div class="float-right">
                                    <li class="d-inline-block">
                                        <a href="#">Download attachment</a>
                                    </li>
                                    <li class="d-inline-block">
                                        <p class="text-secondary">posted 1 minute ago</p>
                                    </li class="d-inline-block">
                                    <li class="d-inline-block">Delete</li>
                                </div>

                            </ul>
                        </div>
                    </div>


                    <!--table-->
                    <div class="mt-5 task" style="display: none">

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
                                        <label for="datepickerstart">Scheduled on <span class="text-primary">*</span></label>
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <input class="form-control"  type="text" id="datepickercoldate" placeholder="5/20/2020">
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
            </div>
        </div>


	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

