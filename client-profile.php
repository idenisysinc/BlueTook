
	<?php include('header.php') ?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content bg-white">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content w-90 m-auto">
				<div class="row">
					<div class="col-lg-3">
						<div class="card filter-sidebar sidebar-link-div border-0">
							<div class="filter-body full-radius5">
								<a href="#" class="dropdown-item active"><i class="icon-user"></i> My Profile</a>
								<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Edit Profile</a>
								<a href="#" class="dropdown-item"><i class="icon-clipboard3"></i> Manage Order</a>
								<a href="#" class="dropdown-item"><i class="icon-images2"></i> Manage Album</a>
								<a href="#" class="dropdown-item"><i class="icon-star-full2"></i> Write a Review</a>
								<a href="#" class="dropdown-item"><i class="icon-exit3"></i> Logout</a>
							</div>
						</div>
					</div>
					<!-- List Items -->
					<div class="col-lg-9">
						<!-- row1 -->
						<div class="row">
							<div class="col-sm-12">
								<h2 class="position-relative text-center title-before title-after cookie-font title-font35">My Profile</h2>
							</div>	
						</div>
						<!-- /row1 -->
						<div class="content custom-box-shadow bg-white full-radius5">
							<form action="#">
								<!-- row2 -->
								<div class="row">
									<div class="col-sm-12">
										<div class="card-img-actions d-inline-block mb-3">
											<img class="img-fluid rounded-circle" src="assets/images/placeholders/placeholder.jpg" width="80" height="80" alt="">
											<div class="card-img-actions-overlay card-img rounded-circle">
												<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" title="Profile" onclick="document.getElementById('ImageFileInput').click();">
													<i class="icon-link"></i>
													<input id="ImageFileInput" type="file" name="name" class="sr-only" />
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /row2 -->
								<!-- row3 -->
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">First Name <span class="text-danger">*</span></label>
											<input type="text" class="form-control" placeholder="First Name" required>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">Last Name</label>
											<input type="text" class="form-control" placeholder="Last Name">
										</div>
									</div>
								</div>
								<!-- /row3 -->
								<!-- row4 -->
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">Mobile No.</label>
											<input type="text" class="form-control" placeholder="Mobile No.">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">Alternate Phone No.</label>
											<input type="text" class="form-control" placeholder="Alternate Phone No.">
										</div>
									</div>
								</div>
								<!-- /row4 -->
								<!-- row5 -->
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">Email</label>
											<input type="email" class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">Gender</label>
											<select class="form-control rate-type">
				                                <option value="" disabled="" selected="">Choose Gender</option>
				                                <option value="opt2">Male</option>
				                                <option value="opt3">Female</option>
				                                <option value="opt4">Others</option>
			                            	</select>
										</div>
									</div>
								</div>
								<!-- /row5 -->
								<!-- row6 -->
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">Birth Date</label>
											<input type="date" class="form-control" placeholder="Birth Date">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">Anniversary</label>
											<input type="date" class="form-control" placeholder="Anniversary">
										</div>
									</div>
								</div>
								<!-- /row6 -->
								<!-- row7 -->
								<div class="row">
									<div class="col-sm-12">
										<div class="dropdown-divider mb-3"></div>
									</div>
								</div>
								<!-- /row7 -->
								<!-- row8 -->
								<div class="row">
									<div class="col-sm-12">
										<h4>Address Details</h4>
									</div>
								</div>
								<!-- /row8 -->
								<!-- row9 -->
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">Address</label>
											<input type="text" class="form-control" placeholder="Address">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">City</label>
											<input type="text" class="form-control" placeholder="City">
										</div>
									</div>
								</div>
								<!-- /row9 -->
								<!-- row10 -->
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">State</label>
											<input type="text" class="form-control" placeholder="State">
										</div>
									</div>
									<div class="col-xl-6">										
										<div class="form-group">
											<label class="d-block">Zip Code</label>
											<input type="text" class="form-control" placeholder="Zip Code">
										</div>
									</div>
								</div>
								<!-- /row10 -->
								<!-- row11 -->
								<div class="row">
									<div class="col-sm-12">
										<div class="dropdown-divider mb-3"></div>
									</div>
								</div>
								<!-- /row11 -->
								<!-- row12 -->
								<div class="row">
									<div class="col-sm-12">
										<h4>Social Media</h4>
									</div>
								</div>
								<!-- /row12 -->
								<!-- row13 -->
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">Facebook URL</label>
											<input type="text" class="form-control" placeholder="Facebook URL">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label class="d-block">Instagram URL</label>
											<input type="text" class="form-control" placeholder="Instagram URL">
										</div>
									</div>
								</div>
								<!-- /row13 -->
								<div class="text-right">
									<button type="submit" class="btn bg-indigo-400 gradi-btn"><i class="icon-floppy-disk mr-2"></i> Save</button>
								</div>
							</form>
						</div>
					</div>
					<!-- /List Items -->
				</div>
			</div>
			<!-- /content area -->
			<!-- Sub Footer -->
			<?php include('sub-footer.php') ?>
			<!-- / Subfooter -->

			<!-- Footer -->
			<?php include('footer.php') ?>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	
</body>
</html>