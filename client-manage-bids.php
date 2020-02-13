
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
								<a href="#" class="dropdown-item"><i class="icon-user"></i> My Profile</a>
								<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Edit Profile</a>
								<a href="#" class="dropdown-item active"><i class="icon-hammer2"></i> Manage Bids</a>
								<a href="#" class="dropdown-item"><i class="icon-clipboard3"></i> Manage Order</a>
								<a href="#" class="dropdown-item"><i class="icon-images2"></i> Manage Album</a>
								<a href="#" class="dropdown-item"><i class="icon-star-full2"></i> Write a Review</a>
								<a href="#" class="dropdown-item"><i class="icon-envelope"></i>Inbox</a>
								<a href="#" class="dropdown-item"><i class="icon-exit3"></i> Logout</a>
							</div>
						</div>
						<button type="submit" class="btn bg-indigo-400 gradi-btn w-100 mb-2" data-toggle="modal" data-target="#modal_requirement"><i class="icon-pushpin mr-2"></i> Post a Requirement</button>
					</div>
					<!-- List Items -->
					<div class="col-lg-9">
						<!-- row1 -->
						<div class="row">
							<div class="col-sm-12">
								<h2 class="position-relative text-center title-before title-after cookie-font title-font35">Manage Bids</h2>
							</div>	
						</div>
						<!-- /row1 -->
						<div class="content custom-box-shadow bg-white full-radius5">
							<div class="row">
								<div class="col-xl-4">
									<div class="card-img-actions d-inline-block mb-2 mb-xl-0">
										<img src="assets/images/client-album-cover.jpg" class="rounded mw-100" width="240" height="135" alt="">
										<div class="card-img-actions-overlay card-img overlay-img-text img-gry-border">
											Photography
										</div>
									</div>
								</div>
								<div class="col-xl-8">
									<div class="media-body">
										<div>
											<h6 class="media-title font-weight-semibold float-lg-left">Wedding <span> | 22-Feb-2020</span></h6>
											<p class="m-0 float-lg-right">Lastest Bid: <span>10 days ago</span></p>
										</div>
										<p class="text-muted font-weight-normal m-0 clear-both"><i class="icon-pin font-size-sm "></i> City, State</p>
										<p class="font-weight-semibold">
											Budget: <span>Rs. 50000</span>
										</p>
										<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi molestias consequuntur incidunt, ab accusantium numquam, temporibus. Deserunt consectetur fugit nam rem doloribus temporibus repellendus, ut fugiat sit molestiae id omnis.</p>
										<p class="float-md-left m-0">
											<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mb-1" width="40" height="40" alt="">
											<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mb-1" width="40" height="40" alt="">
											<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mb-1" width="40" height="40" alt="">
											<span>+6 Others</span>		
										</p>
										<span class="float-md-right d-block mt-2"><a href="client-all-bids.php">View all Bids</a>
										</span>
									</div>
								</div>
							</div>
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
	<!-- Large modal -->
		<div id="modal_requirement" class="modal fade" tabindex="-1">
			<div class="modal-dialog modal-lg">
				<!-- Select service -->
				<form action="#">
					<div class="modal-content">
						<div class="modal-header blue-bg text-white pb-3">
							<h1 class="modal-title">Select Requirement</h1>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<div class="modal-body">
							<div class="row">
								<div class="col-sm-12">
									<h4 class="font-weight-semibold text-center">Select Service</h4>
								</div>
								<div class="col-sm-12 text-center">
									<div class="card-img-actions d-inline-block mb-3 ml-md-1 mr-md-1 media-lib-img">
										<img src="assets/images/client-album-cover.jpg" class="rounded mw-100" width="240" height="135" alt="">
										<div class="card-img-actions-overlay card-img overlay-img-text img-gry-border">
											Photography
										</div>
										<div class="card-img-top position-absolute text-right img-select-option">
											<div class="form-check">
												<input type="checkbox" class="form-input-styled" checked data-fouc>
											</div>
										</div>
									</div>
									<div class="card-img-actions d-inline-block mb-3 ml-md-1 mr-md-1 media-lib-img">
										<img src="assets/images/client-album-cover.jpg" class="rounded mw-100" width="240" height="135" alt="">
										<div class="card-img-actions-overlay card-img overlay-img-text img-gry-border">
											Cinematography
										</div>
										<div class="card-img-top position-absolute text-right img-select-option">
											<div class="form-check">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</div>
										</div>
									</div>
									<div class="card-img-actions d-inline-block mb-3 ml-md-1 mr-md-1 media-lib-img">
										<img src="assets/images/client-album-cover.jpg" class="rounded mw-100" width="240" height="135" alt="">
										<div class="card-img-actions-overlay card-img overlay-img-text img-gry-border">
											Editing
										</div>
										<div class="card-img-top position-absolute text-right img-select-option">
											<div class="form-check">
												<input type="checkbox" class="form-input-styled"data-fouc>
											</div>
										</div>
									</div>
									<div class="card-img-actions d-inline-block mb-3 ml-md-1 mr-md-1 media-lib-img">
										<img src="assets/images/client-album-cover.jpg" class="rounded mw-100" width="240" height="135" alt="">
										<div class="card-img-actions-overlay card-img overlay-img-text img-gry-border">
											Makeup & Styling
										</div>
										<div class="card-img-top position-absolute text-right img-select-option">
											<div class="form-check">
												<input type="checkbox" class="form-input-styled"data-fouc>
											</div>
										</div>
									</div>
									<div class="card-img-actions d-inline-block mb-3 ml-md-1 mr-md-1 media-lib-img">
										<img src="assets/images/client-album-cover.jpg" class="rounded mw-100" width="240" height="135" alt="">
										<div class="card-img-actions-overlay card-img overlay-img-text img-gry-border">
											Professional Modeling
										</div>
										<div class="card-img-top position-absolute text-right img-select-option">
											<div class="form-check">
												<input type="checkbox" class="form-input-styled"data-fouc>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="divider-top"></div>
									<h4 class="font-weight-semibold text-center">Select Category</h4>
								</div>
								<div class="col-sm-12 text-center">
									<a href="#" class="capsule mb-2 ml-md-1 mr-md-1">Wedding  Events and Gatherings</a>
									<a href="#" class="capsule mb-2 ml-md-1 mr-md-1 capsule-active-bg">Maternity</a>
									<a href="#" class="capsule mb-2 ml-md-1 mr-md-1">Kids & Family</a>
									<a href="#" class="capsule mb-2 ml-md-1 mr-md-1">Product</a>
									<a href="#" class="capsule mb-2 ml-md-1 mr-md-1">Fashion</a>
									<a href="#" class="capsule mb-2 ml-md-1 mr-md-1">Travel</a>
								</div>
							</div>
						</div>

						<div class="card-footer text-right">
							<button type="button" class="btn bg-grey gradi-btn px-3">Next<i class="icon-circle-right2 ml-2"></i></button>
						</div>
					</div>
				</form>
				<!-- /Select service -->
				<!-- Request Quote -->
				<form action="#" class="d-none">
					<div class="modal-content">
						<div class="modal-header blue-bg text-white pb-3">
							<h1 class="modal-title">Request a Quote: <span>Photography - Wedding</span></h1>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<div class="modal-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="d-block"><strong>Event Date</strong></label>
										<input type="date" class="form-control" placeholder="Enter Date">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="d-block"><strong>Budget</strong></label>
										<input type="text" class="form-control ion-height-helper" id="ion-range" data-fouc>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="d-block"><strong>Location</strong></label>
										<input type="text" class="form-control" placeholder="Location">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="d-block"><strong>Contact No.</strong></label>
										<input type="text" class="form-control" placeholder="Contact No.">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label class="d-block"><strong>Requirement Details</strong></label>
										<textarea rows="5" cols="5" class="form-control" placeholder="Requirement Details"></textarea>
									</div>
									<div class="form-check form-check-switchery form-check-inline form-check-right">
										<label class="form-check-label">
											<input type="checkbox" class="form-check-input-switchery" checked data-fouc>
											<img src="assets/images/watsapp-icon-grn.png" class="mr-1" width="18" height="18" alt="">Let artist contact me on whatsapp
										</label>
									</div>
								</div>
							</div>
						</div>

						<div class="card-footer text-right">
							<button type="button" class="btn bg-grey gradi-btn px-3"><i class="icon-checkmark2 mr-2"></i>Submit</button>
						</div>
					</div>
				</form>
				<!-- /Request Quote -->
			</div>
		</div>
	<!-- /large modal -->
</body>
</html>