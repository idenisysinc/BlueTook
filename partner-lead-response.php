
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
						<h4 class="font-weight-semibold"><i class="icon-users4 mr-2"></i>Leads</h4>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Leads</span>
						</div>
					</div>

				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				<!-- row-->
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="media flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<img src="assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											Client Name, <span class="text-muted font-size-sm">Gender</span>
										</h6>
										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item">Email: abcd@gmail.com</li>
										</ul>
									</div>
								</div>
								<div class="dropdown-divider"></div>
								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										Title
									</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi molestias consequuntur incidunt, ab accusantium numquam, temporibus. Deserunt consectetur fugit nam rem doloribus temporibus repellendus, ut fugiat sit molestiae id omnis.</p>
									<p class="text-secondary">
										Budget: <span>Rs. 40000 - 8000</span>
									</p>
									<p class="text-muted mb-0">
										<i class="icon-pin font-size-sm "></i> City, State
									</p>
								</div>
							</div>
							<div class="card-footer">
								<button type="button" class="btn bg-indigo-400"><i class="icon-bubbles2 mr-2"></i> Chat</button>
								<button type="button" class="btn btn-light ml-3" data-toggle="modal" data-target="#modal_large"><i class="icon-reply-all mr-2"></i> Respond</button>
							</div>
						</div>
						<!-- /.card -->
					</div>
					<!-- /col-lg-6 -->
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="media flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<img src="assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											Client Name, <span class="text-muted font-size-sm">Gender</span>
										</h6>
										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item">Email: abcd@gmail.com</li>
										</ul>
									</div>
								</div>
								<div class="dropdown-divider"></div>
								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										Title
									</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi molestias consequuntur incidunt, ab accusantium numquam, temporibus. Deserunt consectetur fugit nam rem doloribus temporibus repellendus, ut fugiat sit molestiae id omnis.</p>
									<p class="text-secondary">
										Budget: <span>Rs. 40000 - 8000</span>
									</p>
									<p class="text-muted mb-0">
										<i class="icon-pin font-size-sm "></i> City, State
									</p>
								</div>
							</div>
							<div class="card-footer">
								<button type="button" class="btn bg-indigo-400"><i class="icon-bubbles2 mr-2"></i> Chat</button>
								<button type="button" class="btn btn-light ml-3" data-toggle="modal" data-target="#modal_large"><i class="icon-reply-all mr-2"></i> Respond</button>
							</div>
						</div>
						<!-- /.card -->
					</div>
					<!-- /col-lg-6 -->
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
				<!-- /row-->
			</div>
			<!-- /content area -->


			<!-- Footer -->
			<?php include('footer.php') ?>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	<!-- Large modal -->
		<div id="modal_large" class="modal fade" tabindex="-1">
			<div class="modal-dialog modal-lg">
				<form action="#">
					<div class="modal-content">
						<div class="modal-header grey-bg text-white pb-3">
							<h1 class="modal-title">POST YOUR BID</h1>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<div class="modal-body">
							<div class="row">
								<div class="col-lg-8">
									<div class="form-group">
										<label class="d-block"><strong>Description</strong></label>
										<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
									</div>
									<div class="form-group">
										<label class="d-block"><strong>Budget</strong></label>
										<input type="text" class="form-control" placeholder="Budget">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card mb-0">
										<div class="card-body text-center">
											<h5 class="font-weight-semibold">Collaborate and Bid</h5>
											<div>
												<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mb-1" width="44" height="44" alt="">
												<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mb-1" width="44" height="44" alt="">
												<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mb-1" width="44" height="44" alt="">
											</div>
											<div>
												<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mb-1" width="44" height="44" alt="">
												<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mb-1" width="44" height="44" alt="">
												<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mb-1" width="44" height="44" alt="">
											</div>
											<p class="mt-2 mb-0 text-muted">Select Partners who will join you in the project</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card-footer">
							<button type="button" class="btn bg-grey">Submit <i class="icon-circle-right2 ml-2"></i> </button>
						</div>
					</div>
				</form>
			</div>
		</div>
	<!-- /large modal -->

</body>
</html>