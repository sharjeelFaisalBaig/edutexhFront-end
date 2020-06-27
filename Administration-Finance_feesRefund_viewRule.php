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
                    <a href="Administration-Finance_feesRefund_rule.php" class="btn btn-primary m-0">Create Refund Rule</a>
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
                    <li class="breadcrumb-item"><a href="Administration-Finance_feesRefund_rule.php">Refund Rules</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Refund Rule</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row mt-4">
            <div class="col-md-3 offset-md-2">
                <label class="mt-1">Select Fee Collection</label>
            </div>
            <div class="col-md-4">
                <select class="form-control">
                    <option value="JULY 11-05-2020" selected>JULY 11-05-2020</option>
                    <option value="abc">abc</option>
                </select>
            </div>
            <span class="col-md-3"></span>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">SI No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Refund Percentage Amount</th>
                                <th scope="col">Refund Validity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Covid 19 Discount</td>
                                <td>20.00%</td>
                                <td>
                                    <label>14-05-2020</label>
                                    <div class="float-md-right">
                                        <a href="#" class="d-inline">Edit</a>&nbsp;&nbsp;
                                        <a href="#" class="d-inline">Delete</a>
                                    </div>
                                </td>
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