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
          <li class="breadcrumb-item"><a href="">Transport</a></li>
          <li class="breadcrumb-item"><a href="">Settings</a></li>
          <li class="breadcrumb-item active" aria-current="page">Basic Settings</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-6 m-auto">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-body">

          <div class="form-row">
           <div class="col-md-12 mb-3 ">
            <div class="col-lg-12 pl-0 col-md-12">
              <h4>Basic Settings</h4>
              <p>Setup the Basic Configuration in the transport module</p>
            </div>
          </div>
        </div>
        <div class="form-row">
        <div class="col-md-12 mb-3 ">
          <div class="col-lg-12 pl-0 col-md-12">
            <h4>Route Mode</h4>
            <p>Configure how transport routes are assigned to passengers</p>
          </div>
          <div class="col-md-12">
           <div class="input-group mb-1">
                 <ul class="ms-list d-flex">
                  <li class="ms-list-item pl-0">
                    <label class="ms-checkbox-wrap">
                      <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                    </label> <span> Passenger may be assigned a different pickup and drop route </span>
                  </li>
                </ul>
              </div>
               <div class="input-group mb-1">
                 <ul class="ms-list d-flex">
                  <li class="ms-list-item pl-0">
                    <label class="ms-checkbox-wrap">
                      <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                    </label> <span> Passenger are assigned one route for pickup and drop </span>
                  </li>
                </ul>
              </div>
        </div>
      </div>
       <div class="col-md-12 mb-3 ">
          <div class="col-lg-12 pl-0 col-md-12">
            <h4>Fare Mode</h4>
            <p>Configure fare rules for transport</p>
          </div>
          <div class="col-md-12">
           <div class="input-group mb-1">
                 <ul class="ms-list d-flex">
                  <li class="ms-list-item pl-0">
                    <label class="ms-checkbox-wrap">
                      <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                    </label> <span> Stops may have different fares </span>
                  </li>
                </ul>
              </div>
               <div class="input-group mb-1">
                 <ul class="ms-list d-flex">
                  <li class="ms-list-item pl-0">
                    <label class="ms-checkbox-wrap">
                      <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                    </label> <span> Route has a single fare for all Stops </span>
                  </li>
                </ul>
              </div>
        </div>
      </div>
        <div class="col-md-12 mb-3 ">
          <div class="col-lg-12 pl-0 col-md-12">
            <h4>Auto Update Transport Fees</h4>
            <p>Enable or Disable auto update of unpaid fee collections when passenger route is changed</p>
          </div>
          <div class="col-md-12">
           <div class="input-group mb-1">
                 <ul class="ms-list d-flex">
                  <li class="ms-list-item pl-0">
                    <label class="ms-checkbox-wrap">
                      <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                    </label> <span> Update unpaid fee collections </span>
                  </li>
                </ul>
              </div>
               <div class="input-group mb-1">
                 <ul class="ms-list d-flex">
                  <li class="ms-list-item pl-0">
                    <label class="ms-checkbox-wrap">
                      <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                    </label> <span> Do not update unpaid fee collections </span>
                  </li>
                </ul>
              </div>
        </div>
      </div>
       <div class="col-md-12 mb-3 ">
          <div class="col-lg-12 pl-0 col-md-12">
            <h4>Academic Year</h4>
            <p>Set the academic year for a session to create settings.By default the Active Academic Year is Selected</p>
          </div>
          <div class="col-md-6 ml-2 mb-4">
          <select class="form-control">
            <option>2012 - 2020</option>
          </select>
        </div>
          <div class="col-md-12">
           <button type="submit" class="btn btn-success"  name="">
             <i class="fa fa-save"></i> Save Settings
           </button>
        </div>
      </div>
    </div>
  </div>
</div>




</div>

</div>
            <!-- <div class="input-group mb-1">
               <ul class="ms-list d-flex">
                <li class="ms-list-item pl-0">
                  <label class="ms-checkbox-wrap">
                    <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                  </label> <span> LOPA as a deduction </span>
                </li>
              </ul>
            </div> -->
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



