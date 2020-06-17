<!-- header -->
<?php require 'header.php';?>

<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                      <li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
                      <li class="breadcrumb-item"><a href="Collaboration-Email_sub.php">Email</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Email Unsubscription</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel ms-panel-fh">

                <div class="ms-panel-body">
                    <form class="needs-validation mb-5" novalidate>
                        <div class="form-row">
                            <div class="col-md-3">
                                <label for="validationCustom03">From :</label>
                                <input type="text" class="form-control" id="datepicker" id="validationCustom03" placeholder="Category" required>
                                <div class="invalid-feedback bottom-unset">This Field is Required</div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom03">To :</label>
                                <input type="text" class="form-control" id="datepicker2" id="validationCustom03" placeholder="Category" required>
                                <div class="invalid-feedback bottom-unset">This Field is Required</div>
                            </div>
                        </div>
                        <button class="btn btn-primary width70" type="submit">Search</button>
                    </form>

                    <div class="table-responsive">
                        <table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Student/Parent</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                        
                            <tbody>
                               <tr>
                                   <td colspan="3" class="text-center">No data to show</td>
                               </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Body Content Wrapper -->

<!-- footer -->
<?php require 'footer.php';?>

<!-- footer -->



