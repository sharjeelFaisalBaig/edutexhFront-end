<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<style>
    .cstm_thead {
        background-color: #8D0302;
        color: white;
    }

    .cstm_border_left {
        border-left: none !important;
    }

    .cstm_border_right {
        border-right: none !important;
    }

    .cstm_text_vertical {
        writing-mode: tb-rl !important;
        text-orientation: sideways-right !important;
        font-size: 25px;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Employees | </b><small>Apply Leave</small></h6>
                <div class="float-md-right">
                    <a class="btn btn-primary mt-1" href="Academic-employee_generalProfile.php">Profile</a>
                    <a class="btn btn-primary mt-1" href="Academic-employee_leaves.php">My Leaves</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-employee_generalProfile.php">Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Apply Leave</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="row mt-3">
                <h5 class="col-md-12">Apply For Leave</h5>
            </div>
            <div class="form-group row mt-5">
                <label class="col-md-2">Leave Duration</label>
                <div class="custom-control custom-radio custom-control col-md-3 ml-3">
                    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                    <label class="custom-control-label" for="customRadio">Single Day</label><br>
                </div>
                <div class="custom-control custom-radio custom-control  col-md-3">
                    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                    <label class="custom-control-label" for="customRadio2">Multiple Days</label><br>
                </div>
                <div class="custom-control custom-radio custom-control  col-md-3">
                    <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
                    <label class="custom-control-label" for="customRadio3">Half Day</label><br>
                </div>
            </div>
            <div class="form-group row mt-4">
                <label class="col-md-2 mt-2">Date</label>
                <div class="col-md-3">
                    <input type="dateTime-local" class="form-control ml-1">
                </div>
                <label class="col-md-1 mt-2">To</label>
                <div class="col-md-3">
                    <input type="dateTime-local" class="form-control ml-1">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label class="col-md-2 mt-2">Leave Type</label>
                <div class="col-md-4 ml-1">
                    <select class="form-control">
                        <option selected>Select Leave Type</option>
                        <option value="Earned Leave">Earned Leave</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mt-4">
                <label class="col-md-2 mt-2">Reason</label>
                <div class="col-md-4 ml-1">
                    <textarea cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 offset-md-3">
                    <a href="#" class="btn btn-primary">Submit</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->