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
                <h6 class="my-4 d-md-inline"><b>Employees | </b><small>Payroll</small></h6>
                <div class="float-md-right">
                    <a class="btn btn-primary mt-1" href="Academic-employee_generalProfile.php">Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-employee_generalProfile.php">Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Payroll</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="col-md-8 m-auto">
            <div class="row my-5">
                <div class="col-md-2 offset-md-3">
                    <div class="text-center cstm_border">
                        <i class="fas fa-user  fa-10x"></i>
                    </div>
                </div>
                <div class="col-md-6 ml-3 my-2">
                    <h6 class="">Mumtaz Ahmed</h6>
                    <p class="text-success">Employee ID : E10</p>
                </div>
            </div>
            <hr>
            <div class="row mt-4">
                <p class="col-md-4">Payroll Group : BPS-17</p>
            </div>
            <div class="row">
                <p class="col-md-4">Gross Pay : 34850.00 RS</p>
            </div>
            <div class="row">
                <div class="col-md-12 my-4">
                    <div class="table-responsive">
                        <table class="table table-bordered thead-primary">
                            <thead>
                                <tr>
                                    <th class="cstm_border_right text-md-left">Earnings</th>
                                    <th class="cstm_border_left text-md-right">Amount (RS.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-md-left cstm_border_right">
                                        <p class="ml-md-3">Basic Pay</p>
                                    </td>
                                    <td class="text-md-right cstm_border_left">
                                        <p>20500.00 RS</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-md-left cstm_border_right">
                                        <p class="ml-md-3">HRA</p>
                                    </td>
                                    <td class="text-md-right cstm_border_left">
                                        <p>1300.00 RS</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-md-left cstm_border_right">
                                        <p class="ml-md-3">Medical Allowance</p>
                                    </td>
                                    <td class="text-md-right cstm_border_left">
                                        <p>900.00 RS</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-md-left cstm_border_right">
                                        <p class="ml-md-3 bold">Total Pay</p>
                                    </td>
                                    <td class="text-md-right cstm_border_left">
                                        <p class="bold">34850 RS</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered thead-primary mt-3">
                            <thead>
                                <tr>
                                    <th class="cstm_border_right text-md-left">Deductions</th>
                                    <th class="cstm_border_left text-md-right">Amount (RS.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-md-left cstm_border_right">
                                        <p class="ml-md-3">Income TAX</p>
                                    </td>
                                    <td class="text-md-right cstm_border_left">
                                        <p>1025.00 RS</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-md-left cstm_border_right">
                                        <p class="ml-md-3">Provident Fund</p>
                                    </td>
                                    <td class="text-md-right cstm_border_left">
                                        <p>5000.00 RS</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-md-left cstm_border_right">
                                        <p class="ml-md-3 bold">Total Deduction</p>
                                    </td>
                                    <td class="text-md-right cstm_border_left">
                                        <p class="bold">6050 RS</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered thead-primary mt-3">
                            <thead>
                                <tr>
                                    <th class="cstm_border_right text-md-left">Net Pay</th>
                                    <th class="cstm_border_left text-md-right">28825.00 RS</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-auto">
                <a href="Academic-studentAdmission.php" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->