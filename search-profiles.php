
	<?php include('header.php') ?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content bg-white">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
				<form action="#">
					<div class="row">
						<div class="col-lg-3">
							<div class="card">
								<div class="card-body">
									<!-- sort -->
									<div class="form-group">
										<label class="d-block"><strong>Sort:</strong></label>
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
										<label class="d-block"><strong>Search by Rating:</strong></label>
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
										<label class="d-block"><strong>Budget:</strong></label>
										<p class="mb-3 text-muted">Set type to double and specify range</p>
										<input type="text" class="form-control ion-height-helper" id="ion-range" data-fouc>
									</div>
									<!-- /Budget -->
									<div class="dropdown-divider"></div>
									<!-- Search by Name -->
									<div class="form-group">
										<label class="d-block"><strong>Search by Name:</strong></label>
										<input type="text" class="form-control" placeholder="Enter Name">
									</div>
									<!-- Search by Name -->
									<div class="dropdown-divider"></div>
									<!-- Add Keywords -->
									<div class="form-group">
										<label class="d-block"><strong>Add Keywords:</strong></label>
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
									<button type="submit" class="btn bg-slate-800">Search <i class="icon-circle-right2 ml-2"></i></button>
								</div>
							</div>
						</div>
						<!-- User Details -->
						<div class="col-lg-9">
							<!-- row1 -->
							<div class="row">
								<div class="col-xl-3 col-sm-6">
									<div class="card">
										<div class="card-body text-center">
											<div class="card-img-actions d-inline-block mb-3">
												<img class="img-fluid rounded-circle" src="assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
												<div class="card-img-actions-overlay card-img rounded-circle">
													<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" title="Profile">
														<i class="icon-link"></i>
													</a>
												</div>
											</div>

								    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
								    		<p class="mb-0">Leads: <span>20</span></p>
											<span><i class="icon-pin font-size-sm text-muted"></i>  City, State</span>
											<p><i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i></p>
								    	</div>
							    	</div>
								</div>

								<div class="col-xl-3 col-sm-6">
									<div class="card">
										<div class="card-body text-center">
											<div class="card-img-actions d-inline-block mb-3">
												<img class="img-fluid rounded-circle" src="assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
												<div class="card-img-actions-overlay card-img rounded-circle">
													<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" title="Profile">
														<i class="icon-link"></i>
													</a>
												</div>
											</div>

								    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
								    		<p class="mb-0">Leads: <span>20</span></p>
											<span><i class="icon-pin font-size-sm text-muted"></i>  City, State</span>
											<p><i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i></p>
								    	</div>
							    	</div>
								</div>

								<div class="col-xl-3 col-sm-6">
									<div class="card">
										<div class="card-body text-center">
											<div class="card-img-actions d-inline-block mb-3">
												<img class="img-fluid rounded-circle" src="assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
												<div class="card-img-actions-overlay card-img rounded-circle">
													<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" title="Profile">
														<i class="icon-link"></i>
													</a>
												</div>
											</div>

								    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
								    		<p class="mb-0">Leads: <span>20</span></p>
											<span><i class="icon-pin font-size-sm text-muted"></i>  City, State</span>
											<p><i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i></p>
								    	</div>
							    	</div>
								</div>

								<div class="col-xl-3 col-sm-6">
									<div class="card">
										<div class="card-body text-center">
											<div class="card-img-actions d-inline-block mb-3">
												<img class="img-fluid rounded-circle" src="assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
												<div class="card-img-actions-overlay card-img rounded-circle">
													<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" title="Profile">
														<i class="icon-link"></i>
													</a>
												</div>
											</div>

								    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
								    		<p class="mb-0">Leads: <span>20</span></p>
											<span><i class="icon-pin font-size-sm text-muted"></i>  City, State</span>
											<p><i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i></p>
								    	</div>
							    	</div>
								</div>
							</div>
							<!-- /row1 -->
							<!-- row2 -->
							<div class="row">
								<div class="col-xl-3 col-sm-6">
									<div class="card">
										<div class="card-body text-center">
											<div class="card-img-actions d-inline-block mb-3">
												<img class="img-fluid rounded-circle" src="assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
												<div class="card-img-actions-overlay card-img rounded-circle">
													<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" title="Profile">
														<i class="icon-link"></i>
													</a>
												</div>
											</div>

								    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
								    		<p class="mb-0">Leads: <span>20</span></p>
											<span><i class="icon-pin font-size-sm text-muted"></i>  City, State</span>
											<p><i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i></p>
								    	</div>
							    	</div>
								</div>

								<div class="col-xl-3 col-sm-6">
									<div class="card">
										<div class="card-body text-center">
											<div class="card-img-actions d-inline-block mb-3">
												<img class="img-fluid rounded-circle" src="assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
												<div class="card-img-actions-overlay card-img rounded-circle">
													<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" title="Profile">
														<i class="icon-link"></i>
													</a>
												</div>
											</div>

								    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
								    		<p class="mb-0">Leads: <span>20</span></p>
											<span><i class="icon-pin font-size-sm text-muted"></i>  City, State</span>
											<p><i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i></p>
								    	</div>
							    	</div>
								</div>

								<div class="col-xl-3 col-sm-6">
									<div class="card">
										<div class="card-body text-center">
											<div class="card-img-actions d-inline-block mb-3">
												<img class="img-fluid rounded-circle" src="assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
												<div class="card-img-actions-overlay card-img rounded-circle">
													<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" title="Profile">
														<i class="icon-link"></i>
													</a>
												</div>
											</div>

								    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
								    		<p class="mb-0">Leads: <span>20</span></p>
											<span><i class="icon-pin font-size-sm text-muted"></i>  City, State</span>
											<p><i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i></p>
								    	</div>
							    	</div>
								</div>

								<div class="col-xl-3 col-sm-6">
									<div class="card">
										<div class="card-body text-center">
											<div class="card-img-actions d-inline-block mb-3">
												<img class="img-fluid rounded-circle" src="assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
												<div class="card-img-actions-overlay card-img rounded-circle">
													<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" title="Profile">
														<i class="icon-link"></i>
													</a>
												</div>
											</div>

								    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
								    		<p class="mb-0">Leads: <span>20</span></p>
											<span><i class="icon-pin font-size-sm text-muted"></i>  City, State</span>
											<p><i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-on"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i> <i class="icon-star-full2 font-size-sm star-rate-off"></i></p>
								    	</div>
							    	</div>
								</div>
							</div>
							<!-- /row2 -->
							<!-- pagination -->
							<div class="w-100">
								<ul class="pagination pagination-flat align-self-center float-right">
									<li class="page-item"><a href="#" class="page-link">&larr; &nbsp; Prev</a></li>
									<li class="page-item active"><a href="#" class="page-link">1</a></li>
									<li class="page-item"><a href="#" class="page-link">2</a></li>
									<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
									<li class="page-item"><a href="#" class="page-link">4</a></li>
									<li class="page-item"><a href="#" class="page-link">Next &nbsp; &rarr;</a></li>
								</ul>
							</div>
							<!-- /pagination -->
						</div>
						<!-- /User Details -->
					</div>
				</form>
				<!-- /form -->
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