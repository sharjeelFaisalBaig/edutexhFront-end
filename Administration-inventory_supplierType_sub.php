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
          <li class="breadcrumb-item active" aria-current="page">Supplier Types</li>
        </ol>
      </nav>
    </div>

    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6>Inventory | <small>Supplier Type</small></h6>
        </div>
    </div>

    <div class="col-md-8 m-auto">


        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="alert alert-warning text-center my-4">
                    <strong>Supplier Type Was Sucessfully Created</strong>
                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>
        

            <div class="form-group row my-4">
                <div class="col-md-2"></div>
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="supplierName" placeholder="Name Of Supplier" required>
                </div>
                <div class="col-md-2"></div>
            </div>


            <div class="form-group row my-4">
                <div class="col-md-2"></div>
                <label class="col-sm-2 col-form-label">Code</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="supplierCode" placeholder="Code Of Supplier" required>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="col-md-2 m-auto">
                <a href="#" class="btn btn-primary">Save</a>
            </div>



            <div class="col-md-12 my-4">
    
                <div class="">
                    <table class="table thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">Suppliers Type</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered ">
                        <tr>
                            <th scope="row">Stationary</th> 
                            <td>St</td>
                            <td class="border-0"><a href="">Edit</a></td>
                            <td class="border-0"><a href="">Delete</a></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
        </div>





    </div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->