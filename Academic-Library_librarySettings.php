<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Library | <small> Library Settings</small></h6>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-1">Add New</button>
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
                    <li class="breadcrumb-item active" aria-current="page">Library Settings</li>
                </ol>
            </nav>
        </div>

        <div class="col-md-8 m-auto">
            <div class="col-md-12 my-4">
                <div class="col-md-12">
                    <div class="alert alert-warning text-center my-4">
                        <strong>Library card settings created successfully</strong>
                    </div>
                 </div>
                <div class="form-group row my-3">
                    <label class="col-sm-1 col-form-label">Courses</label>
                    <div class="col-sm-6">
                    <select class="form-control " id="catagory">
                        <option selected="">Master of Business Administration</option>
                        <option value="1">abc</option>
                        <option value="2">efg</option>
                        <option value="3">xyz</option>
                    </select>
                    </div>
                </div>
                    <div class="">
                        <table class="table table-bordered thead-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Course</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Book Issuable</th>
                                    <th scope="col">Time Period(In Days)</th>
                                    <th scope="col" class="border-0"></th>
                                    <th scope="col" class="border-0"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Master of Business Administration</td> 
                                    <td>Regular</td>
                                    <td>3</td>
                                    <td>30</td>
                                    <td class="border-0"><a href="#">Edit</a></td>
                                    <td class="border-0"><a href="#">Delete</a></td>
                                </tr>
                                <tr class="table-bordered">
                                    <td>Master of Business Administration</td> 
                                    <td>Financial Week Student</td>
                                    <td>6</td>
                                    <td>60</td>
                                    <td class="border-0"><a href="#">Edit</a></td>
                                    <td class="border-0"><a href="#">Delete</a></td>
                                </tr>
                                <tr class="table-bordered">
                                    <td>Master of Business Administration</td> 
                                    <td>Sibiling Child</td>
                                    <td>3</td>
                                    <td>30</td>
                                    <td class="border-0"><a href="#">Edit</a></td>
                                    <td class="border-0"><a href="#">Delete</a></td>
                                </tr>
                                <tr class="table-bordered">
                                    <td>Master of Business Administration</td> 
                                    <td>Staff Child</td>
                                    <td>5</td>
                                    <td>50</td>
                                    <td class="border-0"><a href="#">Edit</a></td>
                                    <td class="border-0"><a href="#">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-1">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title has-icon ms-icon-round ">Add Library Card Settings</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>

                                <div class="modal-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="row">
                                                    <div class="col-3"> <label for="validationCustom18"> Course </label></div>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="validationCustom18" placeholder="Master of Business Administration" value="Master of Business Administration" required="">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="row">
                                                    <div class="col-3"> <label for="validationCustom18"> Category</label></div>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <select class="form-control">
                                                                <option>Regular</option>
                                                                <option>Financial Week Student</option>
                                                                <option>Sibiling Child</option>
                                                                <option>Staff Child</option>
                                                            </select>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="row">
                                                    <div class="col-3"> <label for="validationCustom18"> Book Issuable</label></div>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="validationCustom18" placeholder="" value="" required="">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="modal-notice">
                                                         
                                                    </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="row">
                                                    <div class="col-3"> <label for="validationCustom18"> Time period</label></div>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="validationCustom18" placeholder="30" value="30" required="">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1 height_style">
                                                        <span>Days</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary shadow-none">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>




<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->