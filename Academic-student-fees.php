<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<style>
    .border-cstm-right {
        border-right: none !important;
    }

    .border-cstm-left {
        border-left: none !important;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students | </b><small>Fees</small></h6>
                <div class="float-md-right">
                    <a href="Academic-studentAdmission_profile.php" class="mt-1 btn btn-primary">Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-student.php">Students</a></li>
                    <li class="breadcrumb-item"><a href="Academic-studentAdmission_profile.php">Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Fees</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row mt-5">
            <div class="col-md-12">
                <p class="bold" data-toggle="modal" data-target="#modal-feeDetails">Sabiha</p>
            </div>
            <div class="col-md-12">
                <p>Course And Batch : Grade 3-A-2012</p>
            </div>
            <div class="col-md-12">
                <p>Admin S2</p>
            </div>
            <div class="col-md-12">
                <p>Roll No _</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="ms-panel ms-panel-fh">
                    <div class="ms-panel-body">
                        <div class="accordion has-gap ms-accordion-chevron" id="accordionExample2">
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseFour" onclick="hide()" aria-expanded="true" aria-controls="collapseFour">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Grade 3 - A - 2012</b></p>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <p>1 Unpaid Fee</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionExample2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 m-auto">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Fees Name</td>
                                                            <td>Status</td>
                                                            <td>Amount</td>
                                                            <td>Date</td>
                                                        </tr>
                                                        <tr class="alert alert-dark">
                                                            <td class="border-cstm-right">
                                                                <p class="bold">General Fees</p>
                                                            </td>
                                                            <td class="border-cstm-right border-cstm-left"></td>
                                                            <td class="border-cstm-right border-cstm-left"></td>
                                                            <td class="border-cstm-left"></td>
                                                        </tr>
                                                        <tr>
                                                            <td onclick="show_1()">For Year 2012</td>
                                                            <td class="text-danger">Unpaid</td>
                                                            <td>19792.00 / 19800.00</td>
                                                            <td>Due On 31-05-2020</td>
                                                        </tr>
                                                        <tr>
                                                            <td onclick="show_1()">For Year 2020</td>
                                                            <td class="text-success">Paid</td>
                                                            <td>19792.00 / 19800.00</td>
                                                            <td>Paid On 31-05-2020</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-none my-4" id="to_show_1">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SI NO.</th>
                                                    <th>Particulars</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="alert alert-dark">
                                                    <td class="border-cstm-right">
                                                        <p class="bold">Batch-Wise</p>
                                                    </td>
                                                    <td class="border-cstm-right border-cstm-left"></td>
                                                    <td class="border-cstm-left"></td>
                                                </tr>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Uniform Fee</td>
                                                    <td>15000.00</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Term 1 Fee</td>
                                                    <td>4999.00</td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Term 2 Fee</td>
                                                    <td>3999.00</td>
                                                </tr>
                                                <!--  -->
                                                <tr class="alert alert-dark">
                                                    <td class="border-cstm-right">
                                                        <p class="bold">Summary</p>
                                                    </td>
                                                    <td class="border-cstm-right border-cstm-left"></td>
                                                    <td class="border-cstm-left"></td>
                                                </tr>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Total Fees</td>
                                                    <td>19464.00</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Total Discount</td>
                                                    <td>00.00</td>
                                                </tr>
                                                <tr>
                                                    <th class="border-cstm-right"></th>
                                                    <td class="border-cstm-left text-md-right">Total Amount To Pay</td>
                                                    <td>19646.00</td>
                                                </tr>
                                                <tr>
                                                    <th class="border-cstm-right"></th>
                                                    <td class="border-cstm-left text-md-right">Total Amount Paid</td>
                                                    <td>19646.00 <i class="fas fa-check"></i></td>
                                                </tr>
                                                <tr>
                                                    <th class="border-cstm-right"></th>
                                                    <td class="border-cstm-left text-md-right">Total Due Amount</td>
                                                    <td>19646.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <h5>Payment</h5>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Recipt No.</th>
                                                    <th>Payment Date</th>
                                                    <th>Payment Mode</th>
                                                    <th>Payment Notes</th>
                                                    <th>Cashier</th>
                                                    <th>Amount (RS.)</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>7</th>
                                                    <td>31-5-2020</td>
                                                    <td>Cash</td>
                                                    <td></td>
                                                    <td>Admin User</td>
                                                    <td>19646.00</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" onclick="hide()" role="button" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Grade 10 - A - 2012</b></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>1 Unpaid Fee</p>
                                        </div>

                                    </div>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordionExample2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 m-auto">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Fees Name</td>
                                                            <td>Status</td>
                                                            <td>Amount</td>
                                                            <td>Date</td>
                                                        </tr>
                                                        <tr class="alert alert-dark">
                                                            <td class="border-cstm-right">
                                                                <p class="bold">General Fees</p>
                                                            </td>
                                                            <td class="border-cstm-right border-cstm-left"></td>
                                                            <td class="border-cstm-right border-cstm-left"></td>
                                                            <td class="border-cstm-left"></td>
                                                        </tr>
                                                        <tr>
                                                            <td onclick="show_2()">For Year 2012</td>
                                                            <td class="text-danger">Unpaid</td>
                                                            <td>19792.00 / 19800.00</td>
                                                            <td>Due On 31-05-2020</td>
                                                        </tr>
                                                        <tr>
                                                            <td onclick="show_2()">For Year 2020</td>
                                                            <td class="text-success">Paid</td>
                                                            <td>19792.00 / 19800.00</td>
                                                            <td>Paid On 31-05-2020</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-none my-4" id="to_show_2">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SI NO.</th>
                                                    <th>Particulars</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="alert alert-dark">
                                                    <td class="border-cstm-right">
                                                        <p class="bold">Batch-Wise</p>
                                                    </td>
                                                    <td class="border-cstm-right border-cstm-left"></td>
                                                    <td class="border-cstm-left"></td>
                                                </tr>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Uniform Fee</td>
                                                    <td>15000.00</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Term 1 Fee</td>
                                                    <td>4999.00</td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Term 2 Fee</td>
                                                    <td>3999.00</td>
                                                </tr>
                                                <!--  -->
                                                <tr class="alert alert-dark">
                                                    <td class="border-cstm-right">
                                                        <p class="bold">Summary</p>
                                                    </td>
                                                    <td class="border-cstm-right border-cstm-left"></td>
                                                    <td class="border-cstm-left"></td>
                                                </tr>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Total Fees</td>
                                                    <td>19464.00</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Total Discount</td>
                                                    <td>00.00</td>
                                                </tr>
                                                <tr>
                                                    <th class="border-cstm-right"></th>
                                                    <td class="border-cstm-left text-md-right">Total Amount To Pay</td>
                                                    <td>19646.00</td>
                                                </tr>
                                                <tr>
                                                    <th class="border-cstm-right"></th>
                                                    <td class="border-cstm-left text-md-right">Total Amount Paid</td>
                                                    <td>19646.00 <i class="fas fa-check"></i></td>
                                                </tr>
                                                <tr>
                                                    <th class="border-cstm-right"></th>
                                                    <td class="border-cstm-left text-md-right">Total Due Amount</td>
                                                    <td>19646.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <h5>Payment</h5>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Recipt No.</th>
                                                    <th>Payment Date</th>
                                                    <th>Payment Mode</th>
                                                    <th>Payment Notes</th>
                                                    <th>Cashier</th>
                                                    <th>Amount (RS.)</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>7</th>
                                                    <td>31-5-2020</td>
                                                    <td>Cash</td>
                                                    <td></td>
                                                    <td>Admin User</td>
                                                    <td>19646.00</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" onclick="hide()" role="button" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Grade 12 - A - 2012</b></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>1 Unpaid Fee</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordionExample2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 m-auto">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Fees Name</td>
                                                            <td>Status</td>
                                                            <td>Amount</td>
                                                            <td>Date</td>
                                                        </tr>
                                                        <tr class="alert alert-dark">
                                                            <td class="border-cstm-right">
                                                                <p class="bold">General Fees</p>
                                                            </td>
                                                            <td class="border-cstm-right border-cstm-left"></td>
                                                            <td class="border-cstm-right border-cstm-left"></td>
                                                            <td class="border-cstm-left"></td>
                                                        </tr>
                                                        <tr>
                                                            <td onclick="show_3()">For Year 2012</td>
                                                            <td class="text-danger">Unpaid</td>
                                                            <td>19792.00 / 19800.00</td>
                                                            <td>Due On 31-05-2020</td>
                                                        </tr>
                                                        <tr>
                                                            <td onclick="show_3()">For Year 2020</td>
                                                            <td class="text-success">Paid</td>
                                                            <td>19792.00 / 19800.00</td>
                                                            <td>Paid On 31-05-2020</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-none my-4" id="to_show_3">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SI NO.</th>
                                                    <th>Particulars</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="alert alert-dark">
                                                    <td class="border-cstm-right">
                                                        <p class="bold">Batch-Wise</p>
                                                    </td>
                                                    <td class="border-cstm-right border-cstm-left"></td>
                                                    <td class="border-cstm-left"></td>
                                                </tr>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Uniform Fee</td>
                                                    <td>15000.00</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Term 1 Fee</td>
                                                    <td>4999.00</td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Term 2 Fee</td>
                                                    <td>3999.00</td>
                                                </tr>
                                                <!--  -->
                                                <tr class="alert alert-dark">
                                                    <td class="border-cstm-right">
                                                        <p class="bold">Summary</p>
                                                    </td>
                                                    <td class="border-cstm-right border-cstm-left"></td>
                                                    <td class="border-cstm-left"></td>
                                                </tr>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Total Fees</td>
                                                    <td>19464.00</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Total Discount</td>
                                                    <td>00.00</td>
                                                </tr>
                                                <tr>
                                                    <th class="border-cstm-right"></th>
                                                    <td class="border-cstm-left text-md-right">Total Amount To Pay</td>
                                                    <td>19646.00</td>
                                                </tr>
                                                <tr>
                                                    <th class="border-cstm-right"></th>
                                                    <td class="border-cstm-left text-md-right">Total Amount Paid</td>
                                                    <td>19646.00 <i class="fas fa-check"></i></td>
                                                </tr>
                                                <tr>
                                                    <th class="border-cstm-right"></th>
                                                    <td class="border-cstm-left text-md-right">Total Due Amount</td>
                                                    <td>19646.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <h5>Payment</h5>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Recipt No.</th>
                                                    <th>Payment Date</th>
                                                    <th>Payment Mode</th>
                                                    <th>Payment Notes</th>
                                                    <th>Cashier</th>
                                                    <th>Amount (RS.)</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>7</th>
                                                    <td>31-5-2020</td>
                                                    <td>Cash</td>
                                                    <td></td>
                                                    <td>Admin User</td>
                                                    <td>19646.00</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
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
<div class="modal fade" tabindex="-1" id="modal-feeDetails" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round">Student Fees Preferences</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio">Create Fee Collection</label><br>
                            <small>Fee Collection Can Be Created For This Student</small>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio2">Don't Create Fee Collection For This Student In Current Batch G-3-A-2012</label><br>
                            <small>Fee Collection Can't Be Created For This Student In Current Batch However It Can Be Generated If Student Is Tranfered To Another Batch</small>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio3">Don't Create Fee Collection From Now On</label><br>
                            <small>Fee Collection Can't Be Created For This Student Anymore Even If Student Is Transfered To Another Batch Or Registers For a New Course</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    var show_var_1 = document.getElementById("to_show_1").classList;
    var show_var_2 = document.getElementById("to_show_2").classList;
    var show_var_3 = document.getElementById("to_show_3").classList;

    function show_1() {
        show_var_1.remove("d-none");
    };

    function show_2() {
        show_var_2.remove("d-none");
    };

    function show_3() {
        show_var_3.remove("d-none");
    };

    function hide() {
        show_var_1.add("d-none");
        show_var_2.add("d-none");
        show_var_3.add("d-none");
    };
</script>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->