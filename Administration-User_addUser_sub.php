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
          <li class="breadcrumb-item"><a href="Administration-User_sub.php">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add New User</li>
        </ol>
      </nav>
    </div>


    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6>Create User | <small>Make New Admin User</small></h6>
        </div>
    </div>


    <div class="col-md-8 m-auto">

        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-9 my-5">
                    <p class="d-inline"> Fields Marked With <h6 class="text-danger d-inline"> *</h6>   Must Be Filled (Only Admin User Can Be Created !)</p>
                </div>
            </div>


            <form class="form">


                <div class="form-group row">
                <div class="col-md-2"></div>
                    <label class="col-sm-2 col-form-label">Username<h6 class="text-danger d-inline">*</h6> :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="e_number" placeholder="Enter Username" required>
                </div>
                </div>

                <div class="form-group row">
                <div class="col-md-2"></div>
                    <label class="col-sm-2 col-form-label">First Name<h6 class="text-danger d-inline">*</h6> :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" required>
                </div>
                </div>
                
                <div class="form-group row">
                <div class="col-md-2"></div>
                    <label class="col-sm-2 col-form-label">Last Name<h6 class="text-danger d-inline">*</h6> :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" required>
                </div>
                </div>

                <div class="form-group row">
                <div class="col-md-2"></div>
                    <label class="col-sm-2 col-form-label">Email<h6 class="text-danger d-inline">*</h6> :</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                </div>
                </div>

                <div class="form-group row">
                <div class="col-md-2"></div>
                    <label class="col-sm-2 col-form-label">Password<h6 class="text-danger d-inline">*</h6> :</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="password" placeholder="Enter Password" required>
                </div>
                </div>

                <div class="col-md-4 m-auto">
                    <a href="Administration-User_accountCreated_sub.php" class="btn btn-primary">Create</a>
                </div>


            </form>



    </div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->    