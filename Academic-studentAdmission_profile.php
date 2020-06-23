<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
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
                <h6 class="my-4 d-md-inline"><b>Students Info | </b><small>Profile</small></h6>
                <div class="float-md-right">
                    <a href="Academic-userProfile_report_sub.php" class=" mt-1 btn btn-primary">Reports</a>
                    <a href="#" class="btn btn-primary mt-1 ">Guardians</a>
                    <a href="#" class="btn btn-primary mt-1 ">Send Email</a>
                    <a href="#" class="btn btn-primary mt-1 ">Delete</a>
                    <a class="btn btn-primary dropdown-toggle  mt-1 " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-student.php">Students</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Students Admission</li>
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
              <h6 class="">Abdul Basit</h6>
              <p class="text-success">Class : Play Group</p>
              <p class="text-success">Batch : Pink</p>
              <p class="text-success">Admin No : S40</p>
              <p class="text-success">Roll No : PG025</p>
            </div>
       </div>
       <hr>
       <div class="col-md-12 my-4">
            <div class="table-responsive">
                <table class="table table-bordered thead-primary table-striped">
                <tbody>
                    <tr>
                        <th class="cstm_thead">Admission Date</th>
                        <td>27 May 2020</td> 
                    </tr>
                    <tr>
                        <th class="cstm_thead">Date Of Birth</th>
                        <td>12 june 2004</td>
                    </tr>
                    <tr>
                        <th class="cstm_thead">Blood Group</th>
                        <td>B-</td>
                    </tr>
                    <tr>
                        <th class="cstm_thead">Gender</th>
                        <td>Male</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->