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
        <div class="col-md-12">
            <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class="fa fa-building" aria-hidden="true"></i> Class Allocation</h6> | <small>Manage Building</small>
                <div class="float-md-right">
                    <a href="#" class="btn btn-primary">Add Building</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Timetable</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_classAllocate_sub.php">Class Allocation</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Building</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="alert alert-warning text-center my-4">
                    <strong>No Building Present</strong>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="table-responsive">
                <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">SI No</th>
                            <th scope="col">Buildings</th>
                            <th scope="col">No. Of Rooms</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Academic Block-I</td>
                            <td>
                                <label>2</label>
                                <div class="text-md-right">
                                    <a href="#" class="d-inline">Edit</a>
                                    <a href="#" class="d-inline">Delete</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<?php require 'footer.php'; ?>
<!-- footer -->