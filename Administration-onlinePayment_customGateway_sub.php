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
          <li class="breadcrumb-item"><a href="Administration-onlinePayment_sub.php">Online Payment</a></li>
          <li class="breadcrumb-item active" aria-current="page">Custom Gateway</li>
        </ol>
      </nav>
    </div>


    <div class="col-md-10">
        <h6 class="my-4"><b>Custom Gateway | </b><small>Gateway List</small></h6>
    </div>
    <div class="col-md-2">
        <a href="#" class="btn btn-primary" onclick="show_form()">New Gateway</a>
    </div>
     
     <div class="col-md-12">
        <hr>
     </div>

     <div class="col-md-8 m-auto">


            <div class="col-md-12 my-4">
            
            <div class="">
                <table class="table table-bordered thead-primary">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pay</td>
                        <td>Active</td>
                        <td><a href="#">Edit</a></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>

        <form id="show_target" class="my-2 d-none">

            <div class="form-group row my-5 mx-1">
                <label class="col-sm-2 col-form-label">Name :</label>
                <div class="col-sm-4">
                    <input type="text" id="pay_name" class="form-control"  placeholder="Name">
                </div>
            </div>
            <div class="col-md-12 my-2">
                <h5>Configuration Fields</h5>
                <hr>
            </div>

            <div class="my-5">
                <div class="form-group row  mx-1" id="to_remove_1">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="target_url_name" class="form-control"  placeholder="target_URL">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div >
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row  mx-1" id="to_remove_1">
                    <label class="col-sm-2 col-form-label">Value :</label>
                    <div class="col-sm-4">
                        <input type="text" id="target_url_value" class="form-control"  placeholder="Enter URL">
                    </div>
                </div>
            </div>


            <div class="my-5">
                <div class="form-group row  mx-1" id="to_remove_2">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="target_url_name" class="form-control"  placeholder="Currency_Code">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div>
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row  mx-1" id="to_remove_2">
                    <label class="col-sm-2 col-form-label">Value :</label>
                    <div class="col-sm-4">
                        <input type="text" id="target_url_value" class="form-control"  placeholder="USD">
                    </div>
                </div>
            </div>


            <div class="my-5">
                <div class="form-group row  mx-1" id="to_remove_3">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="target_url_name" class="form-control"  placeholder="Bussines">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div>
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row  mx-1" id="to_remove_3">
                    <label class="col-sm-2 col-form-label">Value :</label>
                    <div class="col-sm-4">
                        <input type="text" id="target_url_value" class="form-control"  placeholder="Enter Bussines Email">
                    </div>
                </div>
            </div>


            <div class="my-5">
                <div class="form-group row  mx-1" id="to_remove_4">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="target_url_name" class="form-control"  placeholder="cmd">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div>
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row  mx-1" id="to_remove_4">
                    <label class="col-sm-2 col-form-label">Value :</label>
                    <div class="col-sm-4">
                        <input type="text" id="target_url_value" class="form-control"  placeholder="_xclick">
                    </div>
                </div>
            </div>

            <div class="row mx-2">
                <div class="col-md-4">
                    <i class="fas fa-plus-square  fa-cog d-inline"></i>&nbsp;
                    <p class="d-inline text-success">Add</p>
                </div>
                <div class="col-md-8"></div>
            </div>


