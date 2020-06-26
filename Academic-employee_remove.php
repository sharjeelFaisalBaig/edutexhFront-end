<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<style>
    .cstm_thead {
        background-color: #8D0302;
        color: white;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Employees | </b><small>Remove Employee</small></h6>
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
                    <li class="breadcrumb-item active" aria-current="page">Remove Employee</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row d-none" id="to_show">
            <div class="col-md-12">
                <div class="alert alert-warning text-center my-4">
                    <strong>Cannot Delete The Employee With Dependency Exist , Use Employee Leaving Institution</strong>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-2">
                <p>Employee Name :</p>
            </div>
            <div class="col-md-2">
                <p class="bold float-md-left">Mumtaz Ahmed</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-2">
                <p>Employee No :</p>
            </div>
            <div class="col-md-2">
                <p class="bold float-md-left">E10</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-2">
                <p>Department :</p>
            </div>
            <div class="col-md-2">
                <p class="bold float-md-left">Chemistry</p>
            </div>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col-md-5">
                <a href="#" data-toggle="modal" data-target="#modal_archiveEmployee">Employee Leaving Intitution</a><br>
                <p class="text-muted">Use This Option To Remove The Employee Who Would Be Leaving The Institution From The List Of Active Emlployees & Place Them In The Former Employees List</p>
            </div>
            <div class="col-md-1 border-left">
            </div>
            <div class="col-md-5" id="to_mute">
                <a href="#" onclick="deleteEmp()">Remove Employee Record</a><br>
                <p class="text-muted">Completely Delete Employee Record From The Institution's Database Use This Option IF You Created The Employee Record By Accident & Want To Remove It Completely</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_archiveEmployee" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round">Archive Employee</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-warning my-4 text-center row">
                            <div class="col-md-3 border-right">
                                <p>Mumtaz Ahmed</p>
                            </div>
                            <div class="col-md-4 border-right">
                                <p>Employee No. E10</p>
                            </div>
                            <div class="col-md-5">
                                <p>Department : Chemistry</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row mt-2">
                        <p class="col-md-12 text-muted">Use This Option To Remove The Employee Who Would Be Leaving The Institution From The List Of Active Emlployees & Place Them In The Former Employees List</p>
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
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary" data-dismiss="modal">Delete</a>
                <a class="btn btn-light" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>
<script>
    var to_show_var = document.querySelector("#to_show").classList
    var to_mute_var = document.querySelector("#to_mute")

    function deleteEmp() {
        to_show_var.remove("d-none");
        to_mute_var.classList.add("text-muted");
        to_mute_var.style.opacity = "0.5"
    };
</script>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->