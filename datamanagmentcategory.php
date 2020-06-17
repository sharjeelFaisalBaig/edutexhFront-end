<?php include_once('header.php')?>
<style type="text/css">
    tr.group {
    background: lightgray;
}
.mywd{
    width: 67%!important;
}
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
                    <li class="breadcrumb-item"><a href="datamanagment.php">Data Management</a></li>
					<li class="breadcrumb-item active" aria-current="page"> Sample 1 </li>
				</ol>
			</nav>
		</div>
    <div class="col-md-8 m-auto">
    <div class="ms-panel w-100">
      <div class="ms-panel-header">
                <div>
                       <div class="ml-1 dropdown float-right">
                        <button class="btn btn-primary" onclick="window.location.href=''">Data Management </button>
                    </div>
                    <div class="dropdown float-right">
                        <button class="btn btn-primary" onclick="window.location.href='datamanagementcategoryform.php'">New Entry </button>
                    </div>
                
                </div>
      </div>
    </div>
    </div>
    <div class="col-md-8 offset-4">
		<div class="ms-panel w-50">
			
			<div class="ms-panel-body">
                <div class="alert alert-warning text-center">
                    <strong>No data in this Category</strong>
                </div>
               <!--  <div class="mt-4">
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

                </div> -->
			</div>

		</div>
    </div>
    <div class="col-md-12 text-center content-center">
        <div class="ms-panel mywd  offset-2">
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">Category Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="group">
                            <td class="text-left"><a href="datamanagmentcategory.php">Sample 1 1</a></td>
                            <td>
                                <a href="./editdatamanagmentform.php"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="text-center">Name</td>
                            <td class="text-left">Aslam</td>
                        </tr>
                        <tr>
                            <td class="text-center">Gender</td>
                            <td class="text-left">Male</td>
                        </tr>
                        <tr>
                            <td class="text-center">Applied For</td>
                            <td class="text-left">Finance</td>
                        </tr>
                         <tr class="group">
                            <td class="text-left"><a href="datamanagmentcategory.php">Sample 1 2</a></td>
                            <td>
                                <a href="./editdatamanagmentform.php"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="text-center">Name</td>
                            <td class="text-left">Amjad</td>
                        </tr>
                        <tr>
                            <td class="text-center">Gender</td>
                            <td class="text-left">Male</td>
                        </tr>
                        <tr>
                            <td class="text-center">Applied For</td>
                            <td class="text-left">Account</td>
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

<?php include_once('footer.php')?>



