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
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_addBuilding">Add Building</a>
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
                    <strong id="to_display">No Building Present</strong>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-4 d-none" id="to_show">
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
                                <td><a href="TimeTable_classAllocate_viewBuilding.php">Academic Block-I</a></td>
                                <td>
                                    <label>2</label>
                                    <div class="float-md-right">
                                        <a href="#" class="d-inline">Edit</a>&nbsp;&nbsp;
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
</div>
<div class="modal fade" tabindex="-1" id="modal_addBuilding" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round">Add Building</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group row mt-3">
                    <label class="col-md-3">Building Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <hr>
                <div class="row mt-3">
                    <h5 class="col-md-12">Add Rooms</h5>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-md-3 mt-2">Room Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                    </div>
                    <label class="col-md-2 mt-2">Capacity</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-1">
                        <i class="fas fa-times mt-2 text-danger"></i>
                    </div>
                </div>
                <hr>
                <div class="form-group row mt-3">
                    <label class="col-md-3 mt-2">Room Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                    </div>
                    <label class="col-md-2 mt-2">Capacity</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-1">
                        <i class="fas fa-times mt-2 text-danger"></i>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-2">
                        <i class="fa fa-plus mr-1 text-success d-inline" aria-hidden="true"></i>
                        <label class="text-success">Add</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" href="#" onclick="show()" data-dismiss="modal" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    var display_var = document.querySelector("#to_display");
    var show_var = document.querySelector("#to_show");

    function show() {
        display_var.innerHTML = "Building Added Successfully";
        show_var.classList.remove("d-none");
    }
</script>
<!-- footer -->
<?php require 'footer.php'; ?>
<!-- footer -->