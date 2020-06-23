<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
    .bg-cstm{
        background-color:rgb(183, 181, 181);
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students | </b><small>Advanced Search</small></h6>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-student.php">Students</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Advance Search</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="form-group row mt-5">
            <label class="col-md-2">Name</label>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Admission Number</label>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Course</label>
            <div class="col-md-6">
                <select class="form-control">
                    <option value="cstm" selected>Select A Course</option>
                    <option value="cstm" selected>ABC Course</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Batch</label>
            <div class="col-md-6">
                <select class="form-control">
                    <option value="cstm" selected>Select A Batch</option>
                    <option value="cstm" selected>ABC Batch</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Catagory</label>
            <div class="col-md-6">
                <select class="form-control">
                    <option value="cstm" selected>Select A Catagory</option>
                    <option value="cstm" selected>Financial Week Student</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Gender</label>
            <div class="col-sm-6 my-2">
                <span class="ml-2"></span>
                <input class="form-input" type="radio" name="exampleRadios" id="male" value="option1">
                <label class="form-label" for="male">
                    Male
                </label>
                <span class="ml-2"></span>
                <input class="form-input" type="radio" name="exampleRadios" id="female" value="option1">
                <label class="form-label" for="female">
                    Female
                </label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Blood Group</label>
            <div class="col-md-6">
                <select class="form-control">
                    <option value="cstm" selected>Select A Blood Group</option>
                    <option value="a+" selected>A+</option>
                    <option value="a-" selected>A-</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Country</label>
            <div class="col-md-6">
                <select class="form-control">
                    <option value="cstm" selected>Select A Country</option>
                    <option value="a+" selected>Pakistan</option>
                    <option value="a-" selected>India</option>
                    <option value="a-" selected>Afghanistan</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Admission Date</label>
            <div class="col-md-3">
                <select class="form-control">
                    <option value="cstm" selected>Month</option>
                    <option value="jan" selected>jan</option>
                    <option value="February" selected>February</option>
                    <option value="March" selected>March</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-control">
                    <option value="cstm" selected>Year</option>
                    <option value="a+" selected>2002</option>
                    <option value="a-" selected>2003</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Status</label>
            <div class="col-sm-6 my-2">
                <span class="ml-2"></span>
                <input class="form-input" type="radio" name="exampleRadios" id="Present" value="option1">
                <label class="form-label" for="Present">
                    Present
                </label>
                <span class="ml-2"></span>
                <input class="form-input" type="radio" name="exampleRadios" id="Former" value="option1">
                <label class="form-label" for="Former">
                    Former
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-2">
                <a href="#" onclick="show()" class="btn btn-primary">Search</a>
            </div>
        </div>
        <div class="d-none mt-5" id="to_show">
            <div class="row">
                <p class="text-muted col-md-12"><i> You Have Searched For: </i></p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="text-muted mt-4"> Nationality :  Pakistan</p>
                </div>
                <div class="col-md-3">
                    <p class="text-muted mt-4">Present Employees :</p>            
                </div>
                <div class="col-md-2 offset-md-4">
                    <div class="float-md-right">
                        <button class="btn btn-primary" onclick="hide()">Search Again</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-8">
                    <div class="float-md-right mt-3">
                        <a href="#" class="btn btn-primary d-inline">CSV Report</a>
                        <a href="#" class="btn btn-primary d-inline">View PDF Report</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="table-responsive">
                        <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">SI No</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Batch</th>
                                <th scope="col">Admin No.</th>
                                <th scope="col">Roll No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="Academic-studentAdmission_profile.php">Arsalan Khan Saleem</a></td>
                                <td>MBA-SEM II-A-2020</td>
                                <td>E12</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="Academic-studentAdmission_profile.php">Arsalan Khan Saleem</a></td>
                                <td>MBA-SEM II-A-2020</td>
                                <td>E12</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="Academic-studentAdmission_profile.php"> Khan Ways</a></td>
                                <td>MBA-SEM II-A-2020</td>
                                <td>E12</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="Academic-studentAdmission_profile.php">Saleem</a></td>
                                <td>MBA-SEM II-A-2020</td>
                                <td>E12</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var show_var = document.getElementById("to_show").classList;
    function show(){
        show_var.remove("d-none");
    }
    function hide(){
        show_var.add("d-none");
    }
</script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->