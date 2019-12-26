
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
						<h4 class="font-weight-semibold"><i class="icon-graph mr-2"></i>Lead Analysis</h4>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Lead Analysis</span>
						</div>
					</div>

				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				<!-- Main charts -->
				<div class="row">
					<div class="col-xl-8">
						<!-- Chart grid -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">61 <span class="font-size-base">profile viewers</span></h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart" id="c3-grid-lines"></div>
								</div>
							</div>
						</div>
						<!-- /chart grid -->
					</div>

					<div class="col-xl-4">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Quick Actions</h5>
							</div>

							<div class="card-body">
								<div class="row">
									<div class="col-sm-12 mb-2">
										<a href="#">New Leads <span class="badge badge-pill badge-danger float-right">10</span></a>
									</div>
									<div class="col-sm-12 mb-2">
										<a href="#">Bid Response <span class="badge badge-pill badge-danger float-right">2</span></a>
									</div>
									<div class="col-sm-12 mb-2">
										<a href="#">Upcoming Events <span class="badge badge-pill badge-danger float-right">2</span></a>
									</div>
									<div class="col-sm-12">
										<a href="#">New Messages <span class="badge badge-pill badge-danger float-right">2</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /main charts -->
				<div class="row">
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Your Stats</h5>
							</div>

							<div class="card-body">
								<div class="row">
									<div class="col-sm-12 mb-2">
										<p class="mb-0">Profile Views <span class="float-right">56</span></p>
									</div>
									<div class="col-sm-12 mb-2">
										<p class="mb-0">Profile Shares <span class="float-right">23</span></p>
									</div>
									<div class="col-sm-12 mb-2">
										<p class="mb-0">Jobs Awarded <span class="float-right">15</span></p>
									</div>
									<div class="col-sm-12 mb-2">
										<p class="mb-0">Albums Delivered <span class="float-right">08</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Your Schedule</h5>
							</div>

							<div class="card-body">
								<div class="row">
									<div class="col-sm-12">
										<div id="datepicker"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Quick Links</h5>
							</div>

							<div class="card-body">
								<div class="row">
									<div class="col-sm-12 mb-2">
										<a href="#">Manage Profile</a>
									</div>
									<div class="col-sm-12 mb-2">
										<a href="#">View Recommendations</a>
									</div>
									<div class="col-sm-12 mb-2">
										<a href="#">Create Album</a>
									</div>
									<div class="col-sm-12">
										<a href="#">Refer & Earn</a>
									</div>
								</div>
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
	<!-- script for datepicker -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	  $( function() {
	    $( "#datepicker" ).datepicker();
	  } );
	</script>
</body>
</html>