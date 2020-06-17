<!-- header -->

<?php require 'header.php';?>

<!-- header -->

<style>
    .btn-cstm{
        background:none;
        margin-top:-5px;        
    }
    .btn-cstm:hover{
        color:black;
    }
    .table_cstm{
        overflow-y:hidden;
    }
    
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
          <li class="breadcrumb-item active" aria-current="page">User</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-12 m-auto">
        <div class="ms-panel-header">
            <h6 class="my-4 d-md-inline"><b>MANAGE USERS | </b><small>Details About Users</small></h6>
            <div class="float-md-right">
                <a href="Administration-User_addUser_sub.php" class="btn btn-primary">Add New</a>                
            </div>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="form-group row my-3 mx-1">
        <label class="col-sm-2 col-form-label">Search :</label>
        <div class="col-sm-4">
        <input type="text" id="search" class="form-control"  placeholder="Search">
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <h6 class="my-1"> | <small><a href="Administration-User_searchUserType_sub.php">Search By User Type</a></small></h6>
        </div>
        </div>

        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="form-group row my-3">
                    <div class="col-md-12">
                        <span class=""></span>
                        <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1" checked>
                        <label class="form-label" for="exampleRadios1">
                            All
                        </label>
                        <span class=""></span>
                        <input class="form-input" type="radio" name="exampleRadios" id="searchBlocked" value="option1" checked>
                        <label class="form-label" for="exampleRadios1">
                            Blocked
                        </label>
                        <span class=""></span>
                        <input class="form-input" type="radio" name="exampleRadios" id="searchUnblocked" value="option1" checked>
                        <label class="form-label" for="exampleRadios1">
                            Unblocked
                        </label>
                    </div>
               </div>

            </div>
        </div>
        <div class="col-md-12 my-4">
                <div class="table-responsive table_cstm">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">SI No</th>
                                <th scope="col">Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Role</th>
                                <th class="border-0"></th>
                                <th class=border-0></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th> 
                                <td><a href="Administration-User_profile_sub.php">Muhammad Karan Gohar</a></td>
                                <td><a href="Administration-User_profile_sub.php">S31</a></td>
                                <td>Student</td>
                                <td>
                                    <a href="Administration-User_profile_sub.php">View Profile</a>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-cstm dropdown-toggle p-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            More
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="Administration-User_profile_changePassword_sub.php">Change Password</a>
                                            <a class="dropdown-item" href="#">Block</a>
                                            <a class="dropdown-item" href="Administration-User_profile_editPrivilage_sub.php">Edit Privilage</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>



<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->