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
                    <li class="breadcrumb-item active" aria-current="page">User Wise Fee Collections</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>

                        <div class="dropdown text-right">
                            <a href="manage-fee-collections.php" class="btn btn-primary">Manage Fee Collection</a>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Select</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" value="">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Choose from existing </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Select a batch</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <select name="" class="form-control" id="">
                                            <option value="">G2 - A 2020</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Search Student<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control">
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

                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" value="">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Create New Fee Collection </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Select Fee Collection</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <select name="" class="form-control" id="">
                                            <option value="">Hostel Fee for the M/O May</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success">Create</button>
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



