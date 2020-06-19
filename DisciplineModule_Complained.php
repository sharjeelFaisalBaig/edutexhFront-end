<!-- header -->
<?php require 'header.php';?>
<!-- header -->
<!-- Body Content Wrapper -->
<style>
    .inputtype{
        height:30px;
    }
    .border{
        border-radius:10px;
    }
    .bg_cstm{
        background-color:rgb(247, 241, 223);
        
    }
    .textarea{
        margin-left:-20px;
    }
    .textarea1{
        margin-left:-5px;
    }
    .button{
        margin-left:7px;
    }
</style>
<div class="ms-content-wrapper container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="DisciplineModule.php">Discipline Module</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Complains</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label class="m-0 ml-3"><b>Political Sloghans</b></label><br>
                            <label class="ml-3">Posted On 14 May 2020</label>
                        </div>
                        <div class="col-md-3">
                            <label class="ml-3">Status</label><label>:<b>Pending</b></label><br>
                            <label class="ml-3">Trial Date</label><label>:<b>19-5-2020</b></label>
                        </div>
                        <div class="col-md-3 ml-3 float-right">
                        <a href="Discipline Module_New.php" class="width70 m-0 float-md-right btn btn-primary">Action</a><br><br>
                        <a href="#" data-toggle="modal" data-target="#modalonclose" class=" width70 m-0 float-md-right btn btn-primary">Close</a>
                        </div>
                    </div>
            <div class="col-md-12 my-5">
                <div class="table-responsive">
                    <table class="table thead-primary table-bordered">
                        <thead>
                            <tr>
                                <th>Complained by</th>
                                <th>Complained Against</th>
                                <th>Jury</th>
                                <th>Responsible Officials</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p class="m-0"><span class="text-muted">Employees</span></br>
                                    <strong>Khizer Hussain - E10</strong></br>
                                    <strong>Muhammad Saleem - E2</strong></p>
                                </td>
                                <td>
                                    <p class="m-0"><span class="text-muted">Student</span></br>
                                    <strong>Khizer Hussain - E10</strong></br>
                                    <strong>Muhammad Saleem - E2</strong></br>
                                    <strong>Iqra S-53</strong></p></td>
                                <td>
                                <p class="m-0"></br><strong><b>Rashid Ahmed - E10</strong></br>
                                    <strong><b>Khan Ways - E2</strong></p>
                                </td>
                                <td>
                                    <p class="m-0"><span class="text-muted">Student</span></br>
                                    <strong><b>Muhammad S-53</strong></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                    <div class="col-md-12">
                        <h6>Add Your Comment</h6>
                        <div class="row input-group m-0">
                            <label class="col-md-12 textarea"><textarea class="form-control float-left w-75" id="validationCustom03" rows="2"></textarea><button type="button" class="btn btn-primary width70 button">Post</button></label>
                        </div>
                        <div class="col-md-12 textarea1 bg_cstm">
                            <div class="col-md-2">
                                <i>Comments:</i> 
                            </div>
                            <div class="col-md-12">
                                <h6 class="text-success mt-3 m-0">Arslan Ali:</h6>
                                <label class="m-0">I am not involved in this case</label><br>
                                <i>14 May 2020 10:58pm</i><label class="float-right"><a href="">Cancel</a></label> 
                            </div>
                            <div class="col-md-12">
                            <div class="row input-group m-0">
                            <label class="col-md-12 textarea"><textarea class="form-control float-left w-75" id="validationCustom03" rows="2"></textarea><button type="button" class="btn btn-primary width70 button">Post</button></label>
                        </div>
                        </div>
                        
                    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="modalonclose" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Close</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
            <div class="form-group row">
        <div class="col-md-2">
            <label for="validationCustom18" class="mt-1"><b>Verdict</b></label>    
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control inputtype">        
        </div>
        </div>
        <div class="form-group row">
        <div class="col-md-2">
            <label for="validationCustom18" class="mt-1"><b>Comments</b></label>    
        </div>
        <div class="col-md-4">
            
        <textarea name="" id="input" class="form-control input type" rows="3"></textarea>        
        </div>
        </div>
        <div class="form-group row">
        <div class="col-md-2">
            <label for="validationCustom18" class="mt-1"><b>Convicted</b></label>    
        </div>
        <div class="col-md-4 md-0">
            <div class="border p-2 border">
            <label class="d-inline">SELECT: <a href="" class="d-inline">ALL</a>,<a href="" class="d-inline">None</a></label><br>
            <label class="md-0"><input type="checkbox"/>Arslan Ali - S30</label><br>
            <label class="md-0"><input type="checkbox"/>Abdul Qudoos - S32</label><br>
            <label class="md-0"><input type="checkbox"/>Iqra - S53</label>
            </div>          
        </div>
        </div>
        <div class="form-group row mt-4">
        <div class="col-md-2">    
        </div>
        <div class="col-md-4">
        <a href="#" class="btn btn-primary m-auto width70">Save</a>
        <a href="#" class="btn btn-primary m-auto width70">Close</a>          
        </div>
        </div>
        
    </div>
			<div class="modal-footer">
				<div class="row bg_cstm">
                    <div class="col-md-2">
                        <i>Actions :</i> 
                    </div>
                    <span class="col-md-12"></span>
                    <div class="col-md-10">
                        <h6 class="text-success">Rashid Minhas<p class="text-muted float-right">Delete</p></h6>
                         
                    </div>
                    <!-- <div class="col-md-2 offset-md-8">
                        <p class="text-muted">Delete</p>
                    </div> -->
                    <div class="col-md-4">
                        <h6>Personal Hearing</h6>
                    </div>
                    <span class="col-md-12"></span>
                    <div class="col-md-12">
                    <i class="text-muted">14 May 2020 06:06pm</i><br>
                    <span>Pesonal bearing has been called byjury dated 23-05-2020 at room no.02 academic block-I, all the concerned(complained by and complained against)are requested to come on time.</span><br>
                    <span>The convicts are:<br>
                    Arslan Ali - S30<br>
                    Abdul Qudoos - S52<br>
                    Iqra - S53</span><hr>
                    </div>
                </div>
			</div>

		</div>
	</div>
</div>
<!-- footer -->
<?php require 'footer.php';?>