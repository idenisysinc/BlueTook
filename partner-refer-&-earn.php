
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
						<h4 class="font-weight-semibold"><i class="icon-users4 mr-2"></i>Refer & Earn</h4>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Refer & Earn</span>
						</div>
					</div>

				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
		quam velit, vulputate eu pharetra nec, mattis ac neque. Duis
		vulputate commodo lectus, ac blandit elit tincidunt id.</p>
							</div>
						</div>
						<form action="">
							<div class="row">
								<div class="col-xl-5">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Enter Name">
									</div>
								</div>
								<div class="col-xl-5">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Enter Email">
									</div>
								</div>
								<div class="col-xl-2">
									<button type="submit" class="btn bg-indigo-400">Send <i class="icon-circle-right2 ml-2"></i></button>
								</div>
							</div>
						</form>
						<!-- msg part -->
						<!-- for hide the row use d-none class -->
						<div class="row">
							<div class="col-sm-12">
								<span class="text-success my-2 d-block suc-msg"><i class="icon-checkmark-circle mr-1"></i>Invitation sent successfully</span>
								<!-- success msg. for hide use d-none class in span-->
								<span class="text-danger my-2 d-block error-msg"><i class="icon-blocked mr-1"></i>You have exceeded your limit</span>
								<!-- error msg. for hide use d-none class in span-->
							</div>
						</div>
						<!-- /msg part -->
						<!-- table -->
						<div class="row mt-3">
							<div class="col-sm-12">
								<div class="card card-table table-responsive shadow-0 mb-0">
									<table class="table table-bordered">
										<thead class="bg-grey-300">
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Email</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Ada Lovelace</td>
												<td>ada@gmail.com</td>
												<td>Invited</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Grace Hopper</td>
												<td>grace@gmail.com</td>
												<td>Approved</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Margaret Hamilton</td>
												<td>margaret@gmail.com</td>
												<td>Pending Approval</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Joan Clarke</td>
												<td>joan@gmail.com</td>
												<td>Invited</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- table -->
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