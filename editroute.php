<!-- header -->
<?php require 'header.php';?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Oswald:wght@500&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

<!-- header -->
<style>
  .hide {
    padding: 10px;
    background-color: #e9e9e9;
  }
  .hide p {
    margin: 0;
  }
  .formulabox{
    border: 1px solid;
    padding: 48px 49px 12px;
  }
  .list-group{
    list-style: disc;
    padding: 0;
  }
  .list-group li{
    margin: 2px;
  }
  .borderpanel{
    border: 1px solid;
  }
  .customcol{
    max-width: 56.333333%
  }

   .table td, .table th {
    padding: .75rem;
    border-top: 1px solid #dee2e6;
    vertical-align: middle;
}

</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <form class="needs-validation clearfix" novalidate>
    <div class="row">
     <div class="col-md-12">
         <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                  <li class="breadcrumb-item"><a href="">Transport</a></li>
                  <li class="breadcrumb-item"><a href="route.php">Route</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Route</li>
              </ol>
          </nav>
    </div>
    <div class="col-md-6 m-auto">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-body">

          <div class="form-row">
          <div class="col-md-12 mb-3 ">
            <div class="col-lg-12 pl-0 col-md-12">
              <h4>Route Details</h4>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Academic Year</label></div>
              <div class="col-8">
               <p><b>2020 - 2021</b></p>
              </div>
            </div>
          </div>  
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Name</label></div>
              <div class="col-8">
                <div class="input-group">
                  <input type="text" class="form-control" name="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Flat route fare</label></div>
              <div class="col-8">
                <div class="input-group">
                  <input type="text" class="form-control" name="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Vehicle</label></div>
              <div class="col-8">
                <div class="input-group">
                  <select class="form-control">
                      <option>RIJ-27</option>
                  </select>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Driver</label></div>
              <div class="col-8">
                <div class="input-group">
                  <select class="form-control">
                      <option>ABC</option>
                  </select>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Attendant</label></div>
              <div class="col-8">
                <div class="input-group">
                  <select class="form-control">
                      <option>RIJ-27</option>
                  </select>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Nearest Hospital</label></div>
              <div class="col-8">
                <div class="input-group">
                  <input type="text" class="form-control" name="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Nearest Police Station</label></div>
              <div class="col-8">
                <div class="input-group">
                  <input type="text" class="form-control" name="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>
<div class="container formulabox">
  <div class="row">
       <div class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-header text-left pb-1">
                <h5>Assign Stops</h5>
            </div>
            <div class="ms-panel-body">
                <div class="">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">Stop</th>
                            <th scope="col" class="text-left">Pickup Time</th>
                            <th scope="col" class="text-left">Drop Time</th>
                            <th scope="col" class="text-left">Distance (KMs)</th>
                            <th scope="col" class="text-left">Fare (Rs)</th>
                            <th scope="col" class="text-left"></th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-left">
                                <select class="form-control">
                                    <option>Comiti </option>
                                </select>
                            </td>
                            <td class="text-left">
                                <input type="text" class="form-control" name="">
                            </td>
                            <td class="text-left">
                                <input type="text" class="form-control" name="">
                            </td>
                            <td class="text-left">
                                <input type="text" class="form-control" name="">
                            </td>
                            <td class="text-left">
                                <input type="text" class="form-control" name="">
                            </td>
                            <td class="text-left"><a href="">Add</a></td>
                        </tr>
                          
                         
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
  </div>
</div>
<div class="row">
  <div class="col-md-6 float-right mb-3">
    <input type="submit" class="btn btn-primary d-block w-25 ml-auto" name="btn25" value="Save">
    <!-- <input type="submit" class="btn btn-primary d-block w-25 ml-auto" name="btn25" value="Cancel"> -->

  </div>
  <div class="col-md-6 mb-3">
    <!-- <input type="submit" class="btn btn-primary d-block w-25 ml-auto" name="btn25" value="Save"> -->
    <input type="submit" class="btn btn-primary d-block w-25" name="btn25" value="Cancel">

  </div>
</div>
</form>
</div>
<!-- /Body Content Wrapper -->

<!-- footer -->
<?php require 'footer.php';?>
<script>
  $('#select_box').change(function () {
    var select=$(this).find(':selected').val();
    $(".hide").hide();
    $('#' + select).show();

  }).change();
</script>

<script>
    // date
    document.querySelector("#financial-start").valueAsDate = new Date();
    document.querySelector("#financial-end").valueAsDate = new Date();
  </script>
  <!-- footer -->



