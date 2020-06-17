    <?php include_once('header.php')?>
    <style type="text/css">
    .table td, .table th {
        padding: .75rem;
        border-top: 1px solid #dee2e6;
        vertical-align: middle;
    }
    </style>
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper container">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                  <li class="breadcrumb-item"><a href="">Transport</a></li>
                  <li class="breadcrumb-item"><a href="">Driver and Attendants</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Assign Employees</li>
              </ol>
          </nav>
      </div>
     
    <div class="col-md-12 text-center content-center">
    <div class="ms-panel w-100">
        <div class="ms-panel-header text-left pb-1">
         
         <p>Assign employees from departments as drivers or vehicle attendants and record their contact details</p>
     </div>
    
       <div class="col-md-8 offset-4">
        <div class="ms-panel w-50">
            
            <div class="ms-panel-body">
                <div class="alert alert-warning text-center">
                    <strong>Employee Created Successfully</strong>
                </div>
            </div>

        </div>
    </div>
    <div class="ms-panel-body">
        <div class="">
            <table class="table table-hover thead-primary">
                <thead>
                    <tr>
                        <th scope="col" class="text-left"> Employee Name</th>
                        <th scope="col" class="text-left">Employee No.</th>
                        <th scope="col" class="text-left">Employee Position</th>
                        <th scope="col" class="text-left">Employee Category</th>
                        <th scope="col" class="text-left">Job</th>
                        <th scope="col" class="text-left">Mobile</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Sheeraz Ahmed</td>
                        <td class="text-left">E14</td>
                        <td class="text-left">Transport Manager</td>
                        <td class="text-left">Non Teaching Staff</td>
                        <td class="text-left">
                            <select class="form-control">
                                <option>Driver</option>
                            </select>
                        </td>
                        <td class="text-left">
                            <input type="text" class="form-control" name="">
                        </td>
                    </tr>
                    
                   
                    </tbody>
                </table>
            </div>
    </div>
   
    <div class="col-md-12">
        <input type="submit" class="btn btn-primary" value="Save" name="">
        <input type="submit" class="btn btn-primary ml-2" value="Cancel" name="">
    </div>

    </div>
    </div>

    

   
    </div>
    </div>

    <!-- footer -->

    <?php include_once('footer.php')?>







