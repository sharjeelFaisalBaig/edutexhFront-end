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
                <h6 class="my-4 d-md-inline"><b>Students | </b><small>Remove / Delete Student</small></h6>
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
                    <li class="breadcrumb-item"><a href="Academic-studentAdmission_profile.php">Sabiha</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Remove / Delete</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row mt-5">
            <div class="col-md-2">
                <p>Student :</p>
            </div>
            <div class="col-md-2">
                <p class="bold float-md-left">Sabiha</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-2">
                <p>Admin No :</p>
            </div>
            <div class="col-md-2">
                <p class="bold float-md-left">S4</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-2">
                <p>Course :</p>
            </div>
            <div class="col-md-2">
                <p class="bold float-md-left">Grade II</p>
            </div>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col-md-5">
                <a href="#" data-toggle="modal" data-target="#modal_archiveStudent">Student Leaving Intitution</a><br>
                <p class="text-muted">For Students Leaving The Institution Use This Option To Remove Them From The List Of Active Students & Place Them In The Former Student List</p>
            </div>
            <div class="col-md-1 border-left">
            </div>
            <div class="col-md-5">
                <a href="#" data-toggle="modal" data-target="#modal_deleteStudent">Delete Student</a><br>
                <p class="text-muted">Completely Delete Student Record From The Institution's Database Use This Option IF You Created The Student Record By Accident Adn Want To Remove It Completely</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_archiveStudent" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round">Archive Student</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-warning my-4 text-center row">
                            <div class="col-md-4">
                                <p>Sabiha</p>
                            </div>
                            <div class="col-md-4">
                                <p>Admin No : S2</p>
                            </div>
                            <div class="col-md-4">
                                <p>Class : Grade II</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="to_hide" class="">
                    <div class="col-md-12 mt-2">
                        <p class="text-muted">For Students Leaving The Institution Use This Option To Remove Them From The List Of Active Students & Place Them In The Former Student List</p>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-md-4">
                            <label class="mt-1">Reason For Leaving</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="mt-1">Leaving Date</label>
                        </div>
                        <div class="col-md-6">
                            <input type="dateTime-local" class="form-control hasDatePicker">
                        </div>
                    </div>
                </div>
                <div id="to_show" class="d-none">
                    <div class="row">
                        <div class="col-md-6 m-auto">
                            <p class="text-danger">Student-S2 Archived Successfully</p>
                        </div>
                    </div>
                </div>
            </div>
			<div class="modal-footer">
                <a id="to_show_2" href="Academic-certificate_individualCertificate_sub.php" class="btn btn-primary d-none">Generate TC</a>
				<a id="to_hide_2" href="#" onclick="showHide()" class="btn btn-primary">Archive student</a>
                <a class="btn btn-light" data-dismiss="modal">Cancel</a>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" tabindex="-1" id="modal_deleteStudent" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round">Delete Student</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
                <div class="row mt-4">
                    <div class="col-md-11 offset-md-1">
                        <i class="fas fa-exclamation-triangle text-warning d-inline"></i>
                        <p class="d-inline">You Cannot Delete The Student Due To The Following Reason</p>
                    </div>
                    <div class="col-md-9 offset-md-3 mt-1">
                        <ul class="cstm_ul">
                            <li>Has UnderGone Batch Transfer</li>
                            <li>Already Appeared For Exam</li>
                        </ul>
                    </div>
                    <div class="col-md-10 offset-md-2 mt-2">
                        <p class="d-inline">If You Still Want To Delete It</p>&nbsp;&nbsp;
                        <a href="#" class="d-inline">Click Here</a>
                    </div>
                </div>
            </div>
			<div class="modal-footer">
                <a class="btn btn-light" data-dismiss="modal">Cancel</a>
			</div>
		</div>
	</div>
</div>
<script>
    var to_show_var1 = document.getElementById("to_show").classList;
    var to_show_var2 = document.getElementById("to_show_2").classList;
    var to_hide_var1 = document.getElementById("to_hide").classList;
    var to_hide_var2 = document.getElementById("to_hide_2").classList;
    function showHide(){
        to_show_var1.remove("d-none");
        to_show_var2.remove("d-none");
        to_hide_var1.add("d-none");
        to_hide_var2.add("d-none");
    }
</script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->