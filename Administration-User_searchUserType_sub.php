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
          <li class="breadcrumb-item"><a href="Administration-User_sub.php">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">Search User By Type</li>
        </ol>
      </nav>
    </div>


    <div class="col-md-10 m-auto">

      <div class="row my-2"> 
          <p class="col-md-2 text-muted">User Type</p>
          <div class="col-md-6">
                <input class="form-input ml-3" type="radio" name="search_select" id="search_criteria" value="option1" onclick="change_criteria_stud()">
                <label class="form-label" for="exampleRadios1">
                  Students
                </label>   
                <input class="form-input ml-3" type="radio"  name="search_select" id="search_criteria" value="option1" onclick="change_criteria_parents()">
                <label class="form-label" for="exampleRadios1">
                  Parents
                </label>   
                <input class="form-input ml-3" type="radio" name="search_select" id="search_criteria" value="option1" onclick="change_criteria_emp()">
                <label class="form-label" for="exampleRadios1">
                  Employees
                </label>   
                <input class="form-input ml-3" type="radio" name="search_select"  id="search_criteria" value="option1" onclick="change_criteria_admin()">
                <label class="form-label" for="exampleRadios1">
                  Admins
                </label>   
          </div>
          <div class="col-md-4">
                <label class="form-label" for="exampleRadios1">
                <a href="">| Search By Name/Username</a>
                </label>   
          </div>
      </div>
      <div class="row my-3">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="form-group row my-3">
                    <div class="col-md-12">
                        <span class="ml-2"></span>
                        <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1" checked>
                        <label class="form-label" for="exampleRadios1">
                            All
                        </label>
                        <span class="ml-2"></span>
                        <input class="form-input" type="radio" name="exampleRadios" id="searchBlocked" value="option1" checked>
                        <label class="form-label" for="exampleRadios1">
                            Blocked
                        </label>
                        <span class="ml-2"></span>
                        <input class="form-input" type="radio" name="exampleRadios" id="searchUnblocked" value="option1" checked>
                        <label class="form-label" for="exampleRadios1">
                            Unblocked
                        </label>
                    </div>
               </div>

            </div>
        </div>
        <div class="form-group row my-4 d-none m-auto" id="change_target_emp">
        <label class="col-sm-2 col-form-label">Employee Department :</label>
        <div class="col-sm-4">
            <select class="form-control " id="catagory">
                <option selected>System Admin</option>
                <option value="1">English</option>
                <option value="2">Science</option>
                <option value="3">Mathematics</option>
                <option value="4">Physical Education</option>
                <option value="5">Social Science</option>
                <option value="6">Zoology</option>
                <option value="7">Botany</option>
                <option value="8">Chemistry</option>
                <option value="9">Physics</option>
                <option value="10">Religious Studies</option>
            </select>
            </div>
        </div>
        <div class="form-group row my-4 d-none m-auto" id="change_target_stud">
        <label class="col-sm-2 col-form-label">Batch :</label>
            <div class="col-sm-4">
                <select class="form-control " id="catagory">
                    <option selected>Select A Batch</option>
                    <optgroup label="Grade 10">
                    <option value="1">G10-A-2019</option>
                    <option value="2">G10-B-2019</option>
                    <optgroup label="Grade 11">
                    <option value="3">G11-A-2020</option>
                    <option value="4">G11-B-2020</option>
                    <optgroup label="Grade 12">
                    <option value="3">G12-A-2021</option>
                    <option value="4">G12-B-2021</option>
                    <optgroup label="Grade 2">
                    <option value="3">G2-A-2011</option>
                    <option value="4">G2-B-2011</option>
                    <optgroup label="Grade 3">
                    <option value="3">G3-A-2012</option>
                    <option value="4">G3-B-2012</option>
                </select>
            </div>
        </div>
        <div class="form-group row my-4 d-none m-auto" id="change_target_parents">
            <label class="col-sm-2 col-form-label">Parents :</label>
            <div class="col-sm-4">
                <select class="form-control " id="catagory">
                    <option selected>Select A Batch</option>
                    <optgroup label="Grade 10">
                    <option value="1">G10-A-2019</option>
                    <option value="2">G10-B-2019</option>
                    <optgroup label="Grade 11">
                    <option value="3">G11-A-2020</option>
                    <option value="4">G11-B-2020</option>
                    <optgroup label="Grade 12">
                    <option value="3">G12-A-2021</option>
                    <option value="4">G12-B-2021</option>
                    <optgroup label="Grade 2">
                    <option value="3">G2-A-2011</option>
                    <option value="4">G2-B-2011</option>
                    <optgroup label="Grade 3">
                    <option value="3">G3-A-2012</option>
                    <option value="4">G3-B-2012</option>
                </select>
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
                                <td><a href="Administration-User_profile_sub.php">Muhammad KAran Gohar</a></td>
                                <td><a href="Administration-User_profile_sub.php">admin</a></td>
                                <td>Admin</td>
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
                            <tr>
                                <th scope="row">2</th> 
                                <td><a href="Administration-User_profile_sub.php">Ali</a></td>
                                <td><a href="Administration-User_profile_sub.php">admin</a></td>
                                <td>Admin</td>
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


    <script>
      var emp =  document.getElementById("change_target_emp").classList;
      var stud = document.getElementById("change_target_stud").classList;
      var parents = document.getElementById("change_target_parents").classList;
      function change_criteria_emp(){
       emp.toggle("d-none");
       stud.add("d-none");
       parents.add("d-none");
      }
      function change_criteria_stud(){
        stud.toggle("d-none");
        emp.add("d-none");
       parents.add("d-none");
      }
      function change_criteria_parents(){
        parents.toggle("d-none");
        stud.add("d-none");
       emp.add("d-none");
      }
      function change_criteria_admin(){
        stud.add("d-none");
       emp.add("d-none");
       parents.add("d-none");
      }
    </script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->