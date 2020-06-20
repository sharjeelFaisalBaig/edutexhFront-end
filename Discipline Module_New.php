<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="DisciplineModule.php">Discipline Module</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New</li>
                </ol>
            </nav>
        </div>
    </div>        
    <div class="col-md-8 offset-md-4">
        <div class="form-group row mt-4">
        <div class="col-md-2">
            <label for="validationCustom18" class="mt-1"> Complaint No.</label>    
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control">        
        </div>
        </div>
        <div class="form-group row mt-4">
        <div class="col-md-2">
            <label for="validationCustom18" class="mt-1">Title</label>    
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control">        
        </div>
        </div>
        <div class="form-group row mt-4">
        <div class="col-md-2">
            <label for="validationCustom18" class="mt-1">Description</label>    
        </div>
        <div class="col-md-4">
            
        <textarea name="" id="input" class="form-control" rows="3"></textarea>        
        </div>
        </div>
        <div class="form-group row">
        <div class="col-md-2">
            <label for="validationCustom18" class="mt-1">Trial Date</label>    
        </div>
        <div class="col-md-4">
            <input type="date" name="" id="input" class="form-control">        
        </div>
        </div>
        <div class="form-group row">
        <div class="col-md-2">
            <label for="validationCustom18" class="mt-1">Persons</span>    
        </div>
        <div class="col-md-4">
        </div>
        </div>
</div>
    <div class="col-md-12 m-auto">
    <div class="col-md-12">
        <div class="table-responsive">
    <table class="table thead-primary table-bordered">
        <thead>
            <tr>
            <th>Complained No.
            <input type="text" class="form-control mt-1" style="height:25px; border-radius:20px">
            </th>
            <th>Complained By
            <input type="text" class="form-control mt-1" style="height:25px; border-radius:20px"></th>
            <th>Jury
            <input type="text" class="form-control mt-1" style="height:25px; border-radius:20px"></th>
            <th>Responsible Officials
            <input type="text" class="form-control mt-1" style="height:25px; border-radius:20px"></th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="ms-card m-0">
                        <b>Khizer Hussain(Emp ID E10)</b>
                        <i class="fas fa-times text-danger float-md-right"></i>
                        <div class="clearfix"></div>
                    </div>
                </td>
                <td>
                    <div class="ms-card m-0">
                        <b>Arslan Ali(Emp ID E40)</b>
                        <i class="fas fa-times text-danger float-md-right"></i>
                        <div class="clearfix"></div>
                    </div>
                </td>
                <td>
                    <div class="ms-card m-0">
                        <b>Rahid Ahmed(Emp ID E50)</b>
                        <i class="fas fa-times text-danger float-md-right"></i>
                        <div class="clearfix"></div>
                    </div>
                </td>
                <td>
                    <div class="ms-card m-0">
                        <b>Muhammad Arshad(Emp ID E60)</b>
                        <i class="fas fa-times text-danger float-md-right"></i>
                        <div class="clearfix"></div>
                    </div>
                </td>
                <tr>
                <td>
                    <div class="ms-card m-0">
                        <b>Muhammad Saleem(Emp ID E64)</b>
                        <i class="fas fa-times text-danger float-md-right"></i>
                        <div class="clearfix"></div>
                    </div>
                </td>
                <td>
                    <div class="ms-card m-0">
                        <b>Abdul Qudoos(Emp ID E44)</b>
                        <i class="fas fa-times text-danger float-md-right"></i>
                        <div class="clearfix"></div>
                    </div>
                </td>
                <td>
                    <div class="ms-card m-0">
                        <b>Khan Ways(Emp ID E44)</b>
                        <i class="fas fa-times text-danger float-md-right"></i>
                        <div class="clearfix"></div>
                    </div>
                </td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td>
                    <div class="ms-card m-0">
                        <b>Iqra(Emp ID E89)</b>
                        <i class="fas fa-times text-danger float-md-right"></i>
                        <div class="clearfix"></div>
                    </div>
                </td>
                <td></td>
                <td></td>
                </tr>
        </tbody>
    </table>
    </div>
    </div>
    <div class="col-md-8">
        <div class="form-group row mt-4">
        <div class="col-md-3 offset-md-6">
            <label for="validationCustom18" class="mt-1">Attachments(5MB max)</label>    
        </div>
        <div class="col-md-2">
            <input type="file"/>        
        </div>
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group row mt-4">
        <div class="col-md-3">      
        </div>
        <div class="col-md-8 offset-md-4">
        <div class="form-group row">
        <div class="col-md-2"><a href="Discipline Module_New_Submit.php" class="btn btn-primary width70 float-right">Submit</a></div>
        <div class="col-md-2" style=" border-radius:20px;"><a href="" class="btn btn-primary width70 float-left">Cancel</a></div>   
        </div>
    </div>
<div>
<!-- footer -->
<?php require 'footer.php';?>