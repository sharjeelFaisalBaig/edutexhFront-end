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
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="assignment.php">Assignment</a></li>
                    <li class="breadcrumb-item"><a href="assignment-darwinStudent.php">Darwin Theory</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Answer</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-9 m-auto">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                </div>
                <div class="ms-panel-body">
                    <form class="needs-validation clearfix" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 m-auto">
                                <form class="needs-validation mb-5" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <label for="validationCustom25">Title</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Darwin Theory" name="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03">
                                                <p>Content</p>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <textarea class="form-control" id="validationCustom03" rows="5" placeholder="Write down about the drawin theory in"></textarea>
                                            </div>
                                            <small class="mb-2">28 characters</small>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom25">Attach File (5MB max)</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="file" class="form-control" placeholder="" name="">
                                            </div>
                                            <input type="submit" class="btn btn-primary d-block width80" name="btn25" value="Submit Assignment">
                                        </div>

                                    </div>
                                </form>

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



