<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Finance | <small> Create Particulars</small></h6>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
              <li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
              <li class="breadcrumb-item"><a href="Administration-Finance_fees_sub.php">Fees</a></li>
              <li class="breadcrumb-item"><a href="Administration-Finance_feesCreate_sub.php">Create Fees</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create Particulars</li>
            </ol>
          </nav>
        </div>

        <div class="col-md-8 m-auto">
            <div class="row">
                <div class="col-md-6 my-4">
                    <div class="row">
                        <div class="col-4"> <label for="validationCustom18">Name </label><span class="text-danger d-inline">&nbsp;*</span></div>
                        <div class="col-8">
                            <div class="input-group">
                                <input type="text" class="form-control" id="" placeholder="Tution Fees" value="Tution Fees" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-4"> <label for="validationCustom18">Description </label></div>
                        <div class="col-8">
                            <div class="input-group">
                                <input type="text" class="form-control" id="" placeholder="" value="" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-4"> <label for="validationCustom18">Creating using </label></div>
                        <div class="col-8">
                            <div class="form-group row my-3">
                                <div class="col-md-12">
                                    <span class=""></span>
                                    <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1" checked="">
                                    <label class="form-label" for="exampleRadios1">
                                        All
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <span class=""></span>
                                    <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1" checked="">
                                    <label class="form-label" for="exampleRadios1">
                                        Admission no
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <span class=""></span>
                                    <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1" checked="">
                                    <label class="form-label" for="exampleRadios1">
                                        Student category
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4"> <label for="validationCustom18">Amount </label><span class="text-danger d-inline">&nbsp;*</span></div>
                        <div class="col-8">
                            <div class="input-group">
                                <input type="text" class="form-control" id="" placeholder="3000" value="3000" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-4"> <label for="validationCustom18">Tax Slab </label></div>
                        <div class="col-8">
                            <select class="form-control " id="catagory">
                                <option selected="">Select a tax slab</option>
                                <option value="1">abx</option>
                                <option value="2">xyz</option>
                            </select>
                            <input type="submit" class="btn btn-primary d-block width80" name="btn25" value="Create">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-4">
                    <div class="row">
                        <div class="col-4"> 
                            <label for="validationCustom18">Select a category </label><span class="text-danger d-inline">&nbsp;*</span>
                        </div>
                        <div class="col-8">
                            <div class="input-group">
                                <select class="form-control " id="catagory">
                                    <option selected="">Hostel Fees</option>
                                    <option value="1">Tution Fees</option>
                                    <option value="2">Academic Fees</option>
                                    <option value="3">Library Fees</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4"> 
                            <label for="validationCustom18">Select a batch </label><span class="text-danger d-inline">&nbsp;*</span>
                        </div>
                        <div class="col-8">
                            <p class="text-primary"> 
                                <strong>:&nbsp; All, None</strong>
                            </p>
                        </div>
                        <div class="col-12">
                            <div class="ms-widget ms-card">
                                <div class="ms-card-body" style="height: 200px; overflow-x: auto;">
                                    <div class="row">
                                        <div class="col-9 marginLeft">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">  
                                            <label class="form-check-label cursor-pointer" for="inlineCheckbox1">G1-A-2020</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9 marginLeft">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">  
                                            <label class="form-check-label cursor-pointer" for="inlineCheckbox1">G2-A-2020</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9 marginLeft">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">  
                                            <label class="form-check-label cursor-pointer" for="inlineCheckbox1">PG-Pink</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->