<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
    .cstm_ul{
        list-style-type: square;
    }
    .cstm_thead{
        background-color:#8D0302;
        color:white;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students Info | </b><small>Parent Profile</small></h6>
                <div class="float-md-right">
                    <a href="Academic-studentAdmission_profile.php" class=" mt-1 btn btn-primary">Profile</a>
                    <a href="Academic-studentAdmission_step3.php" class="btn btn-primary mt-1 ">Add Guardians</a>
                    <a href="Academic-studentAdmission_step2.php" class="btn btn-primary mt-1 ">Configure Sibling</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Parent Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row mt-5">
            <div class="col-md-6">
                <a href="Academic-studentAdmission_step4.php">Parents And Guardian</a>
                <ul class="ml-md-3">
                    <li class="cstm_ul ml-3">
                        <a href="Academic-student-Parentprofile.php" class="d-inline">Maira</a>&nbsp;&nbsp;
                        <p class="d-inline bold">(Mother)</p>
                    </li>
                    <li class="cstm_ul ml-3">
                        <a href="Academic-student-Parentprofile.php" class="d-inline">Abdul Qayoom</a>&nbsp;&nbsp;
                        <p class="d-inline bold">(Father)</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3">
                <div class="text-center cstm_border">
                <i class="fas fa-user  fa-10x"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 my-4">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary table-striped">
                        <tbody>
                            <tr>
                                <th class="cstm_thead">Name</th>
                                <td>Maira</td> 
                            </tr>
                            <tr>
                                <th class="cstm_thead">Relation</th>
                                <td>Mother</td> 
                            </tr>
                            <tr>
                                <th class="cstm_thead">Date Of Birth</th>
                                <td>12 june 2004</td>
                            </tr>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->