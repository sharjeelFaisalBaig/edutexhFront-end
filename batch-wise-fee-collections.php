

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
                    <li class="breadcrumb-item"><a href="Administration-Hostel-Sub.php">Hostel</a></li>
                    <li class="breadcrumb-item"><a href="Fee-Collection-Sub.php">Fee Collection </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Batch Wise Fee Collections</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>
                        <div class="dropdown text-right">
                            <a href="manage-wardens.php" class="btn btn-primary">Fee Collection</a>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Name  <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleName" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Start Date<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="datetime-local" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Due Date<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="datetime-local" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Due Date<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <select name="" class="form-control" id="">
                                            <option value="">Select a tax slab</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success">Create</button>
                        </div>
                        <div class="col-lg-6">
                            <div class="ms-card ms-widget ms-card-fh">
                                <div class="ms-card-header clearfix">
                                    <h6 class="ms-card-title">Select Batch: All, None </h6>
                                </div>
                                <div class="ms-card-body">
                                    <ul class="ms-list ms-task-block">

                                        <li class="ms-list-item">
                                            <label class="ms-checkbox-wrap">
                                                <input type="checkbox" value="">
                                                <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> PG - Pink </span>
                                        </li>
                                    </ul>
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

<!-- footer -->



