<!-- header -->
<?php require 'header.php';?>
<!-- header -->

<style>
.external-event {
    display: inline-block;
    cursor: move;
    margin-bottom: 5px;
    margin-left: 5px;
}

.label {
    text-shadow: none!important;
    color: #fff;
    font-family: "Roboto", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 600;
    padding: 8px 15px;
    background: #1ebdcc;
    line-height: 1;
    text-align: center;
    border-radius: 5px;
}
.fc-day-grid-event {
    padding: 5px 1px !important;
    border: 0 !important;
    border-radius: 0 !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
    text-align: center;
}
.card-head {
    border-radius: 2px 2px 0 0;
    border-bottom: 1px dotted rgba(0, 0, 0, 0.2);
    padding: 2px;
    color: #3a405b;
    font-size: 14px;
    font-weight: 600;
    line-height: 40px;
    min-height: 40px;
}
</style>

<link href="assets/fullcalendar.css" rel="stylesheet" type="text/css" />

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
		            <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
					<li class="breadcrumb-item active" aria-current="page">Calendar</li>
				</ol>
			</nav>
		</div>

		<div class="ms-panel w-100">
			<div class="ms-panel-body">
        
				
        		<div class="row">
                	<div class="col-md-9">
                         <div class="card-box">
                             <div class="card-head">
                                 <div class="row">
                                 	<div class="col-md-8 offset-md-2">
                                 		<div class="row">
                                 			<div class="col-md-3">
                                 				<span id="eventColor"></span>Events
                                 			</div>
                                 			<div class="col-md-3">
                                 				<span id="examsColor"></span>Examination
                                 			</div>
                                 			<div class="col-md-3">
                                 				<span id="holidaysColor"></span>Holidays
                                 			</div>
                                 			<div class="col-md-3">
                                 				<span id="duesColor"></span>Dues
                                 			</div>
                                 		</div>
                                 	</div>
                                 </div>
                             </div>
                             <div class="card-body ">
                             	<div class="panel-body">
                                    <div id="calendar" class="has-toolbar"> </div>
                                </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="card-box">
                             <div class="card-head">
                                 <header>Draggable Events</header>
                             </div>
                             <div class="card-body px-0">
                             	<div id="external-events">
                                    <form class="inline-form">
                                        <input type="text" value="" class="form-control" placeholder="Event Title..." id="event_title" />
                                        <br/>
                                        <a href="javascript:;" id="event_add" class="btn btn-success deepPink-bgcolor"> Add Event </a>
                                    </form>
                                    <hr/>
                                    <div id="event_box" class="mg-bottom-10"></div>
                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline ml-2 cursor-pointer" for="drop-remove"> Remove After Drop &nbsp; &nbsp;
                                        <input type="checkbox" class="group-checkable" id="drop-remove" />
                                    </label>
                                    <hr class="visible-xs" /> 
                                </div>
                             </div>
                         </div>
                     </div>
                </div>


			</div>
		</div>
	</div>
</div>







<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



