<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="ms-panel-header pt-0">
				<h6 class="d-md-inline"><i class="fas fa-clock"></i> Class Timing Sets</h6> |  <small>Manage Class Timing Sets</small>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Timetable</a></li>
                    <li class="breadcrumb-item"><a href="manageclasstimingset.php">Class Timing Sets</a></li>
					<li class="breadcrumb-item active" aria-current="page"> Class Timing Set</li>
				</ol>
			</nav>
		</div>
	<div id="formname" class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-body">
                <div class="row">
                    <div  class="col-md-12 mb-3">
                    <div id="attachment" class="row">
                        <div class="col-2">
                            <label for="validationCustom21">Class Timing Set Name</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="">
                        </div>
                        <div class="col-4 mr-5">
                           <button id="sub" type="button" class="btn-sm btn-success text-white mt-2"><i class="fa fa-plus"></i> Submit </button>
                           <button id="can" type="button" class="btn-sm btn-danger text-white mt-2"><i class="fa fa-times"></i> Cancel </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button id="add" type="button" class="btn-sm btn-success text-white mt-2" data-toggle="modal" data-target="#modal-1"><i class="fa fa-plus"></i> Add Class Timing </button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 offset-4">
        <div class="ms-panel w-50">
            
            <div class="">
                <div class="alert alert-warning text-center">
                    <strong>Class timing  created successfully</strong>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-12">
        <div class="ms-panel w-50">
            
            <div class="">
                <h5>Class Timing Set Name : <span>School Time Table</span><span><a class="ml-3" id="edit" href="">Edit</a></span></h5>
            </div>

        </div>
    </div>
    <div class="col-md-8 m-auto text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary">
                        <thead>
                        <tr>
                            <th scope="col">SI No.</th>
                            <th scope="col" class="text-left">Name</th>
                            <th scope="col" class="text-left">Start Time</th>
                            <th scope="col" class="text-left">End Time</th>
                            <th scope="col" class="text-center">Options</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>
                               1
                            </td>
                            <td class="text-left">Class 1</td>
                            <td class="text-left">03:00 AM</td>
                            <td class="text-left">09:00 AM</td>
                            <td class="text-center">
                                <a href="" data-toggle="modal" data-target="#modal-2">Edit</a>
                                <a class="ml-4" href="">Delete</a>
                            </td>  
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- Add Modal -->
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-1">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h3 class="modal-title has-icon ms-icon-round ">Create Class Timing</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <form class="needs-validation" novalidate>
                    	<div class="form-row">
                    		<div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Name</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom18" placeholder="MMSC" value="MMSC" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    		</div>
                            <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Start Time</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="time" class="form-control" name="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> End Time</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="time" class="form-control" name="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>      
                    	</div>
                      </div>

                      <div class="modal-footer">
                        
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success shadow-none"><i class="fa fa-save"></i> Submit</button>
                      </div>

                    </div>
                  </div>
                </div>

<!-- Edit Modal -->
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h3 class="modal-title has-icon ms-icon-round ">Edit Class Timing</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Name</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom18" placeholder="MMSC" value="MMSC" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Start Time</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="time" class="form-control" name="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> End Time</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="time" class="form-control" name="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>      
                        </div>
                      </div>

                      <div class="modal-footer">
                        
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success shadow-none"><i class="fa fa-save"></i> Submit</button>
                      </div>

                    </div>
                  </div>
                </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#sub').click(function(){
            $('#formname').hide();
        });

        $('#edit').click(function(){
            $('#formname').show();
        });

    });
</script>
    <?php include_once('footer.php')?>