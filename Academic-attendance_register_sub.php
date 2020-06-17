<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
          <li class="breadcrumb-item"><a href="Academic-attendance_sub.php">Attendance</a></li> 
          <li class="breadcrumb-item active" aria-current="page">Attendence Register</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-12">
        <div class="d-none">
            <h6>Attendance | <small>Attendence Register</small></h6>
        </div>
    </div>
    <div class="col-md-10 m-auto">
        <div class="form-group row">
            <lable class="col-md-2">Select A Batch</lable>
            <div class="col-md-4">
                <select class="form-control" id="">
                    <option selected>PG - Pink</option>
                    <option value="1">Kg-I</option>
                    <option value="2">xyz</option>
                </select>
            </div>
            <span class="col-md-6"></span>
        </div>
        <div class="form-group row">
            <lable class="col-md-2">Select Subject</lable>
            <div class="col-md-4">
                <select class="form-control" id="">
                    <option selected>Select Subject</option>
                    <option value="1">English</option>
                    <option value="2">Urdu</option>
                </select>
            </div>
            <span class="col-md-6"></span>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Sort By</label>
            <div class="col-md-2">
                <span class="ml-3"></span>
                <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1" checked>
                <label class="form-label" for="exampleRadios1">
                    Name
                </label>
                <span class="ml-3"></span>
                <input class="form-input" type="radio" name="exampleRadios" id="searchBlocked" value="option1" checked>
                <label class="form-label" for="exampleRadios1">
                    Roll No.
                </label>
            </div>
            <span class="col-md-4"></span>
            <div class="col-md-4">
                <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <label>Manual Notification</label>
                <span class="ml-3"></span>
                <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <label>Rapid Attendance</label>
            </div>
        </div>
        <hr>
        <div class="row text-center calendarCustom mb-4">
            <div class="col-md-4 text-right">
                <a href="">
                    <i class="fas fa-chevron-circle-left"></i>
                </a>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="" readonly="" name="" value="May 2020" placeholder="">
                </div>
            </div>
            <div class="col-md-4 text-left">
                <a href="">
                    <i class="fas fa-chevron-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table thead-primary table-bordered">
                <thead>
                    <tr>
                        <th width="40" rowspan="2" class="translateY-12">Name</th>
                        <th class="p-1 text-center">Fri</th>
                        <th class="p-1 text-center">Sat</th>
                        <th class="p-1 text-center">Sun</th>
                        <th class="p-1 text-center">Mon</th>
                        <th class="p-1 text-center">Tue</th>
                        <th class="p-1 text-center">Wed</th>
                        <th class="p-1 text-center">Thur</th>
                        <th class="p-1 text-center">Fri</th>
                        <th class="p-1 text-center">Sat</th>
                        <th class="p-1 text-center">Sun</th>
                        <th class="p-1 text-center">Mon</th>
                        <th class="p-1 text-center">Tue</th>
                        <th class="p-1 text-center">Wed</th>
                        <th class="p-1 text-center">Thur</th>
                        <th class="p-1 text-center">Fri</th>
                        <th class="p-1 text-center">Sat</th>
                        <th class="p-1 text-center">Sun</th>
                        <th class="p-1 text-center">Mon</th>
                        <th class="p-1 text-center">Tue</th>
                        <th class="p-1 text-center">Wed</th>
                        <th class="p-1 text-center">Thur</th>
                        <th class="p-1 text-center">Fri</th>
                        <th class="p-1 text-center">Sat</th>
                        <th class="p-1 text-center">Sun</th>
                        <th class="p-1 text-center">Mon</th>
                        <th class="p-1 text-center">Tue</th>
                        <th class="p-1 text-center">Wed</th>
                        <th class="p-1 text-center">Thur</th>
                        <th class="p-1 text-center">Fri</th>
                        <th class="p-1 text-center">Sat</th>
                        <th class="p-1 text-center">Sun</th>
                    </tr>
                    <tr>
                        <th class="p-1 text-center">1</th>
                        <th class="p-1 text-center">2</th>
                        <th class="p-1 text-center">3</th>
                        <th class="p-1 text-center">4</th>
                        <th class="p-1 text-center">5</th>
                        <th class="p-1 text-center">6</th>
                        <th class="p-1 text-center">7</th>
                        <th class="p-1 text-center">8</th>
                        <th class="p-1 text-center">9</th>
                        <th class="p-1 text-center">10</th>
                        <th class="p-1 text-center">11</th>
                        <th class="p-1 text-center">12</th>
                        <th class="p-1 text-center">13</th>
                        <th class="p-1 text-center">14</th>
                        <th class="p-1 text-center">15</th>
                        <th class="p-1 text-center">16</th>
                        <th class="p-1 text-center">17</th>
                        <th class="p-1 text-center">18</th>
                        <th class="p-1 text-center">19</th>
                        <th class="p-1 text-center">20</th>
                        <th class="p-1 text-center">21</th>
                        <th class="p-1 text-center">22</th>
                        <th class="p-1 text-center">23</th>
                        <th class="p-1 text-center">24</th>
                        <th class="p-1 text-center">25</th>
                        <th class="p-1 text-center">26</th>
                        <th class="p-1 text-center">27</th>
                        <th class="p-1 text-center">28</th>
                        <th class="p-1 text-center">29</th>
                        <th class="p-1 text-center">30</th>
                        <th class="p-1 text-center">31</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="">
                            <strong><a href="#" class="text-dark" data-toggle="modal" data-target="#modal_attendence">Sultan Durrani(E15)</a></strong>
                        </td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>

                    </tr>
                    <tr>
                        <td class="">
                            <strong><a href="#" class="text-dark" data-toggle="modal" data-target="#modal_attendence">Ahmed Aftab(E19)</a></strong>
                        </td> 
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>

                    </tr>
                    <tr>
                        <td class="">
                            <strong><a href="#"  class="text-dark" data-toggle="modal" data-target="#modal_attendence">Ahmed Aftab(E19)</a></strong>
                        </td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center translateY-20" style="min-width: 35px;">
                            <strong>X</strong>
                        </td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>
                        <td class="p-1 text-center" style="min-width: 35px;"></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_attendence" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round">Attendence For Abdul Qudoos</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-2">Reason</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="ms-checkbox-wrap">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <label>Forenoon</label>
                </div>
                <div class="col-md-4">     
                    <label class="ms-checkbox-wrap">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <label>Afternoon</label> 
                </div>
            </div>
			<div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary">Add</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->    