
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
						<h4 class="font-weight-semibold"><i class="icon-calendar22 mr-2"></i>Calendar copy</h4>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Calendar copy</span>
						</div>
					</div>

				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				<form action="">
					<div class="row">
						<div class="col-xl-6">
							<!-- Chart grid -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title">Add Event</h5>
								</div>

								<div class="card-body">
									<form action="">
										<div class="form-group">
											<label>Start Date</label>
											<input type="date" class="form-control">
										</div>
										<div class="form-group">
											<label>End Date</label>
											<input type="date" class="form-control">
										</div>
										<div class="form-group">
											<label>Description</label>
											<textarea rows="3" cols="3" class="form-control"></textarea>
										</div>
										<button type="submit" class="btn bg-indigo-400">Save <i class="icon-plus22 ml-2"></i></button>
									</form>
								</div>
							</div>
							<!-- /chart grid -->
						</div>

						<div class="col-xl-6">
							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title">My Calendar</h5>
								</div>

								<div class="card-body">
									<div class="row">
										<div class="col-sm-12">
											<!-- Basic view -->								
											<div id="fullcalendar"></div>
											<!-- /basic view -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- /content area -->


			<!-- Footer -->
			<?php include('footer.php') ?>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	<!-- script for event calendar -->
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
	<script src="http://qtip2.com/v/stable/jquery.qtip.js"></script>
	<script src="http://qtip2.com/static/javascripts/libs/jquery.fullcalendar.min.js"></script>

	<script>
		// Setup FullCalendar
		(function() {
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();

			var tooltip = $('<div/>').qtip({
				id: 'fullcalendar',
				prerender: true,
				content: {
					text: ' ',
					title: {
						button: true,
						text : ' ',
					}
				},
				position: {
					my: 'bottom center',
					at: 'left center',
					target: 'event',
					viewport: $('#fullcalendar'),
					adjust: {
						mouse: false,
						scroll: false
					}
				},
				show: false,
				hide: false,
				style: 'qtip-dark'
			}).qtip('api');

			$('#fullcalendar').fullCalendar({
				editable: false,
				height: 300,
				header: {
					left: 'today',
					center: 'title',
					right: 'prev,next'
				},
				eventClick: function(data, event, view) {
					var content = '<p>'+data.title+'</p>';

					tooltip.set({
						'content.text': content
					})
					.reposition(event).show(event);
				},
		        dayClick: function() { tooltip.hide() },
				eventResizeStart: function() { tooltip.hide() },
				eventDragStart: function() { tooltip.hide() },
				viewDisplay: function() { tooltip.hide() },
				events: [
					{
						title: 'All Day Event this is bodo text',
						start: new Date(y, m, 1)
					},
					{
						title: 'All',
						start: new Date(y, m, 16),
						end: new Date(y, m, 18)
					},
					{
						title: 'Long Event',
						start: new Date(y, m, 22),
						end: new Date(y, m, 26)
					},
					{
						title: 'Repeating Event',
						start: new Date(y, m, 4)
					},
					{
						title: 'Check Event',
						start: new Date(y+1, m+1, 12),
						end: new Date(y+1, m+1, 18)
					},
					{
						title: 'Meeting',
						start: new Date(y, m, 28),
					},
					{
						title: 'Birthday Party',
						start: new Date(y, m, 29)
					}
				]
			});
		}());
	</script>
</body>
</html>