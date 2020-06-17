<!-- header -->
<?php require 'header.php';?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Oswald:wght@500&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

<!-- header -->
<style>
    .hide {
        padding: 10px;
        background-color: #e9e9e9;
    }
    .hide p {
        margin: 0;
    }
    .formulabox{
        border: 1px solid;
        padding: 48px 49px 12px;
    }
    .list-group{
        list-style: disc;
    padding: 0;
    }
    .list-group li{
        margin: 2px;
    }
    .borderpanel{
        border: 1px solid;
    }
    .customcol{
        max-width: 56.333333%
    }

</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <form class="needs-validation clearfix" novalidate>
    <div class="row">
       <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                <li class="breadcrumb-item"><a href="">Human Resources</a></li>
                <li class="breadcrumb-item"><a href="">Payroll and Pay Slip Management</a></li>
                <li class="breadcrumb-item"><a href="payrollcategories.php">Payroll Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Payroll Categories</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-6 m-auto">
        <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-body">

                    <div class="form-row">
                     <div class="col-md-12 mb-3 ">
                        <div class="col-lg-12 pl-0 col-md-12">
                            <h4>Create Payroll Category</h4>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4"> <label for="validationCustom18">Payroll Category Name</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom18" placeholder="MMSC" value="MMSC" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4">
                                <label for="validationCustom19">Category Code</label>
                            </div>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom19" placeholder="Eidgah Road, Pano-Akil" value="Eidgah" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4 mt-2">
                                <label for="validationCustom20">Category Type</label>
                            </div>
                            <div class="col-8">
                                <div class="input-group mb-1">
                                   <ul class="ms-list d-flex">
                                      <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                          <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                                      </label> <span> Earnings </span>
                                  </li>
                                  <li class="ms-list-item">
                                    <label class="ms-checkbox-wrap">
                                      <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                                  </label> <span> Deductions </span>
                              </li>

                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <hr class="div-seperator">
          <div class="col-md-12 mb-3 ">
            <div class="col-lg-12 pl-0 col-md-12">
                <h4>Category Value</h4>
                <p>Specify how the payroll amount for this category is to be calculated.It can be fixed amount  or can be calculated using formulas based on other payroll categories</p>
            </div>
        </div>
        <div class="col-md-12 mb-3 ">
            <div class="col-lg-12 pl-0 col-md-12">

                <div class="row">
                    <div class="col-4">
                        <label for="validationCustom37">Value Type</label>
                    </div>
                    <div class="col-8">
                        <div class="input-group">
                            <select class="form-control" id="validationCustom37" required>
                                <option value="">Condition With Formula</option>
                                <option value="">Numeric</option>
                                <option value="">Formula</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="row">
                <div class="col-4">
                    <label for="validationCustom19">Amount</label>
                </div>
                <div class="col-8">
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationCustom19" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

</div>
</div>
</div>

