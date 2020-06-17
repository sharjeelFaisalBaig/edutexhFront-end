<!-- header -->

<?php require 'header.php';?>

<!-- header -->

<style>
.my-bg-primary{
    background-color:#760202;
    color:white;
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
          <li class="breadcrumb-item active" aria-current="page">Suppliers</li>
        </ol>
      </nav>
    </div>

    <div class="col-md-12">
    <div class="ms-panel-header">
        <h6 class="my-4 d-md-inline"><b>Store Items | </b><small>Home</small></h6>
        <div class="float-md-right">
            <a href="#" class="btn btn-primary width70" data-toggle="modal" data-target="#modal_newSupplier" type="submit">New</a>
        </div>
    </div>
    </div>

    <div class="col-md-10 m-auto">

    
    <div class="row d-none" id="to_show">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="alert alert-warning text-center my-4">
                    <strong>Supplier Was Sucessfully Created</strong>
                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>


        <div class="demo_hide">
            <div class="col-md-12 my-4">

                    <div>
                        <table class="table">
                        <tbody class="table-bordered">
                            <tr>
                                <th scope="row"><b>No Supplier</b></th> 
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
        </div>


        <div class="col-md-12 my-4 d-none" id="demo_select">

            <div class="">
                <table class="table table-bordered thead-primary">
                <tbody>
                    <tr>
                        <td class="my-bg-primary">Supplier Type</td>
                        <td>Stationary</td>
                    </tr>
                    <tr>
                        <td class="my-bg-primary">Name</td> 
                        <td>Sajjid And Son Stationers</td> 
                    </tr>
                    <tr>
                        <td class="my-bg-primary">Contact No.</td>
                        <td>000014454454</td>
                    </tr>
                    <tr>
                        <td class="my-bg-primary">Address</td>
                        <td>Karachi</td>
                    </tr>
                    <tr>
                        <td class="my-bg-primary">TIN No.</td>
                        <td>1234</td>
                    </tr>
                    <tr>
                        <td class="my-bg-primary">Region</td>
                        <td>SINDH</td>
                    </tr>
                    <tr>
                        <td class="my-bg-primary">Help Desk</td>
                        <td>Muhammad Furqan</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>


        <div class="col-md-12 my-4 d-none" id="demo_select_2">

                    <div class="">
                        <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">SI No.</th>
                                <th scope="col">Supplier Name</th>
                                <th scope="col">Supplier Type</th>
                                <th scope="col">Contact No.</th>
                                <th scope="col">TIN No.</th>
                                <th scope="col">Region</th>
                                <th scope="col" class="border-0"></th>
                                <th scope="col" class="border-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Sajjad & Son Stationers</td> 
                                <td>Office Inventory</td>
                                <td>Stationers</td>
                                <td>123456</td>
                                <td>SINDH</td>
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



<div class="modal fade" tabindex="-1" id="modal_newSupplier" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">New Supplier</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>

			<div class="modal-body">

            <div class="form-group row my-4">
                <label class="col-sm-3 col-form-label d-inline">Supplier Type</label>
                <div class="col-sm-9">
                    <select class="form-control " id="searchByStore">
                        <option selected>Stationary-St</option>
                        <option value="1">abc</option>
                        <option value="2">efg</option>
                        <option value="3">xyz</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Supplier Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="supplierName" placeholder="Enter Supplier Name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Contact No.</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="contactNo" placeholder="Enter Contact Number">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Address</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="address" placeholder="Enter Supplier Address">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">TIN No.</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tinNumber" placeholder="Enter TIN OF Supplier">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Region</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="itemTax" placeholder="Enter Region for e.g SINDH">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label d-inline">Help Desk</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="helpDesk" placeholder="Enter Help Desk Name">
                </div>
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
    var to_show_alert = document.getElementById("to_show").classList;
    var to_show_table = document.querySelector("#demo_select").classList;
    var to_show_table_2 = document.querySelector("#demo_select_2").classList;
    var to_hide_table = document.querySelector(".demo_hide").classList;
    to_show_alert.remove("d-none");
    to_show_table.remove("d-none");
    to_show_table_2.remove("d-none");
    to_hide_table.add("d-none");
}


</script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->