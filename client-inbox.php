
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
								<a href="#" class="dropdown-item"><i class="icon-hammer2"></i> Manage Bids</a>
								<a href="#" class="dropdown-item"><i class="icon-clipboard3"></i> Manage Order</a>
								<a href="#" class="dropdown-item"><i class="icon-images2"></i> Manage Album</a>
								<a href="#" class="dropdown-item"><i class="icon-star-full2"></i> Write a Review</a>
								<a href="#" class="dropdown-item active"><i class="icon-envelope"></i>Inbox</a>
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
								<h2 class="position-relative text-center title-before title-after cookie-font title-font35">Inbox</h2>
							</div>	
						</div>
						<!-- /row1 -->
						<!-- Chat contact -->
						<div class="card content custom-box-shadow bg-white full-radius5">
							<div class="card-header p-0 header-elements-inline">
								<h5 class="card-title">My Messages</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                	</div>
			                	</div>
							</div>
							<div class="pt-2">
								<ul class="media-list media-chat-scrollable max-h-300 mb-3">
									<li class="media text-muted">Today</li>
									<li class="media">
										<div class="mr-3"><img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title d-flex flex-nowrap">
												<a href="#" class="font-weight-semibold mr-3">Margo Baker</a>
												<span class="font-size-sm text-muted text-nowrap ml-auto">8:20 am</span>
											</div>	
											So because one badger a over more impotent pending frustratingly gosh when
										</div>
									</li>

									<li class="media">
										<div class="mr-3"><img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title d-flex flex-nowrap">
												<a href="#" class="font-weight-semibold mr-3">Will Grace</a>
												<span class="font-size-sm text-muted text-nowrap ml-auto">9:00 am</span>
											</div>	
											Fantastic close echidna crud fatuously much extensively alas beat up far consoled manfully that far one owing one perversely jeepers some
										</div>
									</li>

								</ul>

							</div>
						</div>
						<!-- /Chat contact -->
						<!-- Chat box -->
						<div class="card content custom-box-shadow bg-white full-radius5">
							<div class="card-header p-0 header-elements-inline">
								<h5 class="card-title"><img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" width="40" height="40" alt="">Person Name</h5>
							</div>

							<div class="pt-2">
								<ul class="media-list media-chat media-chat-scrollable max-h-300 mb-3">
									<li class="media content-divider justify-content-center text-muted mx-0">Monday, Feb 10</li>

									<li class="media ml-3">
										<div class="media-body">
											<div class="media-chat-item">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>
											<div class="font-size-sm text-muted mt-2">Mon, 9:54 am</div>
										</div>
									</li>
									<li class="media media-chat-item-reverse mr-3">
										<div class="media-body">
											<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>
											<div class="font-size-sm text-muted mt-2">Mon, 10:24 am</div>
										</div>
									</li>
									<li class="media ml-3">
										<div class="media-body">
											<div class="media-chat-item">Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.</div>
											<div class="font-size-sm text-muted mt-2">Mon, 10:56 am</div>
										</div>
									</li>
								</ul>

		                    	<textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."></textarea>

		                    	<div class="d-flex align-items-center">
		                    		<div class="list-icons list-icons-extended">
		                                <a href="" class="list-icons-item font-weight-semibold" data-popup="tooltip" data-container="body" onclick="document.getElementById('ImageFileInput').click();">Attach file: <i class="icon-file-plus"></i><input type="file" id="ImageFileInput" name="" value="" placeholder="" class="sr-only"></a>
		                    		</div>

		                    		<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Send</button>
		                    	</div>
							</div>
						</div>
					<!-- /Chat box -->
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