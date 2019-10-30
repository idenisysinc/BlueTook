
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
											<input type="file" class="form-control-uniform" data-fouc>
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
											<select class="form-control multiselect-max-height" multiple="multiple" data-fouc required>
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
											</select>
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

</body>
</html>