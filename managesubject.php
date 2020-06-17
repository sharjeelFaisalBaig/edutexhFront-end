<?php include_once('header.php')?>
    <style>
        label{
            display: inline-block;
            margin-bottom: .5rem;
            margin-top: .5rem;
        }
    </style>
<div class="ms-content-wrapper">

	<div class="row">
		<div class="col-md-7">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Subject </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-5 text-right">
            <a href="#" class="btn btn-primary m-auto">Subject Center</a>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel ms-panel-fh">

                  <div class="ms-panel-body clearfix">
                    <div class="row">
                        <div class="col-lg-4 m-auto">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Course:</label>
                                </div>
                                <div class="col-md-8">
                                    <form>
                                        <div class="form-group">
                                            <!-- <label>Select a Course:</label> -->
                                            <select class="form-control ">
                                                <option>Grade 1</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m-auto">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="">Batch:</label>
                                </div>
                                <div class="col-md-8">
                                    <form>
                                        <div class="form-group">
                                            <!-- <label>Select a Course:</label> -->
                                            <select class="form-control ">
                                                <option>G2 A2020</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                            <thead>
                                <tr>
                                    <th>Religious Studies &nbsp;<i><p class="text-primary d-inline-block m-0">Elective Group</p></i></th>

                                    <th class="text-right cursor-pointer"><a href=""data-toggle="modal" class="text-white"  data-target=".bd-example-modal-lg"> Settings</a></th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Islamiat <span class="text-disabled">(IST)</span> <i class=""><p class="text-white d-inline-block m-0">Subject</p></i></td>
                                    <td class="text-right">
                                        <a href="#"  data-toggle="modal" data-target="#modal-2" > Edit | </a>
                                        <a href="#" data-toggle="modal" data-target="#modal-3" > Assign student &nbsp;</a>
                                    </td>
                                    <td>
                                        <a href="#" > Delete&nbsp; </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ethics <span class="text-disabled">(For Non Muslims)(ETH)</span>  <i class=""><p class="text-white d-inline-block m-0">Subject</p></i></td>
                                    <td class="text-right">
                                        <a href="#"  data-toggle="modal" data-target="#modal-2" > Edit | </a>
                                        <a href="#"  data-toggle="modal" data-target="#modal-3" > Assign student &nbsp;</a>
                                    </td>
                                    <td>
                                        <a href="#" > Delete &nbsp;</a>
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


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">
                Setting - Religious Studies</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <p>Elective group name</p>
                            <p>Religious Studies</p>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <p>No of weekly classes</p>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control" placeholder="5" name="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <p>Preferred start time</p>
                                </div>
                                <div class="col-md-4">
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control ">
                                                <option>Within</option>
                                                <option>No Preference</option>
                                                <option>Before</option>
                                                <option>After</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-2">
                                            From:
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    Hours
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control ">
                                                            <option>Hr</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    Minutes
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control ">
                                                            <option>Min</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            To:
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    Hours
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control ">
                                                            <option>Hr</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    Minutes
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control ">
                                                            <option>Min</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <p>Consecutive Classes</p>
                                </div>
                                <div class="col-md-7">
                                    <div class="custom-control custom-radio custom-control mt-3">
                                        <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                                        <label class="custom-control-label" for="customRadio">Allow consecutive</label><br>
                                        <small>Subject wil be scheduled as consecutive classes based on class availability.</small>
                                    </div>
                                    <div class="custom-control custom-radio custom-control mt-3">
                                        <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                                        <label class="custom-control-label" for="customRadio2">Strictly consecutive</label><br>
                                        <small>Subject wil be scheduled as consecutive classes. If consecutive classes are not possible, timetable auto collection will fail.</small>
                                    </div>
                                    <div class="custom-control custom-radio custom-control mt-3">
                                        <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
                                        <label class="custom-control-label" for="customRadio3">No preference</label><br>
                                        <small>Subject may or may not be scheduled as consecutive classes.</small>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none" type="submit">Save Setting</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round "> 
                    Assign Student
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-disabled">Batch</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-primary"> 
                                    <strong>:&nbsp; A 2020</strong>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-disabled">Elective Group</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-primary"> 
                                    <strong>:&nbsp; Religious Studies</strong>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-disabled">Subject</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-primary"> 
                                    <strong>:&nbsp; Islamiat</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th class="text-right">
                                            <a href="">Assign All</a>&nbsp;&nbsp;
                                            <a href="">Remove All</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Amjad Khan</td>
                                        <td class="text-right">Remove</td>
                                    </tr>
                                    <tr>
                                        <td>Arsalan Ali</td>
                                        <td class="text-right">Remove</td>
                                    </tr>
                                    <tr>
                                        <td>Jamshed Khan</td>
                                        <td class="text-right">Remove</td>
                                    </tr>
                                    <tr>
                                        <td>Majid Khan</td>
                                        <td class="text-right">Remove</td>
                                    </tr>
                                    <tr>
                                        <td>Muhammad Arshad (-)</td>
                                        <td class="text-right">Assign</td>
                                    </tr>
                                    <tr>
                                        <td>Muhammad Kaleem (-)</td>
                                        <td class="text-right">Assign</td>
                                    </tr>
                                    <tr>
                                        <td>Ramzan Ahmed (-)</td>
                                        <td class="text-right">Assign</td>
                                    </tr>
                                    <tr>
                                        <td>Zaheer Anwar (-)</td>
                                        <td class="text-right">Assign</td>
                                    </tr>
                                    <tr>
                                        <td>Zeeshan Khan (-)</td>
                                        <td class="text-right">Assign</td>
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
<?php include_once('footer.php')?>