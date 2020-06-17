

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Configurations</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Grade2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">G2-A2020</li>
                </ol>
            </nav>
        </div>

        <div class="ms-panel w-100">
            <div class="ms-panel-header">
                <h5>List of students</h5>
            </div>
            <div class="ms-panel-body">
                <form>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="">Roll number prefix</label>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <p>G2</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <a href="#" class="text-black" data-toggle="modal" data-target="#roll-num" > Edit</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="">Short Student Base On:</label>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Admission no</option>
                                    <option>Last name</option>
                                    <option>First name</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <a href="#" class="text-black" data-toggle="modal" data-target="#roll-num" > Edit</a>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table id="" class="table w-100  thead-primary">
                        <thead>
                        <tr>
                            <th>SI.No.</th>
                            <th>Student Name</th>
                            <th>Admission no</th>
                            <th>Roll number</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Muhammad Kaleem</td>
                            <td>S101</td>
                            <td>
                                <p class="text-black d-inline-block"> G2&nbsp;</p>
                                <input type="text" class="form-control d-inline-block" id="examplePassword" placeholder="G1" style="width: 70% !important;">
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muhammad Kaleem</td>
                            <td>S101</td>
                            <td>
                                <p class="text-black d-inline-block"> G2&nbsp;</p>
                                <input type="text" class="form-control d-inline-block" id="examplePassword" placeholder="G1" style="width: 70% !important;">
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muhammad Kaleem</td>
                            <td>S101</td>
                            <td>
                                <p class="text-black d-inline-block"> G2&nbsp;</p>
                                <input type="text" class="form-control d-inline-block" id="examplePassword" placeholder="G1" style="width: 70% !important;">
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muhammad Kaleem</td>
                            <td>S101</td>
                            <td>
                                <p class="text-black d-inline-block"> G2&nbsp;</p>
                                <input type="text" class="form-control d-inline-block" id="examplePassword" placeholder="G1" style="width: 70% !important;">
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muhammad Kaleem</td>
                            <td>S101</td>
                            <td>
                                <p class="text-black d-inline-block"> G2&nbsp;</p>
                                <input type="text" class="form-control d-inline-block" id="examplePassword" placeholder="G1" style="width: 70% !important;">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="roll-num" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i> Set/Edit roll number prefix </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form method="post">
                    <div class="ms-form-group has-icon">
                        <label for="examplePassword">Roll number prefix : </label>
                        <input type="text" class="form-control" id="examplePassword" placeholder="Roll num">
                        <label>Max 6 characters </label>

                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary shadow-none">Save</button>
            </div>

        </div>
    </div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->