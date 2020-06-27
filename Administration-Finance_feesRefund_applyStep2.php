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
                <h6 class="my-4 d-md-inline"><b>Fee Refund| </b><small>Apply Refund</small></h6>
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
                    <li class="breadcrumb-item active" aria-current="page">Apply Refund</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="form-group row mt-5">
            <label class="col-md-3 mt-2">Select Fee Collection</label>
            <div class="col-md-6">
                <select class="form-control">
                    <option value="JULY 11-05-2020">JULY 11-05-2020</option>
                </select>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3">
                <p>Fee Receipt No :</p>
            </div>
            <div class="col-md-2">
                <p class="bold">N.A</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <p>Fee Caatgory Name :</p>
            </div>
            <div class="col-md-2">
                <p class="bold">Tution Fees</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <p>Student Catagory :</p>
            </div>
            <div class="col-md-2">
                <p class="bold">N.A</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <p>Fee Collection Name :</p>
            </div>
            <div class="col-md-2">
                <p class="bold">July</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">SI No</th>
                                <th scope="col">Particulars</th>
                                <th scope="col" class="text-md-right">Amount (RS)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cstm_border_right"></td>
                                <td class="cstm_border_left cstm_border_right">
                                    <p class="bold m-0">Batch-Wise</p>
                                </td>
                                <td class="cstm_border_left"></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Uniform Fee</td>
                                <td class="text-md-right">1500</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Term 1 Fee</td>
                                <td class="text-md-right">2000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Term 2 Fee</td>
                                <td class="text-md-right">2000</td>
                            </tr>
                            <tr class="bg-secondary">
                                <td class="cstm_border_right"></td>
                                <td class="cstm_border_left cstm_border_right">
                                </td>
                                <td class="cstm_border_left">
                                    <label class="bold m-0">Total</label>
                                    <div class="float-md-right">
                                        <p class="bold m-0 d-inline">31500</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-secondary">
                                <td class="cstm_border_right"></td>
                                <td class="cstm_border_left cstm_border_right">
                                </td>
                                <td class="cstm_border_left">
                                    <label class="bold m-0">Refund Ammount</label>
                                    <div class="float-md-right">
                                        <p class="bold m-0 d-inline">21500</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-secondary">
                                <td class="cstm_border_right"></td>
                                <td class="cstm_border_left cstm_border_right">
                                </td>
                                <td class="cstm_border_left">
                                    <label class="bold m-0">Eligible Refund</label>
                                    <div class="float-md-right">
                                        <p class="bold m-0 d-inline">24500</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-secondary">
                                <td class="cstm_border_right"></td>
                                <td class="cstm_border_left cstm_border_right">
                                </td>
                                <td class="cstm_border_left">
                                    <label class="bold m-0">Refund Ammount</label>
                                    <div class="float-md-right">
                                        <input type="text" readonly class="m-0 form-control d-inline" value="24500" >
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="bg-secondary form-group row">
            <label class="col-md-2 mt-1">Description</label>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
            <div class="col-md-4 mt-2 float-md-right">
                <a href="#" class="btn btn-primary m-0 d-inline">Refund</a>
                <a href="#" class="btn btn-primary m-0 d-inline" data-toggle="modal" data-target="#modal_revert">Revert</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_revert" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round">Revert Transaction</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row from-group mt-3">
                    <label class="col-md-2 mt-1 offset-md-3">Reason</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" href="#" data-dismiss="modal" class="btn btn-primary">Revert</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->