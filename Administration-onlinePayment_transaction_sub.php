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
          <li class="breadcrumb-item active" aria-current="page">Transactions</li>
        </ol>
      </nav>
    </div>

    <div class="col-md-10">
        <h6 class="my-4"><b>ONLINE PAYMENT | </b><small>Transactions</small></h6>
    </div>
    <div class="col-md-2">
        <a href="Administration-onlinePayment_settings_sub.php" class="btn btn-primary">Settings</a>
    </div>
     <div class="col-md-12">
        <hr>
     </div>

     <div class="col-md-10 m-auto">


     <div class="form-group row">
        <label class="col-sm-2 col-form-label my-3">Start Date :</label>
        <div class="col-sm-3">
            <input type="datetime-local" id="startDate" class=" my-3 form-control hasDatepicker"  placeholder="" required>
        </div>
        <label class="col-sm-2 col-form-label my-3">End Date :</label>
        <div class="col-sm-3">
            <input type="datetime-local" id="endDate" class=" my-3 form-control hasDatepicker"  placeholder="" required>
        </div>
        <div class="col-md-2">
            <a href="" class="btn btn-primary">Search</a>
        </div>
    </div>

    <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="alert alert-warning text-center my-4">
                    <strong>No Payment Present</strong>
                </div>
            </div>
            <div class="col-md-2"></div> 
    </div>

     </div>













<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->