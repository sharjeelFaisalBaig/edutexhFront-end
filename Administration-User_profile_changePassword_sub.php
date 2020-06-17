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
          <li class="breadcrumb-item"><a href="Administration-User_profile_sub.php">Profile</a></li>
          <li class="breadcrumb-item active" aria-current="page">Change Password</li>
        </ol>
      </nav>
    </div>


    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6>Edit Profile | <small>Change Password</small></h6>
        </div>
    </div>

    <div class="col-md-8 m-auto">
        <form class="form">
            <div class="form-group row my-3">
            <label class="col-sm-3 col-form-label">New Password</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="userPassword" placeholder="Enter Password" required>
            </div>
            </div>

            <div class="form-group row my-3">
            <label class="col-sm-3 col-form-label">Confirm Password</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="userConfirmPassword" placeholder="Confirm Your Password" required>
            </div>
            </div>

            <div class="col-md-4 m-auto">
                <a href="Administration-User_profile_sub.php" type="submit" class="btn btn-primary">Update Password</a>
            </div>
        </form>    


    </div>





<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->