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
          <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
          <li class="breadcrumb-item"><a href="Administration-onlinePayment_sub.php">Online Payment</a></li>
          <li class="breadcrumb-item active" aria-current="page">Settings</li>
        </ol>
      </nav>
    </div>


    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6>Online Payment | <small>Settings</small></h6>
        </div>
    </div>

    <div class="col-md-8 m-auto">

    <div class="row my-5">
        <div class="col-md-4">
            <h5>Online Payments</h5>
        </div>
        <div class="col-md-6">
            <div class="form-group row my-1">              
                <span class="ml-2"></span>
                <input class="form-input my-1" type="radio"  name="exampleRadios1" id="genderMale" value="option1">
                <label class="form-label" for="exampleRadios1">
                  &nbsp;Enable  
                </label>
                <span class="ml-2"></span>
                <input class="form-input my-1" type="radio"  name="exampleRadios1" id="genderFemale" value="option1">
                <label class="form-label" for="exampleRadios1">
                 &nbsp;Disable
                </label>     
            </div>    
        </div>
        <div class="col-md-2">
            <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Information"></i>
        </div>
    </div>    
    <hr>

    <div class="row my-5">
        <div class="col-md-4">
            <h5>Payment Type</h5>
        </div>
        <div class="col-md-6">
            <div class="form-group row my-1">              
                <span class="ml-2"></span>
                <input class="form-input my-1" type="radio"  name="exampleRadios2" id="genderMale" value="option1">
                <label class="form-label" for="exampleRadios1">
                  &nbsp;Allow Partial Payment  
                </label>
                <span class="ml-2"></span>
                <input class="form-input my-1" type="radio"  name="exampleRadios2" id="genderFemale" value="option1">
                <label class="form-label" for="exampleRadios1">
                 &nbsp;Allow Full Payment Only
                </label>     
            </div>    
        </div>
        <div class="col-md-2">
            <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Information"></i>
        </div>
    </div>    
    <hr>     

    <div class="row my-5">
        <div class="col-md-4">
            <h5>Pay All Fees</h5>
        </div>
        <div class="col-md-6">
            <div class="form-group row my-1">              
                <span class="ml-2"></span>
                <input class="form-input my-1" type="radio"  name="exampleRadiosl" id="genderMale" value="option1">
                <label class="form-label" for="exampleRadios1">
                  &nbsp;Enable  
                </label>
                <span class="ml-2"></span>
                <input class="form-input my-1" type="radio"  name="exampleRadiosl" id="genderFemale" value="option1">
                <label class="form-label" for="exampleRadios1">
                 &nbsp;Disable
                </label>     
            </div>    
        </div>
        <div class="col-md-2">
            <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Information"></i>
        </div>
    </div>    
    <hr>

    <div class="row my-5">
        <div class="col-md-4">
            <h5>Online Payment Modules</h5>
        </div>
        <div class="col-md-4">
            <div>
                <input class="form-check-input" name="select_module" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Students</label>
            </div>

            <div class="my-2">
                <input class="form-check-input" name="select_module" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Application Registration</label>
            </div>

            <div class="my-2">
                <input class="form-check-input" name="select_module" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Hostel Fee</label>
            </div>

            <div class="my-2">
                <input class="form-check-input" name="select_module" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Transport Fee</label>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>        
        <hr>

        <div class="row my-5">
            <div class="col-md-4">
                <h5>Pay Gateway</h5>
            </div>
            <div class="col-md-4">
                <div>
                    <input class="form-check-input" name="select_module" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Pay</label>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="Administration-onlinePayment_sub.php" class="btn btn-primary">Save</a>
            </div>
        </div>

        
    </div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->