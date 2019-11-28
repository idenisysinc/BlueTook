
	<?php include('header.php') ?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content bg-white">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content w-90 m-auto">
				<form action="#">
					<div class="row">
						<div class="col-lg-3">
							<div class="card filter-sidebar border-0">
								<h2 class="text-white p-3 main-heading mb-0 bord-radius-tp-5">Filters</h2>
								<div class="card-body filter-body">
									<!-- sort -->
									<div class="form-group">
										<label class="d-block"><strong>Sort</strong></label>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="radio" class="form-input-styled" name="gender" checked data-fouc>
												Price
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="radio" class="form-input-styled" name="gender" data-fouc>
												Location
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="radio" class="form-input-styled" name="gender" data-fouc>
												Rating
											</label>
										</div>
									</div>
									<!-- /sort -->
									<div class="dropdown-divider"></div>
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
									<div class="dropdown-divider"></div>
									<!-- Budget -->
									<div class="form-group">
										<label class="d-block"><strong>Budget</strong></label>
										<input type="text" class="form-control ion-height-helper" id="ion-range" data-fouc>
									</div>
									<!-- /Budget -->
									<div class="dropdown-divider"></div>
									<!-- Search by Name -->
									<div class="form-group">
										<label class="d-block"><strong>Search by Name</strong></label>
										<input type="text" class="form-control" placeholder="Enter Name">
									</div>
									<!-- Search by Name -->
									<div class="dropdown-divider"></div>
									<!-- Add Keywords -->
									<div class="form-group">
										<label class="d-block"><strong>Add Keywords</strong></label>
										<select multiple="multiple" class="form-control select" data-fouc>
											<optgroup label="Mountain Time Zone">
												<option value="AZ" selected>Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY">Wyoming</option>
											</optgroup>
											<optgroup label="Central Time Zone">
												<option value="AL">Alabama</option>
												<option value="IA" selected>Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
											</optgroup>
										</select>
									</div>
									<!-- /Add Keywords -->
									<button type="submit" class="btn bg-slate-800 d-block w-50">Search</button>
								</div>
							</div>
						</div>
						<!-- User Details -->
						<div class="col-lg-9">
							<!-- row1 -->
							<div class="row">
								<div class="col-sm-12">
									<div class="card custom-box-shadow bord-radius-tp-5 bord-white-2">
										<!-- imgSlider -->
										<div id="picSlider" class="carousel slide carousel-fade div16by9" data-ride="carousel">
											<!-- Indicators -->
											<ul class="carousel-indicators">
											   	<li data-target="#picSlider" data-slide-to="0" class="active"></li>
											   	<li data-target="#picSlider" data-slide-to="1"></li>
											   	<li data-target="#picSlider" data-slide-to="2"></li>
											</ul>
										  
											<!-- The slideshow -->
											<div class="carousel-inner">
											    <div class="carousel-item active div16by9-wrapper">
											      <img src="assets/images/1.jpg" alt="Image 1" class="img-fluid bord-radius-tp-5">
											    </div>
											    <div class="carousel-item div16by9-wrapper">
											      <img src="assets/images/2.jpg" alt="Image 2" class="img-fluid bord-radius-tp-5">
											    </div>
											    <div class="carousel-item div16by9-wrapper">
											      <img src="assets/images/3.jpg" alt="Image 3" class="img-fluid bord-radius-tp-5">
											    </div>
											</div>
										  
											<!-- Left and right controls -->
											<a class="carousel-control-prev" href="#picSlider" data-slide="prev">
											    <span class="carousel-control-prev-icon"></span>
											</a>
											<a class="carousel-control-next" href="#picSlider" data-slide="next">
											    <span class="carousel-control-next-icon"></span>
											</a>
										</div>
										<!-- imgSlider -->
										<div class="card-body mob-text-center">
											<div class="media card-body flex-column flex-md-row m-0">
												<div class="mr-md-3 mb-2 mb-md-0 mob-w-100">
													<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle img-gry-border" width="150" height="150" alt="">
												</div>

												<div class="media-body">
													<h6 class="mb-0 font-25 blk-lgt-color">James Alexander</h6>
													<p><i class="icon-star-full2 star-rate-on"></i> <i class="icon-star-full2 star-rate-on"></i> <i class="icon-star-full2 star-rate-on"></i> <i class="icon-star-full2 star-rate-off"></i> <i class="icon-star-full2 star-rate-off"></i></p>

													<ul class="list-inline mb-0 tag-list mt-3">
														<li class="list-inline-item"><a href="#">Author profile</a></li>
														<li class="list-inline-item"><a href="#">All posts by James</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
													</ul>
												</div>
											</div>
								    	</div>
								    	<!-- price details -->
								    	<div class="card-body extra-lgt-gry-bg border-0">
								    		<div class="card-body py-0">
								    			<div class="row d-flex align-items-center">
								    				<div class="col-xl-7">
								    					<p class="price-dtls deep-slate-color font-25 mb-xl-0">Starting From <strong class="price">₹12000.00</strong></p>
								    				</div>
								    				<div class="col-xl-5 price-rate-btn">
								    					<button type="button" class="btn btn-primary gradi-btn v-details-btn"><i class="icon-info22 mr-1"></i> View Details</button><button type="button" class="btn btn-primary gradi-btn"><i class="icon-camera mr-1"></i> Book Now</button>
								    				</div>
								    			</div>
								    		</div>
								    	</div>
								    	<!-- price details -->
							    	</div>
								</div>
								<div class="col-sm-12">
									<div class="card custom-box-shadow bord-radius-tp-5 bord-white-2">
										<!-- videoSlider -->
										<div id="videoSlider" class="carousel slide carousel-fade" data-ride="carousel">
											<!-- Indicators -->
											<ul class="carousel-indicators">
											   	<li data-target="#videoSlider" data-slide-to="0" class="active"></li>
											   	<li data-target="#videoSlider" data-slide-to="1"></li>
											   	<li data-target="#videoSlider" data-slide-to="2"></li>
											</ul>
										  
											<!-- The slideshow -->
											<div class="carousel-inner">
											    <div class="carousel-item active">
											      	<div class="embed-responsive embed-responsive-16by9">
													  	<iframe class="embed-responsive-item bord-radius-tp-5" src="https://www.youtube.com/embed/6lt2JfJdGSY" allowfullscreen></iframe>
													</div>
											    </div>
											    <div class="carousel-item">
											      	<div class="embed-responsive embed-responsive-16by9">
													  	<iframe class="embed-responsive-item bord-radius-tp-5" src="https://www.youtube.com/embed/IUN664s7N-c" allowfullscreen></iframe>
													</div>
											    </div>
											    <div class="carousel-item">
											      	<div class="embed-responsive embed-responsive-16by9">
													  	<iframe class="embed-responsive-item bord-radius-tp-5" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
													</div>
											    </div>
											</div>
										  
											<!-- Left and right controls -->
											<a class="carousel-control-prev" href="#videoSlider" data-slide="prev">
											    <span class="carousel-control-prev-icon"></span>
											</a>
											<a class="carousel-control-next" href="#videoSlider" data-slide="next">
											    <span class="carousel-control-next-icon"></span>
											</a>
										</div>
										<!-- /videoSlider -->
										<div class="card-body mob-text-center">
											<div class="media card-body flex-column flex-md-row m-0">
												<div class="mr-md-3 mb-2 mb-md-0 mob-w-100">
													<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle img-gry-border" width="150" height="150" alt="">
												</div>

												<div class="media-body">
													<h6 class="mb-0 font-25 blk-lgt-color">James Alexander</h6>
													<p><i class="icon-star-full2 star-rate-on"></i> <i class="icon-star-full2 star-rate-on"></i> <i class="icon-star-full2 star-rate-on"></i> <i class="icon-star-full2 star-rate-off"></i> <i class="icon-star-full2 star-rate-off"></i></p>

													<ul class="list-inline mb-0 tag-list mt-3">
														<li class="list-inline-item"><a href="#">Author profile</a></li>
														<li class="list-inline-item"><a href="#">All posts by James</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
													</ul>
												</div>
											</div>
								    	</div>
								    	<!-- price details -->
								    	<div class="card-body extra-lgt-gry-bg border-0">
								    		<div class="card-body py-0">
								    			<div class="row d-flex align-items-center">
								    				<div class="col-xl-7">
								    					<p class="price-dtls deep-slate-color font-25 mb-xl-0">Starting From <strong class="price">₹12000.00</strong></p>
								    				</div>
								    				<div class="col-xl-5 price-rate-btn">
								    					<button type="button" class="btn btn-primary gradi-btn v-details-btn"><i class="icon-info22 mr-1"></i> View Details</button><button type="button" class="btn btn-primary gradi-btn"><i class="icon-camera mr-1"></i> Book Now</button>
								    				</div>
								    			</div>
								    		</div>
								    	</div>
								    	<!-- price details -->
							    	</div>
								</div>
								<div class="col-sm-12">
									<div class="card custom-box-shadow bord-radius-tp-5 bord-white-2">
										<!-- compareSlider -->
										<div id="compareSlider" class="carousel slide carousel-fade" data-ride="carousel">
											<!-- Indicators -->
											<!-- <ul class="carousel-indicators">
											   	<li data-target="#compareSlider" data-slide-to="0" class="active"></li>
											   	<li data-target="#compareSlider" data-slide-to="1"></li>
											   	<li data-target="#compareSlider" data-slide-to="2"></li>
											</ul> -->
										  
											<!-- The slideshow -->
											<div class="carousel-inner">
											    <div class="carousel-item active">
											      	<div class="section">
													  <div class="ba-slider">
													    <img src="assets/images/before.jpeg" alt="Before Image" class="img-fluid bord-radius-tp-5">
													    <div class="resize">
													      <img src="assets/images/after.jpeg" alt="After Image" class="img-fluid bord-radius-tp-5">
													    </div>
													    <span class="handle"></span>
													  </div>
													</div>
											    </div>
											</div>
										  
											<!-- Left and right controls -->
											<a class="carousel-control-prev" href="#" data-slide="prev">
											    <span class="carousel-control-prev-icon"></span>
											</a>
											<a class="carousel-control-next" href="#" data-slide="next">
											    <span class="carousel-control-next-icon"></span>
											</a>
										</div>
										<!-- /compareSlider -->
										<div class="card-body mob-text-center">
											<div class="media card-body flex-column flex-md-row m-0">
												<div class="mr-md-3 mb-2 mb-md-0 mob-w-100">
													<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle img-gry-border" width="150" height="150" alt="">
												</div>

												<div class="media-body">
													<h6 class="mb-0 font-25 blk-lgt-color">James Alexander</h6>
													<p><i class="icon-star-full2 star-rate-on"></i> <i class="icon-star-full2 star-rate-on"></i> <i class="icon-star-full2 star-rate-on"></i> <i class="icon-star-full2 star-rate-off"></i> <i class="icon-star-full2 star-rate-off"></i></p>

													<ul class="list-inline mb-0 tag-list mt-3">
														<li class="list-inline-item"><a href="#">Author profile</a></li>
														<li class="list-inline-item"><a href="#">All posts by James</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Lorem</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
														<li class="list-inline-item"><a href="#">Tag Loremipsum 2</a></li>
													</ul>
												</div>
											</div>
								    	</div>
								    	<!-- price details -->
								    	<div class="card-body extra-lgt-gry-bg border-0">
								    		<div class="card-body py-0">
								    			<div class="row d-flex align-items-center">
								    				<div class="col-xl-7">
								    					<p class="price-dtls deep-slate-color font-25 mb-xl-0">Starting From <strong class="price">₹12000.00</strong></p>
								    				</div>
								    				<div class="col-xl-5 price-rate-btn">
								    					<button type="button" class="btn btn-primary gradi-btn v-details-btn"><i class="icon-info22 mr-1"></i> View Details</button><button type="button" class="btn btn-primary gradi-btn"><i class="icon-camera mr-1"></i> Book Now</button>
								    				</div>
								    			</div>
								    		</div>
								    	</div>
								    	<!-- price details -->
							    	</div>
								</div>
							</div>
							<!-- /row1 -->
						</div>
						<!-- /User Details -->
					</div>
				</form>
				<!-- /form -->
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
	<!-- compare slider script -->
	<script>
		/* Create jQuery plugin */
		(function($) {
		  function drags(dragElement, resizeElement, container) {
		    // Initialize the dragging event on mousedown.
		    dragElement.on("mousedown.ba-events touchstart.ba-events", function(e) {
		      dragElement.addClass("ba-draggable");
		      resizeElement.addClass("ba-resizable");

		      // Check if it's a mouse or touch event and pass along the correct value
		      var startX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;

		      // Get the initial position
		      var dragWidth = dragElement.outerWidth(),
		        posX = dragElement.offset().left + dragWidth - startX,
		        containerOffset = container.offset().left,
		        containerWidth = container.outerWidth();

		      // Set limits
		      var edgeLimit = 0;
		      minLeft = containerOffset + edgeLimit;
		      maxLeft = containerOffset + containerWidth - dragWidth - edgeLimit;

		      // Calculate the dragging distance on mousemove.
		      dragElement
		        .parents()
		        .on("mousemove.ba-events touchmove.ba-events", function(e) {
		          $("body").addClass("dragging");

		          // Check if it's a mouse or touch event and pass along the correct value
		          var moveX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;

		          leftValue = moveX + posX - dragWidth;

		          // Prevent going off limits
		          if (leftValue < minLeft) {
		            leftValue = minLeft;
		          } else if (leftValue > maxLeft) {
		            leftValue = maxLeft;
		          }

		          // Translate the handle's left value to masked divs width.
		          widthValue =
		            (leftValue + dragWidth / 2 - containerOffset) *
		              100 /
		              containerWidth +
		            "%";

		          // Set the new values for the slider and the handle.
		          $(".ba-draggable").css("left", widthValue);
		          $(".ba-resizable").css("width", widthValue);
		          // Bind mouseup events to stop dragging.
		        })
		        .on(
		          "mouseup.ba-events touchend.ba-events touchcancel.ba-events",
		          function() {
		            $("body").removeClass("dragging");

		            dragElement.removeClass("ba-draggable");
		            resizeElement.removeClass("ba-resizable");
		            // Unbind all events for performance
		            $(this).off(".ba-events");
		          }
		        );
		      e.preventDefault();
		    });
		  }

		  // Define plugin
		  $.fn.beforeAfter = function() {
		    var cur = this;
		    // Adjust the slider
		    var width = cur.width() + "px";
		    cur.find(".resize img").css("width", width);
		    // Bind dragging events
		    drags(cur.find(".handle"), cur.find(".resize"), cur);

		    // Update sliders on resize.
		    // Because we all do this: i.imgur.com/YkbaV.gif
		    $(window).resize(function() {
		      var width = cur.width() + "px";
		      cur.find(".resize img").css("width", width);
		    });
		  };
		})(jQuery);

		/* Run jQuery page load code */
		(function($, root, undefined) {
		  $(function() {
		    "use strict";

		    // DOM ready
		    $(".ba-slider").each(function() {
		      $(this).beforeAfter();
		    });
		  });
		})(jQuery, this);

	</script>
	<!-- /compare slider script -->
</body>
</html>