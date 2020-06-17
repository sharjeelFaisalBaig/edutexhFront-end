<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
.fa-cog {
  color: green;
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
          <li class="breadcrumb-item"><a href="Administration-inventory_sub.php">Inventory</a></li>
          <li class="breadcrumb-item active" aria-current="page">Indents</li>
        </ol>
      </nav>
    </div>

    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6>Indent | <small>New Indent</small></h6>
        </div>
    </div>

    <div class="col-md-10 m-auto">
    
    <div class="form-group row my-3">
                <label class="col-sm-3 col-form-label d-inline">Indent No.</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="indentNumber" placeholder="Enter Indent No.">
                </div>
            </div>

            <div class="form-group row my-4">
                <label class="col-sm-3 col-form-label d-inline">Store</label>
                <div class="col-sm-6">
                    <select class="form-control " id="searchByStore">
                        <option selected>Office Inventory</option>
                        <option value="1">abc</option>
                        <option value="2">efg</option>
                        <option value="3">xyz</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Expected Date</label>
                <div class="col-sm-6">
                    <input type="datetime-local" class="form-control hasDatePicker" id="expectedDate" placeholder="Enter Date">
                </div>
            </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Description :</label>
                <div class="col-sm-6">
                  <textarea class="form-control" id="description" rows="5"></textarea>
                </div>
              </div>

              <div class="col-md-12">
                <h5>Indent Items</h5>
                <hr>
              </div>

              <div class="col-md-12 my-4">
    
                <div class="">
                    <table class="table border-0">
                    <thead>
                        <tr>
                            <th>Suppliers Type</th>
                            <th>Required Qty</th>
                            <th>Pending</th>
                            <th>Available</th>
                            <th>Issued Qty</th>
                    </thead>
                    <tbody>
                        <tr>

                          <td>
                            <div class="row">
                              <select class="form-control col-md-10" id="searchByStore">
                                <option selected>Punching Machine</option>
                                <option value="1">abc</option>
                                <option value="2">efg</option>
                                <option value="3">xyz</option>
                            </select>
                            <select class="form-control col-md-10" id="searchByStore">
                                <option selected>Paper Clips</option>
                                <option value="1">abc</option>
                                <option value="2">efg</option>
                                <option value="3">xyz</option>
                            </select>
                            </div> 
                           </td> 

                           <td>
                              <div class="form-group col-md-10">
                                  <input type="text" class="form-control col-md-10" id="" placeholder="">
                                  <input type="text" class="form-control col-md-10" id="" placeholder="">
                                </div>
                              </div>
                           </td>

                           <td>
                              <div class="form-group col-md-10">
                                  <input type="text" class="form-control col-md-10" id="" placeholder="">
                                  <input type="text" class="form-control col-md-10" id="" placeholder="">
                                </div>
                              </div>
                           </td>

                           <td>
                              <div class="form-group col-md-10">
                                  <input type="text" class="form-control col-md-10" id="" placeholder="">
                                  <input type="text" class="form-control col-md-10" id="" placeholder="">
                                </div>
                              </div>
                           </td>

                           <td>
                              <div class="form-group col-md-10">
                                  <input type="text" class="form-control col-md-10" id="" placeholder="">
                                  <input type="text" class="form-control col-md-10" id="" placeholder="">
                                </div>
                              </div>
                           </td>

                        </tr>
                    </tbody>
                    </table>
                </div>
              </div>





              
              <div class="col-md-12 my-4">
    
                <div id="t-2" >
                    <table class="table border-0">
                    <thead>
                        <tr>
                            <th>Issued Type</th>
                            <th>Unit Price</th>
                            <th>Batch No.</th>
                            <th></th>
                            <th></th>
                    </thead>
                    <tbody>
                        <tr>

                          <td>
                            <div class="row">
                              <select class="form-control col-md-10" id="searchByStore">
                                <option selected>Temporary</option>
                                <option value="1">Permanent</option>
                            </select>
                            <select class="form-control col-md-10" id="searchByStore">
                                <option selected>Temporary</option>
                                <option value="1">Permanent</option>
                            </select>
                            </div> 
                           </td> 

                           <td>
                              <div class="form-group col-md-10">
                                  <input type="text" class="form-control col-md-8" id="" placeholder="">
                                  <input type="text" class="form-control col-md-8" id="" placeholder="">
                                </div>
                              </div>
                           </td>
                          
                           <td>
                              <div class="form-group col-md-10">
                                  <input type="text" class="form-control col-md-8" id="" placeholder="">
                                  <input type="text" class="form-control col-md-8" id="" placeholder="">
                                </div>
                              </div>
                           </td>

                           <td>
                              <div class="col-md-2 my-1">
                                <div class="col-md-2">
                                  <i class="fas fa-window-close text-primary d-inline"></i>  
                                </div>
                                <span class="col-md-4"></span>
                                <div class="col-md-2">
                                  <i class="fas fa-window-close text-primary d-inline"></i>  
                                </div>
                              </div>
                           </td>
                            <td>
                              <span class="form-group col-md-10">
                                <span class="col-md-10"></span>
                                <span class="col-md-10"></span>
                              </span>
                            </td>
                        </tr>
                    </tbody>
                    </table>

                    <div class="col-md-4">
                      <i class="fas fa-plus-square  fa-cog d-inline"></i>&nbsp;
                      <p class="d-inline text-success">Add</p>
                    </div>
                    <span class="col-md-8"></span>
                </div>
              </div>





    </div>




<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->