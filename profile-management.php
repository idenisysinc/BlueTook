
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
												<optgroup label="Videographers">
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
												<button type="button" class="btn bg-indigo-400" data-toggle="modal" data-target="#modal_full"><i class="icon-upload mr-2"></i> Upload</button>
											</div>
											<!-- /Photographers -->
											<!-- Videographers -->
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" id="more2" class="form-input-styled" data-fouc value="Photographers">
													Videographers
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
												<button type="button" class="btn bg-indigo-400" data-toggle="modal" data-target="#modal_full"><i class="icon-upload mr-2"></i> Upload</button>
											</div>
											<!-- /Videographers -->
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
												<button type="button" class="btn bg-indigo-400" data-toggle="modal" data-target="#modal_full"><i class="icon-upload mr-2"></i> Upload</button>
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
												<button type="button" class="btn bg-indigo-400" data-toggle="modal" data-target="#modal_full"><i class="icon-upload mr-2"></i> Upload</button>
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
												<button type="button" class="btn bg-indigo-400" data-toggle="modal" data-target="#modal_full"><i class="icon-upload mr-2"></i> Upload</button>
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
											<div class="row">
												<div class="col-lg-3">
													<input type="text" class="form-control" placeholder="Description">
												</div>
												<div class="col-lg-2">
													<input type="text" class="form-control" placeholder="Rate">
												</div>
												<div class="col-lg-2">
													<!-- <select data-placeholder="Rate Type" class="form-control select" data-fouc>
														<option></option>
														<option value="AL">Per Hour</option>
														<option value="IA">Per Day</option>
														<option value="IA">Others</option>
													</select> -->
													<select class="form-control rate-type">
						                                <option value="" disabled selected>Rate Type</option>
						                                <option value="opt2">Per Hour</option>
						                                <option value="opt3">Per Day</option>
						                                <option value="opt4">Others</option>
					                            	</select>
												</div>
												<div class="col-lg-3">
													<input type="text" class="form-control" placeholder="Note">
												</div>
												<div class="col-lg-2 d-flex align-items-center">
							                		<a href="#" class="list-icons-item mr-2">
							                			<i class="icon-plus-circle2"></i>
						                			</a>
							                		<a href="#" class="list-icons-item">
							                			<i class="icon-trash"></i>
						                			</a>
												</div>
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
	<!-- Full width modal -->
	<div id="modal_full" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-full">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title">Featured Image</h1>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					<ul class="nav nav-tabs">
						<li class="nav-item"><a href="#basic-tab1" class="nav-link active" data-toggle="tab">Upload Files</a></li>
						<li class="nav-item"><a href="#basic-tab2" class="nav-link" data-toggle="tab">Media Library</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane fade show active" id="basic-tab1">
							<form action="#">
								<div class="form-group row">
									<label class="col-lg-2 col-form-label font-weight-semibold">Multiple file upload:</label>
									<div class="col-lg-10">
										<input type="file" class="file-input upload-file" multiple="multiple" data-fouc>
									</div>
								</div>
							</form>
						</div>

						<div class="tab-pane fade" id="basic-tab2">
							<div class="row">
								<div class="col-lg-8">
									<div class="card-body">
										<form action="#">
											<div class="clearfix">
												<div class="form-group form-group-feedback form-group-feedback-left w-lg-50 float-lg-right">
													<input type="text" class="form-control uname" placeholder="Search media items">
													<div class="form-control-feedback">
														<i class="icon-search4 text-muted"></i>
													</div>
												</div>
											</div>
										</form>
										<!-- media section -->
										<div class="row">
											<div class="col-sm-3">
												<a href="#">
													<div class="card media-lib-img">
														<div class="card-img-actions">
															<img class="card-img-top img-fluid" src="assets/images/placeholders/placeholder.jpg" alt="">
															<div class="card-img-top position-absolute text-right slct-media">
																<div class="form-check">
																	<input type="checkbox" class="form-input-styled" checked data-fouc>
																</div>
															</div>
														</div>
											    	</div>
												</a>
											</div>
											<div class="col-sm-3">
												<a href="#">
													<div class="card media-lib-img">
														<div class="card-img-actions">
															<img class="card-img-top img-fluid" src="assets/images/placeholders/placeholder.jpg" alt="">
															<div class="card-img-top position-absolute text-right slct-media d-none">
																<div class="form-check">
																	<input type="checkbox" class="form-input-styled" data-fouc>
																</div>
															</div>
														</div>
											    	</div>
												</a>
											</div>
											<div class="col-sm-3">
												<a href="#">
													<div class="card media-lib-img">
														<div class="card-img-actions">
															<img class="card-img-top img-fluid" src="assets/images/placeholders/placeholder.jpg" alt="">
															<div class="card-img-top position-absolute text-right slct-media d-none">
																<div class="form-check">
																	<input type="checkbox" class="form-input-styled" data-fouc>
																</div>
															</div>
														</div>
											    	</div>
												</a>
											</div>
											<div class="col-sm-3">
												<a href="#">
													<div class="card media-lib-img">
														<div class="card-img-actions">
															<img class="card-img-top img-fluid" src="assets/images/placeholders/placeholder.jpg" alt="">
															<div class="card-img-top position-absolute text-right slct-media d-none">
																<div class="form-check">
																	<input type="checkbox" class="form-input-styled" data-fouc>
																</div>
															</div>
														</div>
											    	</div>
												</a>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<a href="#">
													<div class="card media-lib-img">
														<div class="card-img-actions">
															<img class="card-img-top img-fluid" src="assets/images/placeholders/placeholder.jpg" alt="">
															<div class="card-img-top position-absolute text-right slct-media">
																<div class="form-check">
																	<input type="checkbox" class="form-input-styled" data-fouc>
																</div>
															</div>
														</div>
											    	</div>
												</a>
											</div>
											<div class="col-sm-3">
												<a href="#">
													<div class="card media-lib-img">
														<div class="card-img-actions">
															<img class="card-img-top img-fluid" src="assets/images/placeholders/placeholder.jpg" alt="">
															<div class="card-img-top position-absolute text-right slct-media d-none">
																<div class="form-check">
																	<input type="checkbox" class="form-input-styled" data-fouc>
																</div>
															</div>
														</div>
											    	</div>
												</a>
											</div>
											<div class="col-sm-3">
												<a href="#">
													<div class="card media-lib-img">
														<div class="card-img-actions">
															<img class="card-img-top img-fluid" src="assets/images/placeholders/placeholder.jpg" alt="">
															<div class="card-img-top position-absolute text-right slct-media d-none">
																<div class="form-check">
																	<input type="checkbox" class="form-input-styled" data-fouc>
																</div>
															</div>
														</div>
											    	</div>
												</a>
											</div>
											<div class="col-sm-3">
												<a href="#">
													<div class="card media-lib-img">
														<div class="card-img-actions">
															<img class="card-img-top img-fluid" src="assets/images/placeholders/placeholder.jpg" alt="">
															<div class="card-img-top position-absolute text-right slct-media d-none">
																<div class="form-check">
																	<input type="checkbox" class="form-input-styled" data-fouc>
																</div>
															</div>
														</div>
											    	</div>
												</a>
											</div>
										</div>
										<!-- /media section -->
									</div>
								</div>
								<!-- media description -->
								<div class="col-lg-4">
									<div class="card-body gry-color-lgt">
										<div class="row">
											<div class="col-sm-12">
												<h5 class="text-uppercase">Attachment Details</h5>
											</div>
											<div class="col-5">
												<img class="img-fluid border-grey-400" src="assets/images/placeholders/placeholder.jpg" alt="">
											</div>
											<div class="col-7">
												<h5 class="mb-0">WB00-2</h5>
												<p class="mb-0 text-muted">October 12 2019</p>
												<p class="mb-0 text-muted">223kb</p>
												<p class="mb-0 text-muted">800 x 1100</p>
												<button type="button" class="btn bg-danger-800 danger-btn mt-1"><i class="icon-bin mr-1"></i> Delete</button>
											</div>
											<div class="col-sm-12">
												<div class="dropdown-divider mt-4 mb-4"></div>
											</div>
										</div>
										<form action="#">
											<div class="form-group row">
												<label class="col-form-label col-lg-4 text-lg-right"><strong>Title</strong></label>
												<div class="col-lg-8">
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-lg-4 text-lg-right"><strong>Caption</strong></label>
												<div class="col-lg-8">
													<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-lg-4 text-lg-right"><strong>Alt Text</strong></label>
												<div class="col-lg-8">
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-lg-4 text-lg-right"><strong>Tag</strong></label>
												<div class="col-lg-8">
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-lg-4 text-lg-right"><strong>Description</strong></label>
												<div class="col-lg-8">
													<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /media description -->
							</div>
						</div>
					</div>
				</div>

				<div class="card-footer text-right">
					<button type="button" class="btn bg-grey">Set featured image</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /full width modal -->
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