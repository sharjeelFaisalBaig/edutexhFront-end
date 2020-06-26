<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<style>
    .cstm_thead {
        background-color: #8D0302;
        color: white;
    }
    .cstm_border_left{
        border-left:none !important;
    }
    .cstm_border_right{
        border-right:none !important;
    }
    .cstm_text_vertical{
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
                <h6 class="my-4 d-md-inline"><b>Employees | </b><small>Time Table</small></h6>
                <div class="float-md-right">
                    <a class="btn btn-primary" href="Academic-employee_generalProfile.php">Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-employee_generalProfile.php">Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Time Table</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row form-group mt-5">
            <label class="col-md-3 mt-2">Select Time Table</label>
            <div class="col-md-4">
                <select class="form-control">
                    <option selected>Select Time Table</option>
                    <option value="1 MAY 2020 - 31 MAY 2020">1 MAY 2020 - 31 MAY 2020</option>
                </select>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                            <tr>
                                <th class="text-md-left cstm_border_right">
                                    Employee Name :
                                </th>
                                <th class="cstm_border_right text-md-left cstm_border_left">
                                    Manzoor Mustafa
                                </th>
                                <th class="cstm_border_right cstm_border_left"></th>
                                <th class="text-md-right cstm_border_left cstm_border_right">
                                    Department : &nbsp;&nbsp;
                                </th>
                                <th class="cstm_border_right cstm_border_left">
                                    Botany
                                </th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><p class="cstm_text_vertical">Monday</p></td>
                                <td>
                                    <small class="ml-2">10:00 A.M - 11:00 A.M </small>
                                    <p class="bold">Biology</p>
                                    <p>(Elective)</p>
                                    <p>G11-A-2020</p>
                                </td>
                                <td class="cstm_border_right"></td>
                                <td class="cstm_border_right cstm_border_left"></td>
                                <td class=" cstm_border_left"></td>
                            </tr>
                            <tr>
                                <td class="text-md-right"><p class="cstm_text_vertical">Tuesday</p></td>
                                <td>
                                    <small class="ml-2">10:00 A.M - 11:00 A.M </small>
                                    <p class="bold">Biology</p>
                                    <p>(Elective)</p>
                                    <p>G11-A-2020</p>
                                </td>
                                <td class="cstm_border_right"></td>
                                <td class="cstm_border_right cstm_border_left"></td>
                                <td class=" cstm_border_left"></td>
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