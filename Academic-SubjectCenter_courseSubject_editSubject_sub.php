<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Course Subjects| </b><small>Manage Subjects</small></h6>
                <div class="float-md-right">
                    <a href="Academic-SubjectCenter_sub.php" class="btn btn-primary m-0">Subjects Center</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-subjectCenter_sub.php">Subject Center</a></li> 
                    <li class="breadcrumb-item"><a href="Academic-subjectCenter_courseSubject_sub.php">Course Subject</a></li> 
                    <li class="breadcrumb-item active" aria-current="page">Subjects</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row my-5">
            <h5 class="col-md-12">Manage Subjects</h5>
        </div>
        <div class="form-group row">
            <label class="col-md-2 mt-2">Course</label>
            <div class="col-md-4">
                <select class="form-control">
                    <option value="grade-1">Grade I</option>
                    <option value="grade-2">Grade II</option>
                </select>
            </div>
            <label class="col-md-2 mt-2">Batch</label>
            <div class="col-md-4">
                <select class="form-control">
                    <option value="grade-1">G1-A-2020</option>
                    <option value="grade-2">G2-B-2019</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="alert alert-warning text-center my-4">
                    <strong>No Subjects , Subject Group , Elective Group Assigned To Batch</strong>
                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>
        <div class="row">
            <a href="#" class="col-md-12">Assign Elective Subject</a>
        </div>
    </div>
</div>        
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->
