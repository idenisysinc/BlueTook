
	<?php include('header.php') ?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<?php include('partner-main-sidebar.php') ?>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4 class="font-weight-semibold"><i class="icon-user-plus mr-2"></i>My Profile</h4>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">My Profile</span>
						</div>
					</div>

				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<label>Profile Completion Progress</label>
								<div class="progress mb-4">
									<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%">
										<span class="sr-only">50% Complete</span>
									</div>
								</div>
								<form action="#">
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Profile Image</label>
										<div class="col-lg-9">
											<div class="card-img-actions d-inline-block">
												<img class="img-fluid rounded-circle" src="assets/images/placeholders/placeholder.jpg" width="50" height="50" alt="">
												<div class="card-img-actions-overlay card-img rounded-circle">
													<a href="" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" title="Profile" onclick="document.getElementById('ImageFileInput').click();">
														<i class="icon-link"></i>
														<input id="ImageFileInput" type="file" name="name" class="sr-only" />
													</a>
												</div>
											</div>
											<!-- <input type="file" class="form-control-uniform" data-fouc> -->
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Any Award Received</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Gender <span class="text-danger">*</span></label>
										<div class="col-lg-9">
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender" data-fouc required>
													Male
												</label>
											</div>
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender" data-fouc>
													Female
												</label>
											</div>
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender" data-fouc>
													Others
												</label>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Date Of Birth</label>
										<div class="col-lg-9">
											<input type="date" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Email Address <span class="text-danger">*</span></label>
										<div class="col-lg-9">
											<input type="email" class="form-control" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Website link</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Facebook URL</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Instagram URL</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Youtube/Vimeo URL</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Partner Type</label>
										<div class="col-lg-9">
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="partnerType" checked data-fouc>
													Individual
												</label>
											</div>
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="partnerType" data-fouc>
													Business
												</label>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Aadhaar Number</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Aadhaar Upload</label>
										<div class="col-lg-9">
											<input type="file" class="form-control-uniform" data-fouc>
										</div>
									</div>
									<!-- Dropdown with max height -->
									<div class="form-group row">
										<label class="col-form-label col-lg-3" required>Category <span class="text-danger">*</span></label>
										<div class="col-lg-9">
											<!-- <select class="form-control multiselect-max-height" multiple="multiple" data-fouc required>
												<optgroup label="Photographers">
													<option value="Wedding">Wedding  Events and Gatherings </option>
													<option value="Kids">Kids and Family </option>
													<option value="Maternity">Maternity</option>
													<option value="Product">Product</option>
													<option value="Fashion">Fashion</option>
												</optgroup>
												<optgroup label="Vediographers">
													<option value="General">General</option>
													<option value="Drone">Drone</option>
												</optgroup>
												<optgroup label="Editors">
													<option value="General2">General</option>
												</optgroup>
												<optgroup label="Makeup Artists">
													<option value="General3">General</option>
												</optgroup>
												<optgroup label="Models">
													<option value="Male">Male</option>
													<option value="Female">Female</option>
													<option value="Kids2">Kids</option>
												</optgroup>
											</select> -->
											<!-- Photographers -->
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" id="more1" class="form-input-styled" data-fouc value="Photographers">
													Photographers
												</label>
											</div>
											<div id="moreField1" class="pl-3">
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Wedding  Events and Gatherings
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Kids and Family
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Maternity
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Product
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Fashion
													</label>
												</div>
											</div>
											<!-- /Photographers -->
											<!-- Vediographers -->
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" id="more2" class="form-input-styled" data-fouc value="Photographers">
													Vediographers
												</label>
											</div>
											<div id="moreField2" class="pl-3">
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														General
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Drone
													</label>
												</div>
											</div>
											<!-- /Vediographers -->
											<!-- Editors -->
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" id="more3" class="form-input-styled" data-fouc value="Photographers">
													Editors
												</label>
											</div>
											<div id="moreField3" class="pl-3">
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														General
													</label>
												</div>
											</div>
											<!-- /Editors -->
											<!-- Makeup Artists -->
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" id="more4" class="form-input-styled" data-fouc value="Photographers">
													Makeup Artists
												</label>
											</div>
											<div id="moreField4" class="pl-3">
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														General
													</label>
												</div>
											</div>
											<!-- /Makeup Artists -->
											<!-- Models -->
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" id="more5" class="form-input-styled" data-fouc value="Photographers">
													Models
												</label>
											</div>
											<div id="moreField5" class="pl-3">
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Male
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Female
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Kids
													</label>
												</div>
											</div>
											<!-- /Models -->
										</div>
									</div>
									<!-- /dropdown with max height -->
									<div class="form-group row">
										<label class="col-form-label col-lg-3">About You</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Pricing</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-prepend">
													<span class="input-group-text">Rs.</span>
												</span>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-3">Reviews & Recommendations</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="text-right">
										<button type="submit" class="btn bg-indigo-400">Submit <i class="icon-circle-right2 ml-2"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /content area -->


			<!-- Footer -->
			<?php include('footer.php') ?>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	<!-- <script>
		function checkToggle() {
		  var checkBox = document.getElementByClass("more");
		  var text = document.getElementByClass("moreField");
		  if (checkBox.checked == true){
		    text.style.display = "block";
		  } else {
		     text.style.display = "none";
		  }
		}
	</script> -->
	<script>
		$(document).ready(function(){
		    $('#more1').click(function(){
		        $("#moreField1").slideToggle();
		    });
		    $('#more2').click(function(){
		        $("#moreField2").slideToggle();
		    });
		    $('#more3').click(function(){
		        $("#moreField3").slideToggle();
		    });
		    $('#more4').click(function(){
		        $("#moreField4").slideToggle();
		    });
		    $('#more5').click(function(){
		        $("#moreField5").slideToggle();
		    });
		});
	</script>
</body>
</html>