
	<?php include('header.php') ?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content bg-white">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content texture-bg px-0">
				<div class="w-80 m-auto">
					<div class="row mt-4 mb-4">
						<div class="col-xl-5 col-lg-4">
							<div class="input-group input-box-shadow radius-10 sm-desktop-mb-10">
								<input type="text" class="form-control b-radius-left10 dark-gry-border h-47" placeholder="Enter Keywords">
								<span class="input-group-append">
									<button class="btn blue-button b-radius-right10 dark-gry-border" type="button"><i class="icon-search4"></i></button>
								</span>
							</div>
						</div>
						<div class="col-xl-5 col-lg-4 col-md-6">
							<div class="btn-group d-block sm-desktop-mb-10 input-box-shadow radius-10 dark-gry-border">
		                    	<button type="button" class="btn dropdown-toggle bg-white w-100 box-shadow-0 radius-10 h-45" data-toggle="dropdown">Choose Location</button>
		                    	<div class="dropdown-menu loc-dropdown w-100">
									<div class="form-group form-group-feedback form-group-feedback-left mb-0">
										<input type="text" class="form-control uname" placeholder="Search Location">
										<div class="form-control-feedback">
											<i class="icon-search4 text-muted"></i>
										</div>
										<a href="#" class="dropdown-item text-primary color-blue detect-btn"><i class="icon-target2"></i> Detect Location</a>
									</div>
									<div class="dropdown-header font-weight-bold py-1 text-default font-size-xs line-height-xs lgt-gry-bg">Search Results</div>
									<div class="card-body pt-0 pb-0">
										<p class="my-2">Location1</p>
										<p class="my-2">Location2</p>
										<p class="my-2">Location3</p>
										<p class="my-2">Location4</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-6">
							<button type="submit" class="btn d-block blue-button input-box-shadow radius-10 w-100 h-45" data-toggle="modal" data-target="#modal_filter">Choose Filters<i class="icon-filter3 ml-2"></i></button>
						</div>
					</div>
					<div class="white-translucent-bg mb-4 card-body radius-10 box-shadow-0 border-0">
						<div class="row">
							<div class="col-lg-4 text-center">
								<img class="rounded-circle fit-cover-img mb-2 white-border5" src="assets/images/masonry/portrait-3.jpg" width="150" height="150" alt="">
								<div class="mt--40">
									<span class="badge badge-pill badge-warning font-14 px-3 gems-capsule">Hidden Gem</span>
								</div>
								<p class="text-uppercase mb-0">Photographer Name</p>
								<p><i class="icon-star-full2 star-rate-on font-size-lg mr-1"></i>4.9 (26 Reviews)</p>
								<span class="badge badge-flat badge-icon text-danger bg-white rounded-circle custom-box-shadow p-2 favourite-icon"><i class="icon-heart5"></i></span>
								<p class="mb-0 desk-view">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, mollitia, beatae! Excepturi voluptate autem tenetur sequi temporibus sunt debitis quos quisquam, ratione fugit voluptatibus sed qui voluptatem porro! Cumque, ipsam!</p>
							</div>
							<div class="col-lg-8">
								<!-- /desktop-view -->
								<div class="row desk-view">
									<div class="col-sm-3">
										<img src="assets/images/masonry/portrait-3.jpg" alt="Image 1" class="w-100 fit-cover-img radius-10" height="176">
									</div>
									<div class="col-sm-3">
										<img src="assets/images/masonry/landscape-2.jpg" alt="Image 1" class="w-100 fit-cover-img radius-10" height="176">
									</div>
									<div class="col-sm-3">
										<img src="assets/images/masonry/landscape-4.jpg" alt="Image 1" class="w-100 fit-cover-img radius-10" height="176">
									</div>
									<div class="col-sm-3">
										<img src="assets/images/masonry/portrait-2.jpg" alt="Image 1" class="w-100 fit-cover-img radius-10" height="176">
									</div>
								</div>
								<!-- /desktop-view -->
								<!-- mob-view -->
								<div class="row mob-view">
									<div class="col-sm-12 py-4">
										<div id="profileImageSlider" class="carousel slide carousel-fade" data-ride="carousel">

											<!-- Indicators -->
											<!-- <ul class="carousel-indicators circle-indicators">
											   	<li data-target="#profileImageSlider" data-slide-to="0" class="active"></li>
											   	<li data-target="#profileImageSlider" data-slide-to="1"></li>
											   	<li data-target="#profileImageSlider" data-slide-to="2"></li>
											   	<li data-target="#profileImageSlider" data-slide-to="3"></li>
											</ul> -->
										  
											<!-- The slideshow -->
											<div class="carousel-inner">
											    <div class="carousel-item active">
											    	<div class="carousel-img-overlay"></div>
												    <img src="assets/images/masonry/landscape-1.jpg" alt="Image 1" class="img-fluid bg-image">
											    </div>
											    <div class="carousel-item">
											    	<div class="carousel-img-overlay"></div>
											        <img src="assets/images/masonry/landscape-3.jpg" alt="Image 2" class="img-fluid bg-image">
											    </div>
											    <div class="carousel-item">
											    	<div class="carousel-img-overlay"></div>
											      	<img src="assets/images/masonry/portrait-3.jpg" alt="Image 3" class="img-fluid bg-image">
											    </div>
											    <div class="carousel-item">
											    	<div class="carousel-img-overlay"></div>
											      	<img src="assets/images/masonry/portrait-4.jpg" alt="Image 3" class="img-fluid bg-image">
											    </div>
											</div>
										  
											<!-- Left and right controls -->
											<a class="carousel-control-prev" href="#profileImageSlider" data-slide="prev">
											    <span class="carousel-control-prev-icon"></span>
											</a>
											<a class="carousel-control-next" href="#profileImageSlider" data-slide="next">
											    <span class="carousel-control-next-icon"></span>
											</a>
										</div>
										<!-- /#profileImageSlider -->
									</div>
								</div>
								<!-- /mob-view -->
								<div class="row mt-lg-3 tab-text-center">
									<div class="col-sm-12">
										<h4 class="text-uppercase blue-text font-weight-semibold mb-0 cust-line-ht">Wedding Photography</h4>
										<p class="font-14">Starting From <span class="font-weight-semibold">Rs. 15000</span></p>
										<div class="mt-3">
											<button type="button" class="btn bg-indigo-400 gradi-btn px-5 mr-md-2 sm-mob-mb">View Now</button>
											<button type="button" class="btn bg-indigo-400 gradi-btn px-5">Book Now</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="white-translucent-bg mb-4 card-body radius-10 box-shadow-0 border-0">
						<div class="row">
							<div class="col-lg-4 text-center">
								<img class="rounded-circle fit-cover-img mb-2 white-border5" src="assets/images/masonry/portrait-3.jpg" width="150" height="150" alt="">
								<p class="text-uppercase mb-0">Photographer Name</p>
								<p><i class="icon-star-full2 star-rate-on font-size-lg mr-1"></i>4.9 (26 Reviews)</p>
								<span class="badge badge-flat badge-icon text-danger bg-white rounded-circle custom-box-shadow p-2 favourite-icon"><i class="icon-heart6"></i></span>
								<p class="mb-0 desk-view">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, mollitia, beatae! Excepturi voluptate autem tenetur sequi temporibus sunt debitis quos quisquam, ratione fugit voluptatibus sed qui voluptatem porro! Cumque, ipsam!</p>
							</div>
							<div class="col-lg-8">
								<!-- /desktop-view -->
								<div class="row desk-view">
									<div class="col-sm-3">
										<img src="assets/images/masonry/portrait-3.jpg" alt="Image 1" class="w-100 fit-cover-img radius-10" height="176">
									</div>
									<div class="col-sm-3">
										<img src="assets/images/masonry/landscape-2.jpg" alt="Image 1" class="w-100 fit-cover-img radius-10" height="176">
									</div>
									<div class="col-sm-3">
										<img src="assets/images/masonry/landscape-4.jpg" alt="Image 1" class="w-100 fit-cover-img radius-10" height="176">
									</div>
									<div class="col-sm-3">
										<img src="assets/images/masonry/portrait-2.jpg" alt="Image 1" class="w-100 fit-cover-img radius-10" height="176">
									</div>
								</div>
								<!-- /desktop-view -->
								<!-- mob-view -->
								<div class="row mob-view">
									<div class="col-sm-12 py-4">
										<div id="profileImageSlider" class="carousel slide carousel-fade" data-ride="carousel">

											<!-- Indicators -->
											<!-- <ul class="carousel-indicators circle-indicators">
											   	<li data-target="#profileImageSlider" data-slide-to="0" class="active"></li>
											   	<li data-target="#profileImageSlider" data-slide-to="1"></li>
											   	<li data-target="#profileImageSlider" data-slide-to="2"></li>
											   	<li data-target="#profileImageSlider" data-slide-to="3"></li>
											</ul> -->
										  
											<!-- The slideshow -->
											<div class="carousel-inner">
											    <div class="carousel-item active">
											    	<div class="carousel-img-overlay"></div>
												    <img src="assets/images/masonry/landscape-1.jpg" alt="Image 1" class="img-fluid bg-image">
											    </div>
											    <div class="carousel-item">
											    	<div class="carousel-img-overlay"></div>
											        <img src="assets/images/masonry/landscape-3.jpg" alt="Image 2" class="img-fluid bg-image">
											    </div>
											    <div class="carousel-item">
											    	<div class="carousel-img-overlay"></div>
											      	<img src="assets/images/masonry/portrait-3.jpg" alt="Image 3" class="img-fluid bg-image">
											    </div>
											    <div class="carousel-item">
											    	<div class="carousel-img-overlay"></div>
											      	<img src="assets/images/masonry/portrait-4.jpg" alt="Image 3" class="img-fluid bg-image">
											    </div>
											</div>
										  
											<!-- Left and right controls -->
											<a class="carousel-control-prev" href="#profileImageSlider" data-slide="prev">
											    <span class="carousel-control-prev-icon"></span>
											</a>
											<a class="carousel-control-next" href="#profileImageSlider" data-slide="next">
											    <span class="carousel-control-next-icon"></span>
											</a>
										</div>
										<!-- /#profileImageSlider -->
									</div>
								</div>
								<!-- /mob-view -->
								<div class="row mt-lg-3 tab-text-center">
									<div class="col-sm-12">
										<h4 class="text-uppercase blue-text font-weight-semibold mb-0 cust-line-ht">Wedding Photography</h4>
										<p class="font-14">Starting From <span class="font-weight-semibold">Rs. 15000</span></p>
										<div class="mt-3">
											<button type="button" class="btn bg-indigo-400 gradi-btn px-5 mr-md-2 sm-mob-mb">View Now</button>
											<button type="button" class="btn bg-indigo-400 gradi-btn px-5">Book Now</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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
		<div id="modal_filter" class="modal fade" tabindex="-1">
			<div class="modal-dialog modal-lg">
				<!-- Choose Filters -->
				<form action="#" class="">
					<div class="modal-content">
						<div class="modal-header blue-bg text-white pb-3">
							<h1 class="modal-title">Choose Filters</h1>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<div class="modal-body">
							<div class="row">
								<div class="col-lg-12">
									<!-- Search by Rating -->
									<div class="form-group">
										<label class="d-block"><strong>Search by Rating</strong></label>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" checked data-fouc>
												4 <i class="icon-star-full2 font-size-sm"></i> &amp; above
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												3 <i class="icon-star-full2 font-size-sm"></i> &amp; above
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												2 <i class="icon-star-full2 font-size-sm"></i> &amp; above
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												1 <i class="icon-star-full2 font-size-sm"></i> &amp; above
											</label>
										</div>
									</div>
									<!-- /Search by Rating -->
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label class="d-block"><strong>Budget</strong></label>
										<input type="text" class="form-control ion-height-helper" id="ion-range" data-fouc>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="divider-top"></div>
									<h4 class="font-weight-semibold">Select Tag</h4>
								</div>
								<div class="col-sm-12">
									<a href="#" class="capsule capsule-tags  mb-2 ml-md-1 mr-md-1">Wedding  Events and Gatherings</a>
									<a href="#" class="capsule capsule-tags mb-2 ml-md-1 mr-md-1 capsule-active-bg">Maternity</a>
									<a href="#" class="capsule capsule-tags mb-2 ml-md-1 mr-md-1">Kids & Family</a>
									<a href="#" class="capsule capsule-tags mb-2 ml-md-1 mr-md-1">Product</a>
									<a href="#" class="capsule capsule-tags mb-2 ml-md-1 mr-md-1">Fashion</a>
									<a href="#" class="capsule capsule-tags mb-2 ml-md-1 mr-md-1">Maternity</a>
									<a href="#" class="capsule capsule-tags mb-2 ml-md-1 mr-md-1">Kids & Family</a>
									<a href="#" class="capsule capsule-tags mb-2 ml-md-1 mr-md-1">Travel</a>
									<a href="#" class="capsule capsule-tags mb-2 ml-md-1 mr-md-1">Wedding  Events and Gatherings</a>
									<a href="#" class="capsule capsule-tags mb-2 ml-md-1 mr-md-1">Kids & Family</a>
								</div>
							</div>
						</div>

						<div class="card-footer text-right">
							<button type="button" class="btn bg-grey gradi-btn px-4 mr-2">Cancel</button><button type="button" class="btn bg-grey gradi-btn px-4">Apply</button>
						</div>
					</div>
				</form>
				<!-- /Choose Filters -->
			</div>
		</div>
	<!-- /large modal -->
</body>
</html>