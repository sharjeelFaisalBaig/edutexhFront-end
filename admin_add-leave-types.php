

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-HumanResource_sub.php">Human Resource</a></li>
                    <li class="breadcrumb-item"><a href="Administration-HR-Setting_sub.php">HR Settings</a></li>
                    <li class="breadcrumb-item"><a href="admin_leave-types.php">Leave Types</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Leave Types</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <form>
                        <div class="alert alert-warning text-center my-4">
                            <strong>You have not added any leave type for your institution. Please create leave type.</strong>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Leave Name</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Casual Leave">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Leave Code</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="CL">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Leave Count</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="20">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Valid From</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="today">
                                </div>
                            </div>
                        </div>
                       
                    </form>
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Employee Category</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Non Teaching Staff</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <label class="">Employee Leave Balance</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <small>Set how to manage employee leave balance during leave reset</small>
                                <ul class="ms-list d-flex">
                                    <li class="ms-list-item m-0 p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample1" value="" checked=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span>Allow Leave Carry Forward</span>
                                    </li>
                                    <li class="ms-list-item mx-2 p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample1" value=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span>Discard Leave Balance</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <small>Minimum number of leaves that can be carried forward</small>
                                <ul class="ms-list d-flex">
                                    <li class="ms-list-item  p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample2" value=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span>All Balance Leaves</span>
                                    </li>
                                    <li class="ms-list-item mx-2 p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample2" value="" checked=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span>Specific Count</span>
                                    </li>
                                    <li class="ms-list-item m-0  p-1">
                                        <input type="text" class="form-control" placeholder="E.g., 0.5, 1, 3.5," style="width: 120px;" disabled="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <label class="">Additional Leaves</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <small>Set how to manage employee additional leave</small>
                                <ul class="ms-list d-flex">
                                    <li class="ms-list-item m-0 p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample3" value="" checked=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span>Liable for Salary Deduction(LOP)</span>
                                    </li>
                                    <li class="ms-list-item mx-2 p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample3" value=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span>No Salary Deduction</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <label class="">Status</label>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <ul class="ms-list d-flex">
                                    <li class="ms-list-item m-0 p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample4" value="" checked=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Active </span>
                                    </li>
                                    <li class="ms-list-item mx-2 p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample4" value=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Inactive </span>
                                    </li>
                                </ul>
                            </div>
                            <a href="" class="btn btn-primary width70">Create</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



