<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<style>
    .cstm_thead {
        background-color: #8D0302;
        color: white;
    }

    .fnt_cstm {
        font-size: 12px;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students Info | </b><small>Remarks</small></h6>
                <div class="float-md-right">
                    <a href="Academic-student-remarksHistory.php" class=" mt-1 btn btn-primary">Remarks History</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Remarks</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row mt-5">
            <div class="col-md-6 text-md-left">
                <h6>Remarks</h6>
            </div>
            <div class="col-md-6 text-md-right">
                <i class="fas fa-plus d-inline text-success"></i>&nbsp;
                <label class="d-inline">Add</label>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2">
                <p class="bold">Arsalan</p>
            </div>
            <div class="col-md-2">
                <p class="bold">Behaviour</p>
            </div>
            <div class="col-md-3">
                <p class="fnt_cstm">Arsalan Is Very Active Student In Class Adn Take Keen Interest In Every Program And Activity</p>
            </div>
            <div class="col-md-3">
                <p class="text-muted">Admin On 31 May 2020</p>
            </div>
            <div class="col-md-2 text-md-right">
                <i class="fas fa-times d-inline text-danger"></i>
                &nbsp;&nbsp;
                <i class="far fa-edit d-inline text-danger"></i>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->