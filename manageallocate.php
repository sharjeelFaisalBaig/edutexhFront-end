<?php require_once('header.php')?>
<style type="text/css">
    small {
    color: #9f9f9f;
    padding: 9px;
    margin-top: 43px;
    font-size: 15px;
}
li{
    padding: 28px 0px 15px 0px;
    font-size: 15px;
}

.spcard{
    background: #f3a476c2;
}
.card-body{
    height: 30vh;
    padding: 0px 26px 2px;
}
.transformtext{
   padding: 93px 20px !important;
    vertical-align: inherit;
    border-top: 1px solid #dee2e6;
    font-weight: 700;
    font-size: 23px;
    transform: rotate(-90deg);
    transform-origin: (0,0);
}
.timesheet {
    border-collapse: collapse;
    background: #e2d9d9 !important;
    border: 1px solid #e2d9d9;
}
.mysmall{
    color: white;
    padding: 9px;
    margin-top: 43px;
    font-size: 16px;
}
.mycard{
    height: 46vh;
}
</style>
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
	<div class="col-md-12">
        <div class="ms-panel w-100">
            <div class="ms-panel-body">
                <div class="">
                    <table class="table timesheet">
                        <tbody>
                        <tr>
                            <td class="transformtext">
                               Mon
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                           <td>
                                <div class="card spcard">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name="">
                                            </li>
                                            <li><small class="mysmall">08:00 AM - 09:00 AM</small></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </td>  
                        </tr>
                        <tr>
                            <td class="transformtext">
                               Tues
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card spcard">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name="">
                                            </li>
                                            <li><small class="mysmall"> 08:00 AM - 09:00 AM</small></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </td>  
                        </tr>
                        <tr>
                            <td class="transformtext">
                               Wed
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card spcard">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name="">
                                            </li>
                                            <li><small class="mysmall">08:00 AM - 09:00 AM</small></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </td>  
                        </tr>
                        <tr >
                            <td class="transformtext">
                               Thurs
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body spcard">
                                        <ul>
                                            <li><input type="checkbox" name="">
                                            </li>
                                            <li><small class="mysmall">08:00 AM - 09:00 AM</small></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </td>  
                        </tr>
                        <tr>
                            <td class="transformtext">
                               Fri
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name=""><small>08:00 AM - 09:00 AM</small>
                                            </li>
                                            <li>English</li>
                                            <li>Assadullah..</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card spcard">
                                    <div class="card-body">
                                        <ul>
                                            <li><input type="checkbox" name="">
                                            </li>
                                            <li><small class="mysmall">08:00 AM - 09:00 AM</small></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>  
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10 m-auto">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-5">Select subject and employee</h3>

                <select class="form-control">
                    <option>Social Studies</option>
                </select>
                <p class="mt-5">Drag and drop or select and assign any of the following employees into the respective slot in the timetable</p>

                <ul class="ms-list d-flex">
                  <li class="ms-list-item">
                    <label class="ms-checkbox-wrap">
                      <input type="checkbox" value="" checked=""> <i class="ms-checkbox-check"></i>
                    </label> <span> Arjumnad </span>
                  </li>
                </ul>

                <div>
                    <button class="btn btn-primary">Assign</button>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body mycard" >
                        <h3 class="">Weekly Classes</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Required</h5>
                                <h6><b>23</b></h6>
                            </div>
                            <div class="col-md-6">
                                <h5>Allocated</h5>
                                <h6><b>20</b></h6>
                            </div>
                        </div>
                        <table class="table table-hover thead-primary">
                            <thead>
                                <tr>
                                    <th>
                                        Subject
                                    </th>
                                    <th>Allocated Classes</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>English (ENG - G1)</td>
                                    <td>5 / 5</td>
                                </tr>
                                <tr>
                                    <td>English (ENG - G1)</td>
                                    <td>5 / 5</td>
                                </tr>
                                <tr>
                                    <td>English (ENG - G1)</td>
                                    <td>5 / 5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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