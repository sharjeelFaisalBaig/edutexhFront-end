<!-- header -->
<?php require 'header.php';?>
<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">
    <style>
        .height{
            height:30px;
        }
    </style>
    <div class="row">
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="DisciplineModule.php">Discipline Module</a></li>
                    <li class="breadcrumb-item"><a href="Discipline Module_New.php">New</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Submit</li>
                </ol>
            </nav>
        </div>
    </div>
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="alert alert-warning text-center my-4">
                        <strong>Complaint Registerd</strong>
                    </div>
                </div>      
            <div class="col-md-2"></div> 
        </div>
        <div class="row my-4">
                   <div class="col-md-8 m-auto">
                        <div class="row">
                        <label class="col-md-1 mt-1">Search</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control height">
                        </div>
                        <!-- <div class="col-md-2">
                            <a href="#" class="btn btn-primary m-auto width70">Search</a>
                        </div> -->
                        <label class="col-md-2 mt-1 offset-md-2">Filter By Status</label>
                        <div class="col-md-3">
                            <select class="form-control height">
                                <option selected="">All</option>
                                <option value="2">abc</option>
                                <option value="2">Above</option>
                                <option value="3">xyz</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
    <div class="row">     
    <div class="col-md-8 m-auto">
        <div class="table-responsive">
                <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">SI No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Complaint No.</th>
                            <th scope="col">Modified</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><a href="DisciplineModule_Complained.php">Political Sloghans</a></td> 
                            <td>C100</td>
                            <td>14-05-2020</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
    </div>
</div>
<!-- footer -->
<?php require 'footer.php';?>