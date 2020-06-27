<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Finance | <small> Create Category</small></h6>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
              <li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
              <li class="breadcrumb-item"><a href="Administration-Finance_fees_sub.php">Fees</a></li>
              <li class="breadcrumb-item"><a href="Administration-Finance_feesCreate_sub.php">Create Fees</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create Category</li>
            </ol>
          </nav>
        </div>

        <div class="col-md-8 m-auto">
            <div class="col-md-12 my-4">
                <div class="form-group row my-3">
                    <label class="col-sm-4 col-form-label">Select a batch</label>
                    <div class="col-sm-4">
                    <select class="form-control " id="catagory">
                        <option selected="">Select a batch</option>
                        <option value="1">G1-A-2020</option>
                        <option value="2">G2-A-2020</option>
                        <option value="3">PG-Pink</option>
                    </select>
                    </div>
                </div>
                    <div class="">
                        <table class="table table-bordered thead-primary">
                            <thead>
                                <tr>
                                    <th scope="col">SI No.</th>
                                    <th scope="col">Master fee category</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col" class="border-0"></th>
                                    <th scope="col" class="border-0"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td> 
                                    <td>Hostel Fees</td>
                                    <td>12-05-2020</td>
                                    <td class="border-0"><a data-toggle="modal" data-target="#modal-1" href="#">Edit</a></td>
                                    <td class="border-0"><a href="#">Delete</a></td>
                                </tr>
                                <tr class="table-bordered">
                                    <td>2</td> 
                                    <td>Tution Fees</td>
                                    <td>12-05-2020</td>
                                    <td class="border-0"><a href="#">Edit</a></td>
                                    <td class="border-0"><a href="#">Delete</a></td>
                                </tr>
                                <tr class="table-bordered">
                                    <td>3</td> 
                                    <td>Library Fees</td>
                                    <td>12-05-2020</td>
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
                                    <h3 class="modal-title has-icon ms-icon-round ">Create Master Category for Fees</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>

                                <div class="modal-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="row">
                                                    <div class="col-4"> <label for="validationCustom18"> Name </label></div>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="" placeholder="Tution Fees" value="Tution Fees" required="">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="row">
                                                    <div class="col-4"> <label for="validationCustom18"> Description </label></div>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="" placeholder="" value="" required="">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="row">
                                                    <div class="col-4"> <label for="validationCustom18"> Select a batch: </label></div>
                                                    <div class="col-8">
                                                        <div class="ms-widget ms-card">
                                                            <div class="ms-card-header">
                                                                <h6>
                                                                    Select: 
                                                                    <a href="">All,</a>
                                                                    <a href="">None</a>
                                                                </h6>
                                                            </div>
                                                            <div class="ms-card-body" style="height: 200px; overflow-x: auto;">
                                                                <div class="row">
                                                                    <div class="col-9 marginLeft">
                                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">  
                                                                        <label class="form-check-label cursor-pointer" for="inlineCheckbox1">G1-A-2020</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-9 marginLeft">
                                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">  
                                                                        <label class="form-check-label cursor-pointer" for="inlineCheckbox1">G2-A-2020</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-9 marginLeft">
                                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">  
                                                                        <label class="form-check-label cursor-pointer" for="inlineCheckbox1">PG-Pink</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="row">
                                                    <div class="col-4"> <label for="validationCustom18"> Fee Account</label></div>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <select class="form-control">
                                                                <option>Academic Fees</option>
                                                                <option>Tution Fees</option>
                                                                <option>Library Fees</option>
                                                                <option>Hostel Fees</option>
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
                                                    <div class="col-4"> <label for="validationCustom18"> Receipt Template</label></div>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <select class="form-control">
                                                                <option>Academic Fees</option>
                                                                <option>Tution Fees</option>
                                                                <option>Library Fees</option>
                                                                <option>Hostel Fees</option>
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
                                                    <div class="col-4"> <label for="validationCustom18"> Receipt Set</label></div>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <select class="form-control">
                                                                <option>Academic Fees</option>
                                                                <option>Tution Fees</option>
                                                                <option>Library Fees</option>
                                                                <option>Hostel Fees</option>
                                                            </select>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary shadow-none">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>




<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->