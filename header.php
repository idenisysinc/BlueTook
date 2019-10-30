<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dynamic Title</title>
	<link rel="icon" href="assets/images/bluetook-favicon.png" type="image/gif" sizes="16x16">
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/custom.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="assets/js/main/jquery.min.js"></script>
	<script src="assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<!-- script for form -->
	<script src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="assets/js/demo_pages/form_inputs.js"></script>
	<script src="assets/js/demo_pages/login.js"></script>
	<!-- /script for form -->
	<!-- range slider -->
	<script src="assets/js/plugins/sliders/ion_rangeslider.min.js"></script>
	<script src="assets/js/demo_pages/extra_sliders_ion.js"></script>
	<!-- /range slider -->
	<!-- multiple select -->
	<script src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="assets/js/demo_pages/form_select2.js"></script>
	<!-- /multiple select -->
	<!-- upload Image -->
	<script src="assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
	<script src="assets/js/demo_pages/uploader_bootstrap.js"></script>
	<!-- /upload Image -->
	<!-- multiselect form dropdown-->
	<script src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="assets/js/demo_pages/form_multiselect.js"></script>
	<!-- /multiselect form dropdown-->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>
	<!-- Main navbar -->
	<div class="navbar navbar-expand-xl navbar-light py-2">
		<div class="navbar-brand mr-0">
			<a href="#" class="d-inline-block">
				<img src="assets/images/logo.png" alt="">
			</a>
		</div>

		<div class="d-xl-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-grid"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle sidebar-control sidebar-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav mr-md-auto">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-xl-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<!-- <span class="badge bg-success ml-md-3 mr-md-auto">Online</span> -->

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<span><i class="icon-location4"></i> Kolkata</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right navbar-dropdown">
						<form action="#" class="dropdown-item pb-0 search-from">
							<div class="form-group form-group-feedback form-group-feedback-left mb-0 w-100">
								<input type="text" class="form-control uname" placeholder="Search Location">
								<div class="form-control-feedback">
									<i class="icon-search4 text-muted"></i>
								</div>
								<a href="#" class="dropdown-item text-primary color-blue detect-btn"><i class="icon-target2"></i> Detect Location</a>
							</div>
						</form>
						<div class="dropdown-header font-weight-bold py-1 text-default font-size-xs line-height-xs">Search Results</div>
						<div class="card-body pt-0 pb-0">
							<p class="mb-0">Location1</p>
							<p class="mb-0">Location2</p>
							<p class="mb-0">Location3</p>
							<p class="mb-0">Location4</p>
						</div>
					</div>
				</li>
				<li class="nav-item"><a href="#" class="navbar-nav-link">Home</a></li>
				<li class="nav-item"><a href="#" class="navbar-nav-link">Services</a></li>
				<li class="nav-item"><a href="#" class="navbar-nav-link">About Us</a></li>
				<li class="nav-item"><a href="#" class="navbar-nav-link">Contact Us</a></li>
				<!-- add d-none class for Hide or d-block for Show -->
				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-info3"></i> About</a>
						<a href="#" class="dropdown-item"><i class="icon-medal"></i> Experiences</a>
						<a href="#" class="dropdown-item"><i class="icon-images2"></i> One Click Album</a>
						<a href="#" class="dropdown-item"><i class="icon-link"></i> Social Links</a>
						<a href="#" class="dropdown-item"><i class="icon-wrench3"></i> Services &amp; Prices</a>
						<a href="#" class="dropdown-item"><i class="icon-thumbs-up3"></i> Reviews &amp; Recomendations</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
				<li class="nav-item"><a href="#" class="navbar-nav-link">Sign up</a></li>
				<li class="nav-item"><a href="#" class="navbar-nav-link">Log in</a></li>
			</ul>
		</div>
	</div>