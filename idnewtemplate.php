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
                  <li class="breadcrumb-item"><a href="Administration_sub.php">Academic</a></li>
                  <li class="breadcrumb-item"><a href="">ID Cards</a></li>
                  <li class="breadcrumb-item"><a href="idcardtemplate.php">New Template</a></li>
                  <li class="breadcrumb-item active" aria-current="page">ID Card Template Generate </li>
              </ol>
          </nav>
    </div>
    <div class="col-md-6 m-auto">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-body">

          <div class="form-row">
          <div class="col-md-12 mb-3 ">
            <div class="col-lg-12 pl-0 col-md-12">
              <h4>ID Card Details</h4>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">ID Card Number</label></div>
              <div class="col-8">
                <input type="text" class="form-control" placeholder="Enter ID Card Name" name="">
              </div>
            </div>
          </div>  
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Application User Type</label></div>
              <div class="col-8">
                <div class="input-group mb-1">
                         <ul class="ms-list d-flex">
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Student  </span>
                          </li>
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Employee </span>
                          </li>
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Parent </span>
                          </li>
                        </ul>
                      </div>
              </div>
            </div>
          </div>
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Select Resolution</label></div>
              <div class="col-8">
                <div class="input-group">
                 <select class="form-control">
                     <option>Landscape (78mm * 32mm)</option>
                     <option>Portrait (38mm * 86mm)</option>
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
              <div class="col-4"> <label for="validationCustom18">Template Design Back</label></div>
              <div class="col-12">
                <div class="input-group mb-1">
                         <ul class="ms-list d-flex">
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Disable  </span>
                          </li>
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Common for all users </span>
                          </li>
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Different for each other </span>
                          </li>
                        </ul>
                      </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Front Background Image</label></div>
              <div class="col-8">
                <div class="input-group">
                  <input type="file" class="form-control" name="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Back Background Image</label></div>
              <div class="col-8">
                <div class="input-group">
                  <input type="file" class="form-control" name="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
           <h5>Layout Spacing</h5>
            <div class="row mt-4">    
              <div class="col-3"> <label for="validationCustom18">Top spacing</label></div>
              <div class="col-2">
                <div class="input-group">
                  <input type="text" class="form-control" name="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
               <div class="col-3"> <label for="validationCustom18">Right spacing</label></div>
              <div class="col-2">
                <div class="input-group">
                  <input type="text" class="form-control" name="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
               <div class="col-3"> <label for="validationCustom18">Bottom spacing</label></div>
              <div class="col-2">
                <div class="input-group">
                  <input type="text" class="form-control" name="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
               <div class="col-3"> <label for="validationCustom18">Left spacing</label></div>
              <div class="col-2">
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
            <h5>Barcode</h5>
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Generate for</label></div>
              <div class="col-8">
                <div class="input-group">
                  <select class="form-control">
                      <option>Admission No</option>
                  </select>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            <div class="col-4 mt-4"> <label for="validationCustom18">Orientation</label></div>
              <div class="col-8">
                <div class="input-group">
                  <select class="form-control">
                      <option>Horizontal</option>
                  </select>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
                <div class="col-md-12 mb-3">
                    <div class="row">
              <div class="col-4"> <label for="validationCustom18">User Photo Style- Front</label></div>
              <div class="col-12">
                <div class="input-group mb-1">
                         <ul class="ms-list d-flex">
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Square  </span>
                          </li>
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Circle</span>
                          </li>
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="text" class="form-control col-2" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Dimension </span>
                          </li>
                        </ul>
                      </div>
              </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="row">
              <div class="col-4"> <label for="validationCustom18">User Photo Style- Back</label></div>
              <div class="col-12">
                <div class="input-group mb-1">
                         <ul class="ms-list d-flex">
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Square  </span>
                          </li>
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Circle</span>
                          </li>
                          <li class="ms-list-item">
                            <label class="ms-checkbox-wrap">
                              <input type="text" class="form-control col-2" checked=""> <i class="ms-checkbox-check"></i>
                            </label> <span> Dimension </span>
                          </li>
                        </ul>
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