<!-- Config Fields Ends -->




            <div class="col-md-12 my-2">
                <hr>
                <h5>Variable Fields</h5>
                <hr>
            </div>

            <div class="my-5">
                <div class="form-group row" id="to_remove_1_varFields">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="return" class="form-control"  placeholder="Return">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div>
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Field Type :</label>
                    <div class="col-sm-4">
                        <select class="form-control " id="field_type">
                            <option selected>Redirect URL</option>
                            <option value="1">abc</option>
                            <option value="2">efg</option>
                            <option value="3">xyz</option>
                        </select>
                    </div>
                </div>
                </div>

                

                <div class="my-5">
                <div class="form-group row" id="to_remove_1_varFields">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="return" class="form-control"  placeholder="Ammount">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div>
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Field Type :</label>
                    <div class="col-sm-4">
                        <select class="form-control " id="field_type">
                            <option selected>Ammount</option>
                            <option value="1">abc</option>
                            <option value="2">efg</option>
                            <option value="3">xyz</option>
                        </select>
                    </div>
                </div>
                </div>

                <div class="my-5">
                <div class="form-group row" id="to_remove_1_varFields">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="return" class="form-control"  placeholder="Item_Name">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div>
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Field Type :</label>
                    <div class="col-sm-4">
                        <select class="form-control " id="field_type">
                            <option selected>Item_Name</option>
                            <option value="1">Amount</option>
                            <option value="2">Redirect URL</option>
                            <option value="3">Payer Firstname</option>
                            <option value="4">Payer Lastname</option>
                            <option value="5">Payer Email</option>
                            <option value="6">Payer Phone</option>
                            <option value="7">Student Admission Number</option>
                            <option value="8">Student Full Name</option>
                            <option value="9">Student Roll Number</option>
                            <option value="10">Batch Name</option>
                            <option value="11">Fee Name</option>
                            <option value="12">Student Additional Field</option>
                        </select>
                    </div>
                </div>
                </div>
                


            <div class="row mx-1">
                <div class="col-md-4">
                    <i class="fas fa-plus-square  fa-cog d-inline"></i>&nbsp;
                    <p class="d-inline text-success">Add</p>
                </div>
                <div class="col-md-8"></div>
            </div>


            <div class="col-md-12 my-2">
                <hr>
                <h5>Response Parameter</h5>
                <hr>
            </div>

            <div class="my-5">
                <div class="form-group row" id="to_remove_1_responsePara">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="return" class="form-control"  placeholder="Return">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div>
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Field Type :</label>
                    <div class="col-sm-4">
                        <select class="form-control " id="field_type_responsePara">
                            <option selected>Redirect URL</option>
                            <option value="1">abc</option>
                            <option value="2">efg</option>
                            <option value="3">xyz</option>
                        </select>
                    </div>
                </div>
                </div>


                <div class="my-5">
                <div class="form-group row" id="to_remove_2_responsePara">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="return" class="form-control"  placeholder="St">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div>
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Parameter Type :</label>
                    <div class="col-sm-4">
                        <select class="form-control " id="field_type_responsePara">
                            <option selected>Transaction Status</option>
                            <option value="1">abc</option>
                            <option value="2">efg</option>
                            <option value="3">xyz</option>
                        </select>
                    </div>
                </div>
                </div>

                <div class="my-5">
                <div class="form-group row" id="to_remove_3_responsePara">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="return" class="form-control"  placeholder="Completed">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div>
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Parameter Type :</label>
                    <div class="col-sm-4">
                        <select class="form-control " id="field_type_responsePara">
                            <option selected>Success Code</option>
                            <option value="1">abc</option>
                            <option value="2">efg</option>
                            <option value="3">xyz</option>
                        </select>
                    </div>
                </div>
                </div>

                <div class="my-5">
                <div class="form-group row" id="to_remove_4_responsePara">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="return" class="form-control"  placeholder="Tx">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div>
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Parameter Type :</label>
                    <div class="col-sm-4">
                        <select class="form-control " id="field_type_responsePara">
                            <option selected>Ammount</option>
                            <option value="1">Transaction</option>
                            <option value="2">Success Code</option>
                            <option value="3">Reason Code</option>
                            <option value="4">Online Transaction Reference</option>
                        </select>
                    </div>
                </div>
                </div>

                <div class="my-5">
                <div class="form-group row" id="to_remove_5_responsePara">
                    <label class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-4">
                        <input type="text" id="return" class="form-control"  placeholder="Amt">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div>
                            <i class="fas fa-window-close text-primary d-inline"></i>
                            <p class="d-inline text-danger">Remove</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Parameter Type :</label>
                    <div class="col-sm-4">
                        <select class="form-control " id="field_type_responsePara">
                            <option selected>Ammount</option>
                            <option value="1">abc</option>
                            <option value="2">efg</option>
                            <option value="3">xyz</option>
                        </select>
                    </div>
                </div>
                </div>


                <div class="row mx-1">
                <div class="col-md-4">
                    <i class="fas fa-plus-square  fa-cog d-inline"></i>&nbsp;
                    <p class="d-inline text-success">Add</p>
                </div>
                <div class="col-md-8"></div>
            </div>
            <div class="col-md-2 m-auto">
                <a href="#" onclick="hide_form()" class=" btn btn-primary">Save</a> 
            </div>         

        </form>


     </div>

<script>

function show_form(){
    var form_show = document.querySelector("#show_target").classList;
    form_show.remove("d-none");   
}

function hide_form(){
    var form_show = document.querySelector("#show_target").classList;
    form_show.add("d-none");
}
</script>


    
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->