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

   .table td, .table th {
    padding: .75rem;
    border-top: 1px solid #dee2e6;
    vertical-align: middle;
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
          <li class="breadcrumb-item active" aria-current="page">Create Payroll Group</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-6 m-auto">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-body">

          <div class="form-row">
           <div class="col-md-12 mb-3 ">
            <div class="col-lg-12 pl-0 col-md-12">
              <h4>Create Payroll Group</h4>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Payroll Group Name</label></div>
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
          <div class="col-md-12 mb-3 ">
            <div class="col-lg-12 pl-0 col-md-12">
              <h4>Salary Prefrence</h4>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Employee Salary type</label></div>
              <div class="col-8">
               <p><b>Salaried</b></p>
              </div>
            </div>
          </div>  
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Payment Frequency</label></div>
              <div class="col-8">
                <div class="input-group">
                  <select class="form-control" id="validationCustom18" required>
                    <option>Monthly</option>
                    <option>Weekly</option>
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
              <div class="col-4"> <label for="validationCustom18">Payslip generation date</label></div>
              <div class="col-8">
                <div class="input-group">
                  <select class="form-control" id="validationCustom18" required>
                    <option>1</option>
                    <option>2</option>
                  </select>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            </div>
          </div>   
          <hr class="div-seperator">
        </div>

      </div>
    </div>
  </div>

</div>
<div class="container formulabox">
  <div class="row">
       <div class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-header text-left pb-1">
                <h5>Add Payroll Categories</h5>
            </div>
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary table-bordered">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">Payroll Category</th>
                            <th scope="col" class="text-left">Code</th>
                            <th scope="col" class="text-left">Value</th>
                            <th scope="col" class="text-left"></th>
                            
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-left" colspan="4">
                              <b>Earning</b>
                            </td>
                          </tr>
                        <tr>
                            <td class="text-left">Basic Pay</td>
                            <td class="text-left">Basic</td>
                            <td class="text-left">23232</td>
                            <td class="text-left"><a href="">Add</a></td>
                        </tr>
                          <tr>
                            <td class="text-left">Basic Pay</td>
                            <td class="text-left">Basic</td>
                            <td class="text-left">23232</td>
                            <td class="text-left"><a href="">Add</a></td>
                        </tr>
                         <tr>
                            <td class="text-left" colspan="4">
                              <b>Deduction</b>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-left">Income Tax</td>
                            <td class="text-left">IT</td>
                            <td class="text-left">
                                <table class="">
                                    <tr>
                                        <td>Condition 1</td>
                                        <td>If Gross >=5000 Then 5%(GROSS-5000)</td>
                                    </tr>
                                    <tr>
                                        <td>Condition 1</td>
                                        <td>If Gross >=5000 Then 5%(GROSS-5000)</td>
                                    </tr>
                                    <tr>
                                        <td>Default Value</td>
                                        <td>0% Gross</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="text-left"><a href="">Add</a></td>
                        </tr>
                           <tr>
                            <td class="text-left">Income Tax</td>
                            <td class="text-left">IT</td>
                            <td class="text-left">
                                    10% Basic
                            </td>
                            <td class="text-left"><a href="">Add</a></td>
                        </tr>
                        </tbody>
                    </table>
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



