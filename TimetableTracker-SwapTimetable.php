<!-- header -->
<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
       <div class="col-md-12">
            <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class="fas fa-clock"></i> Time Table</h6> |  <small>Swapped Timetable</small>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Timetable</a></li>
                     <li class="breadcrumb-item"><a href="Academic-TimeTable_timetableTrack_sub.php">Timetable Tracker</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Swappped Timetable</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
        	<div class=" w-100">
            	<div id="stddiv">
               		<div class="row">
                   		<div class="col-md-4">
                    		<div class="form-group row my-3">
		                        <div class="col-md-12">
		                            <span class=""></span>
		                            <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1" checked="">
		                            <label class="form-label" for="exampleRadios1">
		                                Batch-wise
		                            </label>
		                            <span class=""></span>
		                            <input class="form-input" type="radio" name="exampleRadios" id="searchBlocked" value="option1" checked="">
		                            <label class="form-label" for="exampleRadios1">
		                                Employee-wise
		                            </label>
		                        </div>
		                    </div>
            			</div>
        			</div>
        			<div class="row">
                   		<div class="col-md-4">
                    		<div class="form-group row my-3">
		                        <div class="col-md-12">
		                        	<label>Select Batch</label>
		                           <select class="form-control " id="catagory">
			                            <option selected="">G1-A-2010</option>
			                            <option value="1">G1-B-2010</option>
			                        </select>
		                        </div>
		                    </div>
            			</div>
            			<div class="col-md-4">
                    		<div class="form-group row my-3">
		                        <div class="col-md-12">
		                        	<label>Select Date</label>
		                           <input type="date" class="form-control" name="">
		                        </div>
		                    </div>
            			</div>
        			</div>
        			<div class="row">
		                <div class="col-lg-12 my-4">
		                    <div class="">
		                        <table class="table thead-primary">
		                            <thead>
		                                <tr>
		                                	<th>Class Timing</th>
		                                    <th>Subject</th>
		                                    <th scope="col" class="border-0"></th>
		                                    <th scope="col" class="border-0"></th>
		                                </tr>
		                            </thead>
		                            <tbody class="table-bordered">
		                                <tr>
		                                    <td><div class="marginTop_x">08:00 AM - 09:00 AM</div></td>
		                                    <td class="border-0">
		                                    	<label>Department</label>
			                                    <select class="form-control " id="catagory">
						                            <option selected="">English</option>
						                            <option value="1">Math</option>
						                        </select>
						                        <div class="marginTop">
						                        	<span class="bold">Teacher status:</span>&nbsp;Available
						                        </div>
					                    	</td>
		                                    <td class="border-0">
		                                    	<label>Employee</label>
			                                    <select class="form-control " id="catagory">
						                            <option selected="">Nisaar Ahmed Siddiqui (E18)</option>
						                            <option value="1">Khalid Siddiqui</option>
						                        </select>
						                        <label class="ms-checkbox-wrap marginTop">
						                            <input type="checkbox" value="">
						                            <i class="ms-checkbox-check"></i>
						                        </label>
						                        <span>send alerts for this class change.</span>
						                    </td>
		                                    <td class="border-0">
		                                    	<label>Subject</label>
			                                    <select class="form-control " id="catagory">
						                            <option selected="">English</option>
						                            <option value="1">Math</option>
						                        </select>
						                        <a href="Swap.php" class="btn btn-primary">Swap</a>
						                        <a href="Academic-Library_ManageBookAdditionalDetails.php" class="btn btn-primary">Cancel</a>
					                    	</td>
		                                </tr>
		                            </tbody>
		                        </table>
		                    </div>
		                </div>
		            </div>
        		</div>
        	</div>
    	</div>
    </div>
</div>
<!-- Body Content Wrapper -->
<!-- footer -->
<?php require 'footer.php';?>
<!-- footer -->