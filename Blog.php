

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-7">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
					<li class="breadcrumb-item active" aria-current="page">Blog</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-5 text-md-right">
			<a href="My_Blog.php" class="btn btn-primary width70 m-auto" type="submit">My Blog</a>
			<a href="#" class="btn btn-primary width70 m-auto" data-toggle="modal" data-target="#modal-2" type="submit">Activities</a>	
			<a href="#" onclick="show_searchBar()" class="btn btn-primary width70 m-auto" type="submit">Search</a>
			<a href="" class="btn btn-primary width70 m-auto" data-toggle="modal" data-target="#modal-1" type="submit"> Settings</a>
		</div>

		<div class="col-md-10 m-auto">
			<div class="ms-panel-header"></div>
			<div class="ms-panel-body">
				<div class="row">
					<div class="col-md-3 mb-4">
						<select class="form-control" id="validationCustom25" required="">
							<option value="">Latest</option>
						</select>
					</div>
					<div class="col-md-9">
						<div class="form-group row show_search_bar d-none">
							<label class="col-sm-2 col-form-label">Search</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="search_blogs" placeholder="Search Blogs !">
						</div>
						</div>	
					</div>
					<div class="col-md-12">
						<div class="table-responsive">
							<table id="data-table-4" class="ms-card table w-100 thead-primary  table-striped">
								<tbody>
									<tr>
										<td class="width390"><strong>Science</strong></td>
										<td>Muhammad Saleem bi...</td>
										<td>Muhammad <br> Sufyan ...</td>
										<td>08 May 2020</td>
										<td class="text-right">
											<td><i class="fas fa-star text-warning font-10"></i>1</td>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
	</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">New Post </h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation mb-2" novalidate>
					<div class="form-row">
						<div class="col-md-6">
							<label for="validationCustom03">Title</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="" required>
								<div class="invalid-feedback">This Field is Required</div>
							</div>
						</div>
						<div class="col-md-9">
							<label for="validationCustom03">Body</label>
							<div class="input-group">
								<textarea class="form-control" id="validationCustom03" rows="9" placeholder=""></textarea>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" type="submit">Publish</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Save as Draft</button>
			</div>

		</div>
	</div>
</div>







<div class="modal fade" tabindex="-1" id="modal-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Settings</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>

			<div class="modal-body">

			<div class="form-group row">
			<div class="col-md-2"></div>
      			<label class="col-sm-2 col-form-label">Name :</label>
    		<div class="col-sm-6">
      			<input type="text" class="form-control" id="jobTitle" placeholder="Enter Blogger's Name">
    		</div>
			<div class="col-md-2"></div>
			</div>

			<div class="form-group row">
			<div class="col-md-2"></div>
      			<label class="col-sm-3 col-form-label">In Published </label>
    		<div class="col-sm-5">
				<label class="ms-checkbox-wrap">
				<input type="checkbox" value="" data-toggle="modal" data-target="#modal-3">
				<i class="ms-checkbox-check"></i>
    		</div>
			<div class="col-md-2"></div>
			</div>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" data-dismiss="modal">Save</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">CLose</button>
			</div>

		</div>
	</div>
</div>






<div class="modal fade" tabindex="-1" id="modal-2" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Activities</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>

			<div class="modal-body">

			<div class="col-md-12">
				<h6><b>Muddassir Arshad</b>Commented On Your Post <h6 class="text-success">Very Nice Post</h6>     <i>8 June 2020</i></h6>
			</div>		
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal">CLose</button>
			</div>

		</div>
	</div>
</div>

<script>
	function show_searchBar(){
	 var show_searchBarVar = document.querySelector(".show_search_bar").classList
	 show_searchBarVar.toggle("d-none");	
	}
</script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



