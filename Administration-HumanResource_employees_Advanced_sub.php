<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
.input_text_cstm{
  width:100%;
}
.cstm_search_result{
  font-size:.4cm;
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
          <li class="breadcrumb-item"><a href="Administration-HumanResource_sub.php">Human Resource</a></li>
          <li class="breadcrumb-item"><a href="Administration-HumanResource_employees_sub.php">Employees</a></li>
          <li class="breadcrumb-item active" aria-current="page">Advanced</li>
        </ol>
      </nav>
    </div>

    <div class="container my-3">
      <div class="col-lg-1"></div>
      <div class="col-lg-11">

          <form>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Name :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control input_text_cstm " id="name" placeholder="Name">
            </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Employee Number :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control input_text_cstm " id="phNumber" placeholder="Ph.Number">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Gender:</label>
              <div class="col-sm-10 my-2">
                <input class="form-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-label" for="exampleRadios1">
                  All
                </label>
                <span class="ml-2"></span>
                <input class="form-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-label" for="exampleRadios1">
                  Male
                </label>
                <span class="ml-2"></span>
                <input class="form-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-label" for="exampleRadios1">
                  Female
                </label>
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Blood Group :</label>
            <div class="col-sm-10">
              <select class="form-control input_text_cstm " id="inputGroupSelect01">
                  <option selected>Unkown</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
            </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Marital Status :</label>
            <div class="col-sm-10">
              <select class="form-control input_text_cstm " id="inputGroupSelect02">
                  <option selected>Select</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
            </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Country :</label>
            <div class="col-sm-10">
              <select class="form-control input_text_cstm " id="inputGroupSelect03">
                  <option selected>Pakistan</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
            </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Grade :</label>
            <div class="col-sm-10">
              <select class="form-control input_text_cstm " id="inputGroupSelect04">
                  <option selected>Pakistan</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
            </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Position :</label>
            <div class="col-sm-10">
              <select class="form-control input_text_cstm " id="inputGroupSelect05">
                  <option selected>Pakistan</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
            </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Catagory :</label>
            <div class="col-sm-10">
              <select class="form-control input_text_cstm " id="inputGroupSelect06">
                  <option selected>Select</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
            </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Department :</label>
            <div class="col-sm-10">
              <select class="form-control input_text_cstm " id="inputGroupSelect07">
                  <option selected>Pakistan</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
            </div>
            </div>

            
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Joining Date :</label>
                <div class="col-md-5">
                  <select class="form-control d-inline "  id="inputGroupSelect08">
                      <option selected>Choose</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
                  </div>
                  <div class="col-md-5">
                  <select class="form-control  d-inline "  id="inputGroupSelect09">
                      <option selected>Select</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
              <label class="col-sm-2 col-form-label"> Date Of Birth :</label>
                  <div class="col-md-5">
                    <select class="form-control  d-inline "  id="inputGroupSelect10">
                        <option selected>Choose</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                    <div class="col-md-5"> 
                    <select class="form-control  d-inline "  id="inputGroupSelect11">
                        <option selected>Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                  </div>
              </div>
            
              <div class="form-group row">
            <label class="col-sm-2 col-form-label">Status:</label>
              <div class="col-sm-10 my-2">
                <input class="form-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-label" for="exampleRadios1">
                  Present
                </label>
                <span class="ml-2"></span>
                <input class="form-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-label" for="exampleRadios1">
                  Former
                </label>
                <span class="ml-2"></span>
                <input class="form-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-label" for="exampleRadios1">
                  All
                </label>
              </div>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </form>
      </div>
   
    </div>
  

    <div class="container-fluid my-5 mx-4">
    <div class="row"><p class="text-muted mb-4"><i> You Have Searched For: </i></p></div>
    <div class="row">
        <div class="col-lg-3 my-3">
          <small class="text-muted ml-3 cstm_search_result"><i> Nationality :  Pakistan </i></small>
        </div>
        <div class="col-lg-3 my-3">
        <small class="text-muted ml-1 cstm_search_result"><i>Present Employees :</i></small>            
        </div>
        <div class="col-lg-2">
        
        </div>
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-2">
          <button class="btn btn-primary">Search Again</button>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-8"></div>
      <div class="col-lg-2">
        <button class="btn btn-primary">CSV Report</button>
      </div>
      <div class="col-lg-2">
        <button class="btn btn-primary">PDF Report</button>
      </div>
    </div>
</div>

    <div class="col-md-8 m-auto">
        <div class="ms-panel-body">
            <div class="">
                <table class="table table-bordered table-hover thead-primary">
                <thead>
                    <tr>
                        <th scope="col">SI No</th>
                        <th scope="col">first Name</th>
                        <th scope="col">Employee Id</th> 
                        <th scope="col">Employee Department</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Aftab Ahmed</td>
                        <td>E18</td>
                        <td>System Admin</td>
                    </tr>

                    <tr>
                        <th scope="row">8</th>
                        <td>Ahmed Khan</td>
                        <td>E38</td>
                        <td>Inventory</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->