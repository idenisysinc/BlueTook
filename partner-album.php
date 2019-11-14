
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
						<h4 class="font-weight-semibold"><i class="icon-images3 mr-2"></i>Client Albums</h4>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Client Albums</span>
						</div>
					</div>

				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				<!-- Main section -->
				<button type="button" class="btn bg-indigo-400" data-toggle="modal" data-target="#modal_full"><i class="icon-upload mr-2"></i> Upload</button>
				<!-- /main section -->
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
</body>
</html>