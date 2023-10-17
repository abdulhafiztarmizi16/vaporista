<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<title>Dashio - Bootstrap Admin Template</title>

	<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Bootstrap core CSS -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--external css-->
	<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet">

	<!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
	<section id="main-content">
		<section class="wrapper site-min-height">
			<div class="row mt">
				<div class="col-lg-12">
					<div class="row content-panel">
						<div class="col-md-4 profile-text mt mb centered">
							<div class="right-divider hidden-sm hidden-xs">
								<!-- <h4>1922</h4>
                  <h6>FOLLOWERS</h6>
                  <h4>290</h4>
                  <h6>FOLLOWING</h6>
                  <h4>$ 13,980</h4>
                  <h6>MONTHLY EARNINGS</h6> -->
								<H1>STOP SMOKING<BR>LET'S VAPING</H6>
									<H4>CHOICE & TRUST TO <BR> VAPORISTA</H4>
							</div>
						</div>
						<!-- /col-md-4 -->
						<div class="col-md-4 right-divider profile-text">
							<h3><?= $user['nama']; ?></h3>
							<h5><?= $user['email']; ?></h5>
							<p><?= date('d F Y', $user['date_created']); ?></p>
							<br>
							<!-- <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p> -->
						</div>
						<!-- /col-md-4 -->
						<div class="col-md-4 profile-text">
							<h3>Poin Saat Ini</h3>
							<h2><?= $user['poin']; ?></h2>
							<!-- <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p> -->
						</div>
					</div>
					<!-- /row -->
				</div>

				<!--footer end-->
		</section>
		<!-- js placed at the end of the document so the pages load faster -->
		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
		<script src="lib/jquery.scrollTo.min.js"></script>
		<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
		<!--common script for all pages-->
		<script src="lib/common-scripts.js"></script>
		<!--script for this page-->
		<!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
		<script>
			$('.contact-map').click(function() {

				//google map in tab click initialize
				function initialize() {
					var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
					var mapOptions = {
						zoom: 11,
						scrollwheel: false,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					}
					var map = new google.maps.Map(document.getElementById('map'), mapOptions);
					var marker = new google.maps.Marker({
						position: myLatlng,
						map: map,
						title: 'Dashio Admin Theme!'
					});
				}
				google.maps.event.addDomListener(window, 'click', initialize);
			});
		</script>
</body>

</html>