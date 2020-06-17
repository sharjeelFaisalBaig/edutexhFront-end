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
          <li class="breadcrumb-item active" aria-current="page">Stores</li>
        </ol>
      </nav>
    </div>


    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6>Inventory | <small>Stores</small></h6>
        </div>
    </div>


        <div class="col-md-8 m-auto">

            
        <div class="row d-none" id="to_show_1">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="alert alert-warning text-center my-4">
                    <strong>Store Type Was Sucessfully Created</strong>
                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>


            <div class="form-group row my-4">
                <div class="col-md-2"></div>
                <label class="col-sm-2 col-form-label">Name<h6 class="text-danger d-inline"> *</h6></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inventroyName" placeholder="Name Of Store" required>
                </div>
                <div class="col-md-2"></div>
            </div>


            <div class="form-group row">
                <div class="col-md-2"></div>
                <label class="col-sm-2 col-form-label">Name<h6 class="text-danger d-inline"> *</h6></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inventroyName" placeholder="Enter Code " required>
                </div>
                <div class="col-md-2"></div>
            </div>


            <div class="form-group row">
                <div class="col-md-2"></div>
                <label class="col-sm-2 col-form-label">Store Type :</label>
                <div class="col-sm-6">
                    <select class="form-control " id="storeType">
                        <option selected>Stationary Store Department - SSD</option>
                        <option value="1">abc</option>
                        <option value="2">efg</option>
                        <option value="3">xyz</option>
                    </select>
                </div>
                <div class="col-md-2"></div>
            </div>


            <div class="form-group row">
                <div class="col-md-2"></div>
                <label class="col-sm-2 col-form-label">Store Catagory :</label>
                <div class="col-sm-6">
                    <select class="form-control " id="storeCatagory">
                        <option selected>Consumables - C</option>
                        <option value="1">abc</option>
                        <option value="2">efg</option>
                        <option value="3">xyz</option>
                    </select>
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="form-group row">
                <div class="col-md-2"></div>
                <label class="col-sm-2 col-form-label">Invoice Prefix</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="invoicePre" placeholder="Enter Invoice Prefix">
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="col-md-2 m-auto">
                <a class="btn btn-primary" href="#" onclick="show_store()">Save</a>
            </div>

            <div class="d-none" id="to_show_2">
                <div class="col-md-12 my-4">

                    <div class="">
                        <table class="table thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">Store</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered ">
                            <tr>
                                <th scope="row">Office Inventory</th> 
                                <td>Ofc.Inv</td>
                                <td><a href="">Edit</a></td>
                                <td><a href="">Delete</a></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
            </div>
            <div class="row">
            <div class="col-md-3"></div>
            <a class="btn btn-primary col-md-2" type="submit" href="">PDF Report</a>
            <div class="col-md-2"></div>
            <a class="btn btn-primary col-md-2" type="submit" href="">CSV Export</a>
            <div class="col-md-3"></div>
            </div>


        </div>


        </div>



<script>
    function show_store(){
     var to_show_var_1 = document.getElementById("to_show_1").classList;
     var to_show_var_2 = document.getElementById("to_show_2").classList;
     to_show_var_1.remove("d-none");
     to_show_var_2.remove("d-none");   
    }
</script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->