

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Finance_fees_sub.php">Fees</a></li>
                    <li class="breadcrumb-item"><a href="finance-instant-fee_sub.php">Instant Fees</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manaege Instant Fees</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-4 text-md-right">
            <a href="javascript:void();" data-toggle="modal" data-target="#modal-3" class="btn btn-primary width70 m-auto">Add Category</a>
        </div>

        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered"> 
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Select</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="finance-inductee-fees.php">New Inductee Fees</a>
                                    </td>
                                    <td>First Time Collected Fees</td>
                                    <td colspan="2">
                                        <a href="javascript:void();" class="nav-item" data-toggle="modal" data-target="#modal-4">Edit</a> |
                                        <a href="javascript:void();" class="nav-item">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">Create New Category </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form class="needs-validation mb-2" novalidate>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Category Name: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Monthly Tution Fee" required>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Description: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Tution Fee" required>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none" type="submit">Create</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">Edit Category </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form class="needs-validation mb-2" novalidate>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Category Name: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Monthly Tution Fee" required>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Description: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Tution Fee" required>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none" type="submit">Update</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



