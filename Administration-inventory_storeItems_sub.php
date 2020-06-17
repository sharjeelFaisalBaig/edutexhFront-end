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
          <li class="breadcrumb-item active" aria-current="page">Store Items</li>
        </ol>
      </nav>
    </div>

    <div class="col-md-12">
    <div class="ms-panel-header">
        <h6 class="my-4 d-md-inline"><b>Store Items | </b><small>Home</small></h6>
        <div class="float-md-right">
            <a href="#" class="btn btn-primary width70" type="button">GRN</a>
            <a href="Administration-inventory_indent_sub.php" class="btn btn-primary width70" type="submit">Indents</a>	
            <a href="#" class="btn btn-primary width70" type="submit">PO</a>
            <a href="#" class="btn btn-primary width70" data-toggle="modal" data-target="#modal_new" type="submit">New</a>
        </div>
    </div>
    </div>

    <div class="col-md-10 m-auto">


    <div class="row d-none" id="to_show_1">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="alert alert-warning text-center my-4">
                    <strong>Store Item Was Sucessfully Updated</strong>
                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>


    <div class="form-group row my-4">
        <label class="col-sm-3 col-form-label">Search By Store Name :</label>
        <div class="col-sm-4">
          <select class="form-control " id="searchByStore">
              <option selected>Select All</option>
              <option value="1">abc</option>
              <option value="2">efg</option>
              <option value="3">xyz</option>
          </select>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="searchByStoreField" placeholder="Search By Store Name">
        </div>
        <span class="col-md-1"></span>
    </div>
    
    <div id="to_hide">
            <div class="col-md-12 my-4">

                    <div>
                        <table class="table">
                        <tbody class="table-bordered">
                            <tr>
                                <th scope="row"><b>Items Empty</b></th> 
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>


                <div class="col-md-12 my-4 d-none" id="demo_select">

                    <div class="">
                        <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">SI No.</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Store Name</th>
                                <th scope="col">Item Catagory</th>
                                <th scope="col">Batch No.</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">TAX</th>
                                <th scope="col" class="border-0"></th>
                                <th scope="col" class="border-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Punching Machine</td> 
                                <td>Office Inventory</td>
                                <td>-</td>
                                <td>01</td>
                                <td>20</td>
                                <td>235.00</td>
                                <td>17.00</td>
                                <td class="border-0"><a href="#">Edit</a></td>
                                <td class="border-0"><a href="#">Delete</a></td>
                            </tr>
                            <tr class="table-bordered">
                                <th scope="row">1</th>
                                <td>Paper Clips</td> 
                                <td>Office Inventory</td>
                                <td>Stationary</td>
                                <td>02</td>
                                <td>40</td>
                                <td>10.00</td>
                                <td>17.00</td>
                                <td class="border-0"><a href="#">Edit</a></td>
                                <td class="border-0"><a href="#">Delete</a></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <span class="col-md-3"></span>
                        <a href="#" class="btn btn-primary col-md-2">PDF Report</a>
                        <span class="col-md-2"></span>
                        <a href="#" class="btn btn-primary col-md-2">CSV Export</a>
                        <span class="col-md-3"></span>
                    </div>
            </div>



    </div>

<div class="modal fade" tabindex="-1" id="modal_new" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">New Item</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>

			<div class="modal-body">

            <div class="form-group row my-4">
                <label class="col-sm-3 col-form-label d-inline">Store<h6 class="d-inline text-danger">*</h6></label>
                <div class="col-sm-9">
                    <select class="form-control " id="searchByStore">
                        <option selected>Select All</option>
                        <option value="1">abc</option>
                        <option value="2">efg</option>
                        <option value="3">xyz</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Item Name<h6 class="d-inline text-danger">*</h6></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="itemName" placeholder="Enter Item Name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Code</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="itemCode" placeholder="Enter Item Code">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Quantity<h6 class="d-inline text-danger">*</h6></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="itemQuantity" placeholder="Enter Item Quantity">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Unit Price<h6 class="d-inline text-danger">*</h6></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="itemUnitPrice" placeholder="Enter Unit Price">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">TAX (%)<h6 class="d-inline text-danger">*</h6></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="itemTax" placeholder="Enter Tax">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Batch No.<h6 class="d-inline text-danger">*</h6></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="itemBatch" placeholder="Enter Batch No.">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Sellable :</label>
                <div class="col-sm-9">
                    <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Item Catagory<h6 class="d-inline text-danger">*</h6></label>
                <div class="col-sm-9">
                    <select class="form-control " id="searchByStore">
                        <option selected>Staitionary</option>
                        <option value="1">abc</option>
                        <option value="2">efg</option>
                        <option value="3">xyz</option>
                    </select>
                </div>
            </div>

            <div class="col-md-2 m-auto">
            </div>

			</div>

			<div class="modal-footer">
                <button type="button" onclick="show_func()" data-dismiss="modal" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div> 

<script>


function show_func(){
    var to_show_alert = document.getElementById("to_show_1").classList;
    var to_show_table = document.querySelector("#demo_select").classList;
    var to_hide = document.getElementById("to_hide").classList;
    to_show_alert.remove("d-none");
    to_show_table.remove("d-none");
    to_hide.add("d-none");
}


</script>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->