</div>
<div class="container formulabox">
<div class="row">
    <div class="col-md-7">
        <div class="row">
            <div class="col-2">
                <label for="validationCustom19">Formula</label>
            </div>
            <div class="col-8">
                <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom19" value="45% Basic" required>

                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <span class="ml-2 mt-2"><a href=""><u>Validate</u></a></span>
                </div>
                <div>
                    <div class="text-success mr-auto">
                        <i class="fa fa-check-circle text-success"></i> Valid
                    </div>
                    <div class="text-danger mr-auto d-inline">
                        <i class="fa fa-times-circle text-danger"></i> Invalid
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <div class="ms-panel ms-panel-fh borderpanel">
                    <div class=" ms-panel-header borderpanel">
                        <div class="row">
                            <div class="col-md-7">
                            <h5>Condition</h5>
                        </div>
                        <div class="col-md-5">
                            <button type="button" class="btn-sm btn-danger float-right">
                                <i class="fa fa-times "></i>
                            </button>
                        </div>
                        </div>
                    </div>
                     <div class="ms-panel-body clearfix">
                         <div class="row">
            <div class="col-2">
                <label for="validationCustom19">If</label>
            </div>
            <div class="col-8">
                <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom19" value="45% Basic" required>

                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <span class="ml-2 mt-2"><a href=""><u>Validate</u></a></span>
                </div>
                <div>
                    <div class="text-success mr-auto">
                        <i class="fa fa-check-circle text-success"></i> Valid
                    </div>
                    <div class="text-danger mr-auto d-inline">
                        <i class="fa fa-times-circle text-danger"></i> Invalid
                    </div>
                </div>
            </div>
               <div class="col-2">
                <label for="validationCustom19"></label>
            </div>
            <div class="col-8 offset-2 mt-2 customcol">
                <div class="input-group">
                    <select class="form-control" id="validationCustom19" value="45% Basic" required>
                        <option>is greater than or equal to</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <div class="col-8 offset-2">
                <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom19" value="45% Basic" required>

                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <span class="ml-2 mt-2"><a href=""><u>Validate</u></a></span>
                </div>
                <div>
                    <div class="text-success mr-auto">
                        <i class="fa fa-check-circle text-success"></i> Valid
                    </div>
                    <div class="text-danger mr-auto d-inline">
                        <i class="fa fa-times-circle text-danger"></i> Invalid
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
              <div class="col-2">
                <label for="validationCustom19">Then</label>
            </div>
            <div class="col-8">
                <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom19" value="45% Basic" required>

                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <span class="ml-2 mt-2"><a href=""><u>Validate</u></a></span>
                </div>
                <div>
                    <div class="text-success mr-auto">
                        <i class="fa fa-check-circle text-success"></i> Valid
                    </div>
                    <div class="text-danger mr-auto d-inline">
                        <i class="fa fa-times-circle text-danger"></i> Invalid
                    </div>
                </div>
            </div>
        </div>
                     </div>
                 </div>            
            </div>
        </div>
    </div>
    <div class="col-md-5">
     <div class="ms-panel ms-panel-fh borderpanel">
        <div class="ms-panel-body clearfix">
          <ul class="nav nav-tabs d-flex nav-justified mb-4" role="tablist">
            <li role="presentation" ><a href="#tab13" aria-controls="tab13" class="active" role="tab" data-toggle="tab">List of Payroll Categories</a></li>
            <li role="presentation" ><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab">Formula Examples </a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active show fade in" id="tab13">
             <table class="table">
                 <tr>
                     <th><b>Standard Codes</b></th>
                     <th></th>
                 </tr>
                 <tr>
                     <td>Gross pay</td>
                     <td>GROSS</td>
                 </tr>
                 <tr>
                     <td>Working days</td>
                     <td>NWD</td>
                 </tr>
                 <tr>
                     <td><b>Earnings</b></td>
                     <td><b>Code</b></td>
                 </tr>
                 <tr>
                     <td>Basic Pay</td>
                     <td>BASIC</td>
                 </tr>
                 <tr>
                     <td><b>Deductions</b></td>
                     <td><b>Code</b></td>
                 </tr>
                 <tr>
                     <td colspan="2">Nothing to List</td>
                 </tr>
             </table>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="tab14">
             <ul class="list-group">
                 <li>If the Employees Basic Components is 40% of their gross salary, then the formula is 40% GROSS</li>
                 <li>Calculate income tax payable by the employees whose salary is greater than 250000-Use Conditions with formulas value type.This is how you would set it up.If GROSS is greater than 250000 then 10%(GROSS-250000)</li>
                 <li>If the employee HRA is 50% of their Basic component then the formula is 50% Basic category code</li>
             </ul>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-md-12 mb-3">
            <input type="submit" class="btn btn-primary d-block w-25 ml-auto" name="btn25" value="Update">
        </div>
</div>
</form>
</div>
<!-- /Body Content Wrapper -->

<!-- footer -->
<?php require 'footer.php';?>
<script>
    $('#select_box').change(function () {
        var select=$(this).find(':selected').val();
        $(".hide").hide();
        $('#' + select).show();

    }).change();
</script>

<script>
    // date
    document.querySelector("#financial-start").valueAsDate = new Date();
    document.querySelector("#financial-end").valueAsDate = new Date();
</script>
<!-- footer -->



