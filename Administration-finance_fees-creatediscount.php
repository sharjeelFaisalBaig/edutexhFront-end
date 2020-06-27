<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Finance | <small> Create Discount</small></h6>
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
              <li class="breadcrumb-item active" aria-current="page">Create Discount</li>
            </ol>
          </nav>
        </div>

        <div class="col-md-8 m-auto">
            <div class="row">
                <div class="col-md-12 my-4">
                    <div class="row">
                        <div class="col-4"> 
                            <label for="validationCustom18">Discount type </label>
                        </div>
                        <div class="col-8">
                            <div class="input-group">
                                <select class="form-control " id="catagory">
                                    <option selected="">Select Discount type</option>
                                    <option value="1">Batch</option>
                                    <option value="2">Student category</option>
                                    <option value="3">Student</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4"> <label for="validationCustom18">Name </label><span class="text-danger d-inline">&nbsp;*</span></div>
                        <div class="col-8">
                            <div class="input-group">
                                <input type="text" class="form-control" id="" placeholder="Hostel Fees Discount" value="Hostel Fees Discount" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-4"> 
                            <label for="validationCustom18">Fee category </label><span class="text-danger d-inline">&nbsp;*</span>
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
                        <div class="col-4"> <label for="validationCustom18">Discount-For </label></div>
                        <div class="col-8">
                            <div class="form-group row my-3">
                                <div class="col-md-12">
                                    <span class=""></span>
                                    <input class="form-input" type="radio" name="exampleRadios" id="search" value="option1" checked="">
                                    <label class="form-label" for="exampleRadios1">
                                        Batches of this Category
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <span class=""></span>
                                    <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1">
                                    <label class="form-label" for="exampleRadios1">
                                        Particulars of this Category
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4"> 
                            <label for="validationCustom18"> Select a batch: </label><span class="text-danger d-inline">&nbsp;*</span>
                        </div>
                        <div class="col-8">
                            <div class="ms-widget ms-card">
                                <div class="ms-card-header">
                                    <h6>
                                        List of Batches
                                        <span class="text-danger d-inline"> 
                                            <a href="">All,</a>
                                            <a href="">None</a>
                                        </span>
                                    </h6>
                                </div>
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
                        <div class="col-4"> <label for="validationCustom18">Mode </label></div>
                        <div class="col-8">
                            <span class=""></span>
                            <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1" checked="">
                            <label class="form-label" for="exampleRadios1">
                                Percentage
                            </label>
                            <span class=""></span>
                            <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1">
                            <label class="form-label" for="exampleRadios1">
                                Amount
                            </label>
                        </div>
                        <div class="col-4"> <label for="validationCustom18">Discount</label><span class="text-danger d-inline">&nbsp;*</span></div>
                        <div class="col-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="" placeholder="10" value="10" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary d-block width80" name="btn25" value="Create">
                        </div>
                        <div class="col-2">
                            <label>%</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->