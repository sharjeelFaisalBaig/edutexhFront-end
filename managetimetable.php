<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="ms-panel-header pt-0">
				<h6 class="d-md-inline"><i class="fas fa-clock"></i> Time Table</h6> |  <small>Manage Timetables</small>
				<button class="btn btn-success float-md-right m-auto" data-toggle="modal" data-target="#modal-1">Create Timetable</button>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Timetable</a></li>
					<li class="breadcrumb-item active" aria-current="page"> Manage Timetable</li>
				</ol>
			</nav>
		</div>
	<div class="col-md-8 offset-4">
		<div class="ms-panel w-50">
			
			<div class="">
                <div class="alert alert-warning text-center">
                    <strong>Timetable structure created from 01 May 2020 - 31 May 2020</strong>
                </div>
			</div>

		</div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="ms-panel w-100">
          <div class="">
            <div>

                <div class="dropdown float-right">
                   <select class="form-control">
                       <option>Active Timetables</option>
                   </select>
                </div>
            </div>
        </div>
        <div class="">
            <div>

                <div class="dropdown float-left">
                   <h5>Manage Timetables</h5>
                </div>
            </div>
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
                            <th scope="col">Active Timetables</th>
                            <th scope="col" class="text-left">Allocation Status</th>
                            <th scope="col" class="text-center"></th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>
                               01 May 2020 - 31 May 2020
                            </td>
                            <td class="text-left">Not allocated</td>
                            <td class="text-center">
                            	<a href="timeallocation.php"> Timetable allocation</a>
                            	<a class="ml-4" data-toggle="modal" data-target="#modal-2" href="">Edit</a>
                            </td>  
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
                            <div class="col-3"> <label for="validationCustom18"> Start Date</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> End Date</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="">
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
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-1">
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
                            <div class="col-3"> <label for="validationCustom18"> Start Date</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> End Date</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="">
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

    <?php include_once('footer.php')?>