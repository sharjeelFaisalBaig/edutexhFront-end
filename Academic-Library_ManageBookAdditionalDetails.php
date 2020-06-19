<!-- header -->

<?php require 'header.php';?>

<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6>Library | <small>Manage Book Additional Details</small></h6>
        </div>
    </div>
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Academic-Library_sub.php">Library</a></li>
          <li class="breadcrumb-item"><a href="Academic-Library_ManageBookAdditionalDetails.php">Manage Book Additional Details</a></li>
        </ol>
      </nav>
    </div>


    <div class="col-md-8 m-auto">

        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-9 my-5">
                    
                </div>
            </div>


            <form class="form">


                <div class="form-group row">
                <div class="col-md-2"></div>
                    <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="e_number" placeholder="Enter Username" required>
                </div>
                </div>

                <div class="form-group row">
                <div class="col-md-2"></div>
                    <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-6">
                    <div class="form-group row my-3">
                        <div class="col-md-12">
                            <span class=""></span>
                            <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1" checked="">
                            <label class="form-label" for="exampleRadios1">
                                Active
                            </label>
                            <span class=""></span>
                            <input class="form-input" type="radio" name="exampleRadios" id="searchBlocked" value="option1" checked="">
                            <label class="form-label" for="exampleRadios1">
                                Inactive
                            </label>
                        </div>
                    </div>
                </div>
                </div>
                
                <div class="form-group row">
                <div class="col-md-2"></div>
                    <label class="col-sm-2 col-form-label">Is mandatory</label>
                <div class="col-md-1"></div>
                <div class="col-sm-6">
                    <label class="ms-checkbox-wrap">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                    </label>
                </div>
                </div>

                <div class="form-group row">
                <div class="col-md-2"></div>
                    <label class="col-sm-2 col-form-label">Input Method</label>
                <div class="col-sm-6">
                    <select class="form-control " id="catagory">
                        <option selected="">Text Box</option>
                        <option value="1">Select Box</option>
                        <option value="2">Check Box</option>
                    </select>
                </div>
                </div>

                <div class="col-md-4 m-auto">
                    <a href="Academic-Library_ManageBookAdditionalDetails.php" class="btn btn-primary">Create</a>
                </div>

                <div class="col-md-12">
                    <div class="alert alert-warning text-center my-4">
                        <strong>No additional details record found</strong>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12 my-4">
                    <div class="">
                        <table class="table thead-primary">
                            <thead>
                                <tr>
                                    <th>Active fields</th>
                                    <th scope="col" class="border-0"></th>
                                    <th scope="col" class="border-0"></th>
                                </tr>
                            </thead>
                            <tbody class="table-bordered">
                                <tr>
                                    <td>Location</td>
                                    <td class="border-0"><a href="#">Edit</a></td>
                                    <td class="border-0"><a href="#">Delete</a></td>
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