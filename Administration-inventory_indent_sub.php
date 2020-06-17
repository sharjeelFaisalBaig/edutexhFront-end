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
          <li class="breadcrumb-item active" aria-current="page">Indents</li>
        </ol>
      </nav>
    </div>


    <div class="col-md-12">
    <div class="ms-panel-header">
        <h6 class="my-4 d-md-inline"><b>Inventory | </b><small>Indents</small></h6>
        <div class="float-md-right">
            <a href="Administration-inventory_indent_new_sub.php" class="btn btn-primary width70" type="submit">New</a>
            <a href="#" class="btn btn-primary width70" data-toggle="modal" data-target="#modal_newSupplier" type="submit">Search</a>
        </div>
    </div>
    </div>

    <div class="col-md-8 m-auto">


      <div class="form-group row my-4">
          <label class="col-sm-3 col-form-label my-3">Search By Store Name :</label>
          <div class="col-sm-3">
            <select class="form-control my-3 " id="searchByStore">
                <option selected>Pending</option>
                <option value="1">abc</option>
                <option value="2">efg</option>
                <option value="3">xyz</option>
            </select>
          </div>
          <div class="col-sm-3">
              <input type="text" class="form-control my-3" id="searchBy" placeholder="Search">
          </div>
          <div class="col-md-3">
            <a href="" class="btn btn-primary col-md-3">Submit</a>
          </div>
      </div>



      <div class="">
            <div class="col-md-12 my-4">

                    <div>
                        <table class="table">
                        <tbody class="table-bordered">
                            <tr>
                                <th scope="row"><b>No Indents</b></th> 
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
        </div>





    </div>




  <!-- <div class="modal fade" tabindex="-1" id="modal_newIndent" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">New Indent</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>

			<div class="modal-body">


            <div class="form-group row">
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
                    <table class="table border-0s">
                    <thead>
                        <tr>
                            <th>Suppliers Type</th>
                            <th>Required Qty</th>
                            <th>Pending</th>
                            <th>Available</th>
                            <th>Issued Qty</th>
                            <th>Issued Type</th>
                            <th>Unit Price</th>
                            <th>Batch No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                          <td>
                            <div class="row">
                              <select class="form-control" id="searchByStore">
                                <option selected>Punching Machine</option>
                                <option value="1">abc</option>
                                <option value="2">efg</option>
                                <option value="3">xyz</option>
                            </select>
                            <select class="form-control" id="searchByStore">
                                <option selected>Paper Clips</option>
                                <option value="1">abc</option>
                                <option value="2">efg</option>
                                <option value="3">xyz</option>
                            </select>
                            </div> 
                           </td> 


                        </tr>
                    </tbody>
                    </table>
                </div>
              </div>


			</div>

			<div class="modal-footer">
                <button type="button" onclick="show_func()" data-dismiss="modal" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div> -->
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->