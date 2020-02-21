<!DOCTYPE html>
<html lang="en">
<?php include('./layouts/loadStyleSheets.php'); ?>

<body>
<div id="wrapper">
	<!-- start header -->
    <?php include('./layouts/layout_header.php'); ?>
	<!-- end header -->
<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
	
							<div class="row">
								<div class="col-lg-12">
								
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:100%;"><div id="gmap_canvas" style="height:300px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								</div>
							</div>
	<div class="row">
								<div class="col-md-8">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor.</p>
									<div class="done">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				Your message has been sent. Thank you!
			</div>
		</div>
									<div class="contact-form">
											
		<form method="post" action="formContactUs.php" id="contactform" class="contact">
											<div class="form-group has-feedback">
												<label for="name">Name*</label>
												<input type="text" class="form-control" name="name" placeholder="">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="email">Email*</label>
												<input type="email" class="form-control" name="email" placeholder="">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
 
											<div class="form-group has-feedback">
												<label for="message">Message*</label>
												<textarea class="form-control" rows="6" name="comment" placeholder=""></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<input type="submit" value="Submit" id="submit" class="submit btn btn-default">
										</form>
										 
										
									</div>
								</div>
								<div class="col-md-4">
								</div>
							</div>
							
	</div>
 
	</section>
    <?php include('./layouts/layout_footer.php') ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php include('./layouts/loadScript.php'); ?>
</body>
</html>