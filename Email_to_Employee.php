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
                      <li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
                      <li class="breadcrumb-item"><a href="Collaboration-Email_sub.php">Email</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Email to Employee</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel ms-panel-fh">

                <div class="ms-panel-body">
                    <form class="needs-validation clearfix" novalidate>
                        <div class="form-row row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="validationCustom25">Select Department</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <select class="form-control" id="validationCustom25" required="">
                                                <option value="">System Admin</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Selection Required!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom25">Select a Recipient</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card px-3">
                                            <h6>
                                                <a href="">Select all</a>
                                                <!-- <a href="">, None</a> -->
                                            </h6>
                                            <label>Admin User</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="validationCustom03">Recipent <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8 mb-2">
                                        <div class="card px-3">
                                            <label>Admin User</label>
                                            <label>Muhammad Saleem</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom04">Subject <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="Email Alert" required>
                                            <div class="invalid-feedback">This Field is Required</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom05">Message <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <textarea class="form-control" id="validationCustom05" rows="6" placeholder="Hi, this is testing message"></textarea>
                                            <div class="valid-feedback">Looks Good!</div>
                                            <div class="invalid-feedback">Minimum 28 characters required.</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-primary d-block width70" name="btn25" value="Send">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Body Content Wrapper -->

<!-- footer -->
<?php require 'footer.php';?>

<!-- footer -->



