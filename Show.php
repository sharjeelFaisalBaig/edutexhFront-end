<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<style>
    .text1{
        height:30px;
        border-radius:20px;
    }




</style>
<div class="ms-content-wrapper">
        <div class="">
            <div class="row">
                    <div class="col-md-8 mt-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pl-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="ApplicantRegistration.php">Applicant Registration</a></li>
                                <li class="breadcrumb-item"><a href="PinGroups.php">Pin Group</a></li>
                                <li class="breadcrumb-item active" aria-current="page">MBA(2.5 Year Programs)</li>
                            </ol>
                        </nav>
                    </div>
        </div>
        </div>
    <div class="row">
    <div class="col-md-8 m-md-auto">
    <div class="row">
                    <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="alert alert-warning text-center my-4">
                                <strong>Pin numbers has been updated successfully</strong>
                            </div>
                        </div>      
                    <div class="col-md-2"></div> 
            </div>

    <div class="row mt-2">
        <div class="col-md-2 mt-1">
            <label class="text-bolder text-muted">Search</label>
        </div>
        <div class="col-md-4">
                    <div class="input-group">
                        <input class="form-control text1" type="text" name="" placeholder="">
                    </div>
        </div>
        <div class="col-md-4 mt-1">
            <input type="radio" name="1" class="ml-2"><label class="ml-1">Active</label>
            <input type="radio" name="1" class="ml-2"><label class="ml-1">Inactive</label>
            <input type="radio" name="1" class="ml-2"><label class="ml-1">Registered</label>
        </div>
    </div>

    <div class="row">
    <div class="table-responsive mt-5">
                <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">Pin Number</th>
                            <th scope="col">Active</th>
                            <th scope="col">Registered</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><label class="m-0">201234548632</label></td>
                        <td><label class="m-0">Inactive</label></td>
                        <td><label class="m-0">Not Registered</label></td>
                        <td><label class="m-0"><a href="">Activate</a></label></td>
                        </tr>
                        <tr>
                        <td><label class="m-0">123465743212</label></td>
                        <td><label class="m-0">Inactive</label></td>
                        <td><label class="m-0">Not Registered</label></td>
                        <td><label class="m-0"><a href="">Deactivate</a></label></td>
                        </tr>
                        <tr>
                        <td><label class="m-0">657432138456</label></td>
                        <td><label class="m-0">Active</label></td>
                        <td><label class="m-0">Not Registered</label></td>
                        <td><label class="m-0"><a href="">Deactivate</a></label></td>
                        </tr>
                        <tr>
                        <td><label class="m-0">134576543128</label></td>
                        <td><label class="m-0">Active</label></td>
                        <td><label class="m-0">Not Registered</label></td>
                        <td><label class="m-0"><a href="">Deactivate</a></label></td>
                        </tr>
                        <tr>
                        <td><label class="m-0">124567543212</label></td>
                        <td><label class="m-0">Active</label></td>
                        <td><label class="m-0">Not Registered</label></td>
                        <td><label class="m-0"><a href="">Deactivate</a></label></td>
                        </tr>
                        <tr>
                        <td><label class="m-0">123465473212</label></td>
                        <td><label class="m-0">Active</label></td>
                        <td><label class="m-0">Not Registered</label></td>
                        <td><label class="m-0"><a href="">Deactivate</a></label></td>
                        </tr>
                    </tbody>
                    </table>                
        </div>
    </div>

    </div>
    
    
    
    
    
    </div>
    </div>
</div>