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
          <li class="breadcrumb-item"><a href="payrollgroup.php">Payroll Group</a></li>
          <li class="breadcrumb-item"><a href="viewpayrollgroup.php">View Payroll Group</a></li>
          <li class="breadcrumb-item active" aria-current="page">LOP Settings</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-6 m-auto">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-body">

          <div class="form-row">
           <div class="col-md-12 mb-3 ">
            <div class="col-lg-12 pl-0 col-md-12">
              <h4>Loss Of Pay Setting of Payroll Group</h4>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-8">
                <div class="input-group mb-1">
                 <ul class="ms-list d-flex">
                  <li class="ms-list-item pl-0">
                    <label class="ms-checkbox-wrap">
                      <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                    </label> <span> Enable LOP deduction </span>
                  </li>
                  <li class="ms-list-item">
                    <label class="ms-checkbox-wrap">
                      <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                    </label> <span> LOP not applicable </span>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 mb-3 ">
          <div class="col-lg-12 pl-0 col-md-12">
            <h4>Loss Of Pay amount (LOPA)</h4>
            <p>Calculate cost of one working day (LOPID)</p>
          </div>
        </div>
        <div class="col-lg-12 pl-0 col-md-12">

          <div class="row">
            <div class="col-4">
              <label for="validationCustom37">Loss of Pay formula</label>
            </div>
            <div class="col-8">
              <div class="input-group">
                <select class="form-control" id="validationCustom37" required>

                  <option value="">Numeric</option>
                  <option value="">Formula</option>
                </select>
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
        <div class="col-md-12 mb-3">
          <div class="row">
            <div class="col-4">
              <label for="validationCustom19">Loss of Pay amount(LOPA) </label>
            </div>
            <div class="col-8">
             <p>
               <b>Cost of one Working Day (LOPID)<br> X <br>Number of Loss Pay Leave (LOPD)</b>
             </p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="col-md-12 mb-3">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <div class="input-group mb-1">
               <ul class="ms-list d-flex">
                <li class="ms-list-item pl-0">
                  <label class="ms-checkbox-wrap">
                    <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                  </label> <span> LOPA as a deduction </span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            Loss of Pay Amount will be an additional deduction in the payslip Values of all payroll categories will remain as  per the employee payroll

            <a href="">View Example</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="input-group mb-1">
             <ul class="ms-list d-flex">
              <li class="ms-list-item pl-0">
                <label class="ms-checkbox-wrap">
                  <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                </label> <span> deduct LOPA payroll categories </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-12">
          Loss of Pay Amount will be an additional deduction in the payslip Values of all payroll categories will remain as  per the employee payroll

          <a href="">View Example</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-12 mb-3">
  <div class="row">
    <div class="col-md-12">
      <table class="table thead-primary table-bordered">
        <thead>
          <tr>
            <th>Earning</th>
            <th>Amount (Rs)</th>
          </tr>
        </thead>
        <tr>
          <td>Basic Salary</td>
          <td>2000</td>
        </tr>
        <tr>
          <td>HRA</td>
          <td>21000</td>
        </tr>
      </table>
    </div>
    <div class="col-md-12">
      <table class="table thead-primary table-bordered">
       <thead>
        <tr>
          <th>Deduction</th>
          <th>Amount (Rs)</th>
        </tr>
      </thead>
      <tr>
        <td>Basic Salary</td>
        <td>2000</td>
      </tr>
      <tr>
        <td>HRA</td>
        <td>21000</td>
      </tr>
    </table>
  </div>
</div>
</div>
<div class="col-md-12 mb-3">
  <input type="submit" class="btn btn-primary d-block w-25 ml-auto" name="btn25" value="Save Setting">
</div>

</div>

</div>
<div class="row">

  <div class="col-md-12 text-center content-center">
    <div class="ms-panel w-100">
      <div class="ms-panel-header text-left pb-1">
        <h5>Earning</h5>
        <p>List of Payroll Categories that define employee earnings</p>
      </div>
      <div class="ms-panel-body">
        <div class="">
          <table class="table table-hover thead-primary">
            <thead>
              <tr>
                <th scope="col" class="text-left">Category Name</th>
                <th scope="col" class="text-left">Value</th>
                <th scope="col" class="text-left"></th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left">Basic Pay</td>
                <td class="text-left">23232</td>
                <td class="text-left"><a href="" data-toggle="modal" data-target="#modal-3">Add Loop Condition</a></td>
              </tr>
              <tr>
                <td class="text-left">Basic Pay</td>
                <td class="text-left">23232</td>
                <td class="text-left"><a href="" data-toggle="modal" data-target="#modal-3">Add Loop Condition</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 text-center content-center">
    <div class="ms-panel w-100">
      <div class="ms-panel-header text-left pb-1">
        <h5>Deductions</h5>
        <p>List of Payroll Categories that define employee deductions</p>
      </div>
      <div class="ms-panel-body">
        <div class="">
          <table class="table table-hover thead-primary">
            <thead>
              <tr>
                <th scope="col" class="text-left">Category Name</th>
                <th scope="col" class="text-left">Value</th>
                <th scope="col" class="text-left"></th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left">Income Tax</td>
                <td class="text-left">
                  <table class="">
                    <tbody><tr>
                      <td>Condition 1</td>
                      <td>If Gross &gt;=5000 Then 5%(GROSS-5000)</td>
                    </tr>
                    <tr>
                      <td>Condition 1</td>
                      <td>If Gross &gt;=5000 Then 5%(GROSS-5000)</td>
                    </tr>
                    <tr>
                      <td>Default Value</td>
                      <td>0% Gross</td>
                    </tr>
                  </tbody></table>
                </td>
                <td class="text-left"><a href="" data-toggle="modal" data-target="#modal-3">Add Loop Condition</a></td>
              </tr>
              <tr>
                <td class="text-left">Income Tax</td>
                <td class="text-left">
                  10% Basic
                </td>
                <td class="text-left"><a href="" data-toggle="modal" data-target="#modal-3">Add Loop Condition</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</div>
</form>
</div>
<!-- /Body Content Wrapper -->
<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title has-icon ms-icon-round text-left"><i class="flaticon-share bg-primary text-white"></i> Add Loss of Pay Condition for Payroll Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body text-left">
        <form method="post">
          <div class="ms-form-group has-icon">
            <label class="col-md-6">Payroll Category:</label>
            <div class="col-md-6">
              <p><b>Basic Pay (BASIC)</b></p>
            </div>
          </div>
          <div class="ms-form-group row">
            <label class="col-md-6">Payroll Category value expression without LOP</label>
            <input type="text" class="form-control col-md-6 w-50" value="">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="input-group">
                <input type="text" class="form-control" id="validationCustom19" value="45% Basic" required="">

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
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary shadow-none">Add Loop Condition</button>
      </div>

    </div>
  </div>
</div>
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



