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
                <h6 class="my-4 d-md-inline"><b>Fee Refund| </b><small>View Refunds</small></h6>
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
                    <li class="breadcrumb-item active" aria-current="page">View Refunds</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-10 m-auto">
        <div class="row mt-5">
            <label class="col-md-2 mt-1">Search By</label>
            <div class="col-md-2">
                <select class="form-control">
                    <option value="Date" selected>Date</option>
                    <option value="St_name">Student Name</option>
                    <option value="fee_coll">Fee Collection Name</option>
                </select>
            </div>
            <label class="col-md-2 mt-1">Start Date</label>
            <div class="col-md-2">
                <input type="dateTime-local" class="form-control">
            </div>
            <label class="col-md-1 mt-1">End Date</label>
            <div class="col-md-3">
                <input type="dateTime-local" class="form-control">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">SI No</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col">Fee Collection Name</th>
                                <th scope="col">Refunded By</th>
                                <th scope="col">Voucher No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Abdul Qadoos</td>
                                <td>6300</td>
                                <td>12-05-2020</td>
                                <td>July</td>
                                <td>Admin</td>
                                <td>21</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->