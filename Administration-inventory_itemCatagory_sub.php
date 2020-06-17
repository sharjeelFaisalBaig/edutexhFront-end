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
          <li class="breadcrumb-item"><a href="Administration-inventory_sub.php">Inventory</a></li>
          <li class="breadcrumb-item active" aria-current="page">Item Catagory</li>
        </ol>
      </nav>
    </div>

    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6>Inventory | <small>Item Catagory</small></h6>
        </div>
    </div>

    <div class="col-md-8 m-auto">


        <div class="row d-none" id="to_show_1">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="alert alert-warning text-center my-4">
                    <strong>Item Catagory Was Sucessfully Created</strong>
                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>

        <div class="form-group row my-4">
                
                <label class="col-sm-2 col-form-label">Name<h6 class="text-danger d-inline"> *</h6></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="itemName" placeholder="Name Of Item" required>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Code<h6 class="text-danger d-inline"> *</h6></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="itemCode" placeholder="Enter Item Code" required>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
            </div>


            <div class="col-md-2">
                <a class="btn btn-primary" href="#">Save</a>
            </div>
            <span class="col-md-10"></span>



            <div>
                <div class="col-md-12 my-4">

                    <div class="">
                        <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">SI No.</th>
                                <th scope="col">Item Catagory</th>
                                <th scope="col">Catagory Code</th>
                                <th scope="col" class="border-0"></th>
                                <th scope="col" class="border-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th> 
                                <td>Stationary</td>
                                <td>St</td>
                                <td class="border-0"><a href="#">Edit</a></td>
                                <td class="border-0"><a href="#">Delete</a></td>
                            </tr>
                            <tr class="table-bordered">
                                <th scope="row">2</th> 
                                <td>Furniture</td>
                                <td>Fur</td>
                                <td class="border-0"><a href="#">Edit</a></td>
                                <td class="border-0"><a href="#">Delete</a></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
            </div>



    </div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->