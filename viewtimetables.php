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
        <div class="col-md-10 my-4 ms-panel-body">
            <div class="form-group row my-3">
                <label class="col-sm-3 col-form-label">Timetable</label>
                <div class="col-sm-4">
                    <select class="form-control">
                        <option>01 May 2020-31 May 2020G1-A-2010</option>
                    </select>
                </div>
            </div>
            <div class="form-group row my-3">
                <label class="col-sm-3 col-form-label">Batch</label>
                <div class="col-sm-4">
                    <select class="form-control">
                        <option>G1-A-2010</option>
                    </select>
                </div>
            </div>
        </div>
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
                            <td class="transformtext">
                               Break <br><p>30 Min</p>
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
                            <td class="transformtext">
                               Break <br><p>30 Min</p>
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
                            <td class="transformtext">
                               Break <br><p>30 Min</p>
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
                            <td class="transformtext">
                               Break <br><p>30 Min</p>
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
                            <td class="transformtext">
                               Break <br><p>30 Min</p>
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

<?php include_once('footer.php')?>