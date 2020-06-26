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
                <h6 class="my-4 d-md-inline"><b>Employees | </b><small>Library</small></h6>
                <div class="float-md-right">
                    <a class="btn btn-primary mt-1" href="Academic-employee_generalProfile.php">Profile</a>
                    <a href="Academic-employee_remove.php" class="btn btn-primary mt-1">Delete</a>
                    <div class="dropdown d-inline">
                        <a class="dropdown-toggle mt-1 btn btn-primary " id="dropdownMenuLink_4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                        <div class="dropdown-menu dropdownMenuLink_4" aria-labelledby="dropdownMenuLink_4">
                            <a class="dropdown-item" href="Academic-employee_timeTable.php">Time Table</a>
                            <a class="dropdown-item" href="Academic-employee_library.php">Library</a>
                            <a class="dropdown-item" href="Academic-employee_transport.php">Transport</a>
                            <a class="dropdown-item" href="Academic-employee_activities.php">Activities</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-employee_generalProfile.php">Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>
    </div>
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
        <div class="row">
            <div class="col-md-12 my-4">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th>Books Borrowed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p class="ml-md-5">Masail-E-Namaz (Due-Date:- 31-2-2020)</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4 m-auto">
            <a href="Academic-studentAdmission.php" class="btn btn-primary d-inline">Edit</a>
            <a href="#" class="btn btn-primary d-inline">PDF Report</a>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->