

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
                    <li class="breadcrumb-item"><a href="finance-manage-instantfees.php">Manaege Instant Fees</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New Inductee Fees</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-4 text-md-right">
            <a href="javascript:void();" data-toggle="modal" data-target="#modal-3" class="btn btn-primary width70 m-auto">Add Particular</a>
        </div>

        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered"> 
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Particular Name</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Tax Slab</th>
                                    <th>Select</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tution Fees</td>
                                    <td></td>
                                    <td>5000.00</td>
                                    <td>-</td>
                                    <td colspan="2">
                                        <a href="javascript:void();" class="nav-item" data-toggle="modal" data-target="#modal-4">Edit</a> |
                                        <a href="javascript:void();" class="nav-item" data-toggle="modal" data-target="#modal-5">Change Slab</a> |
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
                <h6 class="modal-title has-icon ms-icon-round ">Add Particular </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form class="needs-validation mb-2" novalidate>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Particular Name: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Tution Fee" required>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Description: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Monthly Tution Fee" required>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Amount: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="5000" required>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Tax Applicable: </label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-control ml-5" style="margin-top: 12px;" type="checkbox">
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Tax Slabs: </label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control">
                                <option>Select Tax Slab</option>
                                <option>GST</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none" type="submit">Save</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">Edit Particular </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form class="needs-validation mb-2" novalidate>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Particular Name: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Tution Fee" required>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Description: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Monthly Tution Fee" required>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Amount: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="5000" required>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Tax Applicable: </label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-control ml-5" style="margin-top: 12px;" type="checkbox">
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Tax Slabs: </label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control">
                                <option>Select Tax Slab</option>
                                <option>GST</option>
                            </select>
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

<div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">Change Tax Slab </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form class="needs-validation mb-2" novalidate>
                    <div class="form-row mb-2">
                        <div class="col-md-4">
                            <label class="mt-2">Tax Slabs: </label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control">
                                <option>Select Tax Slab</option>
                                <option>GST</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none" type="submit">Save</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



