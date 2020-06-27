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
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Fee Refund| </b><small>Create Refund Rule</small></h6>
                <div class="float-md-right">
                    <a href="Administration-Finance_feesRefund_viewRule.php" class="btn btn-primary m-0">View Refunds Rules</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Finance_fees_sub.php">Fees</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Finance_feesRefund_sub.php">Fees Refund</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Refund Rule</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="form-group row mt-5">
            <label class="col-md-2 mt-2 d-inline">Fee Collection<p class="d-inline text-danger">*</p></label>
            <div class="col-md-5">
                <select type="text" class="form-control">
                    <option value="JULY 11-05-2020 TO 12-05-2020">JULY 11-05-2020 TO 12-05-2020</option>
                    <option value="FEB 11-05-2020 TO 12-05-2020">FEB 11-05-2009 TO 12-05-2010</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 mt-2 d-inline">Refund Name<p class="d-inline text-danger">*</p></label>
            <div class="col-md-5">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 mt-2 d-inline">Refund Validity<p class="d-inline text-danger">*</p></label>
            <div class="col-md-5">
                <input type="dateTime-local" class="form-control hasDatePicker">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 mt-2 d-inline">Type</label>
            <div class="col-md-5 d-flex">
                <div class="custom-control custom-radio custom-control">
                    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                    <label class="custom-control-label cstm_font" for="customRadio">Percentage</label>
                </div>
                <div class="custom-control custom-radio custom-control ml-4">
                    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                    <label class="custom-control-label cstm_font" for="customRadio2">Amount</label>
                </div>    
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 mt-2 d-inline">Value<p class="d-inline text-danger">*</p></label>
            <div class="col-md-5">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-2">
            <a href="#" class="btn btn-primary">Create</a>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->