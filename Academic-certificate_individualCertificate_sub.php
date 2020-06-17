<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
    .hieght_cstm{
        height: 30%;
        overflow-y: scroll;
    }
    .border_cstm{
        border:2px dashed black;
    }
    .heading_preview_cstm{
        color:rgb(66, 206, 245);
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
          <li class="breadcrumb-item"><a href="Academic-certificate_sub.php">Certificates</a></li> 
          <li class="breadcrumb-item active" aria-current="page">Create Individual Certificate</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-12">
        <div class="d-none">
            <h6>Certificates | <small>Create Individual Certificate</small></h6>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <label class="col-md-12 my-3">Select User Type</label>
        <div class="form-group row">
            <div class="col-md-6">
                <select class="form-control" id="">
                    <option selected>Select User</option>
                    <option value="1">Employee</option>
                    <option value="2">Student</option>
                </select>
            </div>     
            <span class="col-md-6"></span>
        </div>
        <label class="col-md-12 my-3">Certificate Templates</label>
        <div class="form-group row">
            <div class="col-md-6">
                <select class="form-control" id="">
                    <option selected>Character Certificate</option>
                    <option value="1">Clearence Certificate</option>
                    <option value="2">efg</option>
                    <option value="3">xyz</option>
                </select>
            </div>     
            <span class="col-md-6"></span>
        </div>
        <label class="col-md-12 my-3">Select Employee</label>
        <div class="form-group row">
            <div class="col-md-6">
                <select class="form-control" id="">
                    <option selected>Khan Ways</option>
                    <option value="1">abc</option>
                    <option value="2">efg</option>
                </select>
            </div>     
            <span class="col-md-6"></span>
        </div>
        <label class="col-md-12 my-3">Certificate Templates</label>
        <div class="form-group row">
            <div class="col-md-6">
                <select class="form-control" id="">
                    <option selected>Character Certificate</option>
                    <option value="1">Clearence Certificate</option>
                    <option value="2">efg</option>
                    <option value="3">xyz</option>
                </select>
            </div>     
            <span class="col-md-6"></span>
        </div>
        <div class="form-group row">
            <div class="col-md-4">
                <label>Select Class</label>
                <select class="form-control" id="">
                    <option selected>Play Group</option>
                    <option value="1">abc</option>
                    <option value="2">efg</option>
                </select>    
            </div>
            <div class="col-md-4">
                <label>Select Batch</label>
                <select class="form-control" id="">
                    <option selected>Pink</option>
                    <option value="1">abc</option>
                    <option value="2">efg</option>
                </select>    
            </div>
            <div class="col-md-4">
                <label>Select Student</label>
                <select class="form-control" id="">
                    <option selected>Hamza</option>
                    <option value="1">abc</option>
                    <option value="2">efg</option>
                </select>    
            </div>
        </div>
        <label class="col-md-12 my-3">Serial No.</label>
        <div class="form-group row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Enter Serial No.">
            </div>     
            <span class="col-md-6"></span>
        </div>
        <div class="border border_cstm my-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h4 class="heading_preview_cstm"><i>Mehran Modal School And College Pano-Akil</i></h4>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <h4 class="heading_preview_cstm"><i>Character Certificate</i></h4>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="row my-3">
                <div class="col-md-4"><p>{{Full_Name}}</p><p>{{Father_Name}}</p></div>
                <div class="col-md-2"></div>
                <div class="col-md-4"><p>{{Gender}}</p><p>{{Admission_No.}}</p></div>
                <div class="col-md-2"></div>
            </div>
            <div class="row my-3">
                <div class="col-md-5"></div>
                <div class="col-md-3"><h5>AFFIDAVIT</h5></div>                
                <div class="col-md-4"></div>
            </div>
            <div class="col-md-12">
                <p>I, S/O {{Father_Name} Resident Of {{Address}} Do Here BY Solemny Affirms And Declare As Under :-</p>
            </div>
            <div class="col-md-12">
                <p>1. That The Deponent Is Fully Conversant With The Contents Of Affidavit </p>
            </div>
            <div class="col-md-12">
                <p>2. That____________S/O____________NIC No._____________Is My Real______________And Was Resided At</p>
            </div>
            <div class="col-md-12">
                <p>________________From______________To____________And He/She Is Alive And Presently Residing Abroad</p>
            </div>
            <div class="col-md-12">
                <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sit architecto praesentium veniam ratione illo, corrupti doloribus quidem temporibus necessitatibus.</p>
            </div>
            <div class="col-md-12">
                <p>4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sit architecto praesentium veniam ratione illo, corrupti doloribus quidem temporibus necessitatibus.</p>
            </div>
            <div class="col-md-12">
                <p>5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sit architecto praesentium veniam ratione illo, corrupti doloribus quidem temporibus necessitatibus.</p>
            </div>
            <div class="col-md-12">
                <p>6. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nostrum velit a nisi enim laboriosam blanditiis dicta. Deleniti error similique laudantium ratione, et, ipsum, tempora iusto voluptatem adipisci placeat id?</p>
            </div>
            <div class="col-md-12">
                <p>Deponent________________Mr______________S/O____________NIC</p>
            </div>
            <div class="col-md-12">
                <p>Number Of________________Passport______________(Copy Attached)</p>
            </div>
            <div class="col-md-12">
                <p>Witness # 01 :-______________________Witness # 02 :-_____________________</p>
            </div>
            <div class="col-md-12">
                <p>NIC No._____________________NIC No._____________________(Copy Attached) (Copy Attached)</p>
            </div>
        </div>
        <div class="col-md-4">
            <a href="#" class="btn btn-primary">Generate Certificate</a>
        </div>
    </div>
</div>    
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->    