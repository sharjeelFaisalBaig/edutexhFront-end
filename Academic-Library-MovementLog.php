<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Library | <small> Movement Log</small></h6>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-Library_sub.php">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Movement Log</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="col-md-12 my-4">
                <div class="row">
                    <div class="col-md-2">
                        <p class="text-disabled">Select Type</p>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control" id="inputGroupSelect05">
                                <option selected="">Select Department</option>
                                <option value="1">Issue Date</option>
                                <option value="2">Due Date</option>          
                        </select>
                    </div>
                </div>
                <div class="spacing"></div>
                <div class="row">
                    <div class="col-md-2">
                        <p class="text-disabled">Select date</p>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="date" class="form-control" placeholder="15 May 2020" name="">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p class="text-disabled">To</p>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="date" class="form-control" placeholder="15 May 2020" name="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">Search</button>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div>
            <div class="col-md-8 m-auto">
                <div class="row">
                    <div class="col-md-10">
                        <div class="row marginTop">
                            <div class="col-md-4">
                                <p class="text-disabled">Total Books</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-primary"> 
                                    <strong>:&nbsp;6</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="col-md-2">
                            <button class="btn btn-primary">Export as CSV</button>
                        </div>
                    </div>
                </div>
                <div class="spacing"></div>
                <div class="table-responsive">
                        <table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Book Number</th>
                                    <th>Bocrowed by</th>
                                    <th>Status</th>
                                    <th>Issue date</th>
                                    <th>Due date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>A9</td>
                                    <td>Muhammad Kameem -531</td>
                                    <td>Returned</td>
                                    <td>25-05-2020</td>
                                    <td>25-05-2020</td>
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