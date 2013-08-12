
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
 	<title>Foundation 4</title>

  
  <link rel="stylesheet" href="stylesheets/app.css">

  <script src="javascripts/vendor/custom.modernizr.js"></script>

</head>
<body>

	<div class="row">
		<div id="topBar">
			<?php include 'topbar.php'; ?> 
		</div>
	</div>

	<header class="row">
		<div class="large-12 columns">
			<div class="large-3 columns">
			
			<a href="index.php"><img src="images/snowGateLogo.png"  alt="SnowGate"/> </a></div>
		
			<nav class="large-9 columns mainNav">
			
				<?php include 'nav.php'; ?> 
				
			</nav>
		    
		</div>
		
		<br class="clearFix">
	</header>

	<div class="row">
		<div class="large-12 columns">
				
		<?php include 'subnav.php'; ?>
		
		<h1>Active Rentals</h1>

	
		<table class="table active">
			<thead>
				<tr>
					<th></th>
					<th>Location</th>
					<th>Use</th>
					<th>Date</th>
					<th>Time</th>
					<th></th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td><a href="#"><img src="images/gpsMarker.png"  alt="Location"/></a></td>
					<td>Snow Mass - Locker #72</td>
					<td>$95 Day Rental</td>
					<td>Jan 30, 2013</td>
					<td>3:45</td>
					<td><a href="#" class="button" data-reveal-id="returnLocker" data-reveal-ajax="return-locker.php">Return</a></td>
				</tr>
				
				<tr>
					<td><a href="#"><img src="images/gpsMarker.png"  alt="Location"/></a></td>
					<td>Snow Mass - Locker #72</td>
					<td>$95 Day Rental</td>
					<td>Jan 30, 2013</td>
					<td>3:45</td>
					<td><a href="#" class="button" data-reveal-id="returnLocker" data-reveal-ajax="return-locker.php">Return</a></td>
				</tr>
				
				<tr>
					<td><a href="#"><img src="images/gpsMarker.png"  alt="Location"/></a></td>
					<td>Snow Mass - Locker #72</td>
					<td>$95 Day Rental</td>
					<td>Jan 30, 2013</td>
					<td>3:45</td>
					<td><a href="#" class="button" data-reveal-id="returnLocker" data-reveal-ajax="return-locker.php">Return</a></td>
				</tr>
				
				<tr>
					<td><a href="#"><img src="images/gpsMarker.png"  alt="Location"/></a></td>
					<td>Snow Mass - Locker #72</td>
					<td>$95 Day Rental</td>
					<td>Jan 30, 2013</td>
					<td>3:45</td>
					<td><a href="#" class="button" data-reveal-id="returnLocker" data-reveal-ajax="return-locker.php">Return</a></td>
				</tr>
			</tbody>
		</table>
			
	</div>
	
</div>
<div id="returnLocker" class="reveal-modal small">
</div>
<!-- Check for Zepto support, load jQuery if necessary -->
<script>
  document.write('<script src=javascripts/vendor/'
    + ('__proto__' in {} ? 'zepto' : 'jquery')
    + '.js><\/script>');
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
  	<script src="javascripts/foundation/foundation.js"></script>
	
	<script src="javascripts/foundation/foundation.abide.js"></script>
	
	<script src="javascripts/foundation/foundation.alerts.js"></script>
	
	<script src="javascripts/foundation/foundation.clearing.js"></script>
	
	<script src="javascripts/foundation/foundation.cookie.js"></script>
	
	<script src="javascripts/foundation/foundation.dropdown.js"></script>
	
	<script src="javascripts/foundation/foundation.forms.js"></script>
	
	<script src="javascripts/foundation/foundation.interchange.js"></script>
	
	<script src="javascripts/foundation/foundation.joyride.js"></script>
	
	<script src="javascripts/foundation/foundation.magellan.js"></script>
	
	<script src="javascripts/foundation/foundation.orbit.js"></script>
	
	<script src="javascripts/foundation/foundation.placeholder.js"></script>
	
	<script src="javascripts/foundation/foundation.reveal.js"></script>
	
	<script src="javascripts/foundation/foundation.section.js"></script>
	
	<script src="javascripts/foundation/foundation.tooltips.js"></script>
	
	<script src="javascripts/foundation/foundation.topbar.js"></script>
	
  
<script>	
	$(document).foundation();
</script>

<?php include 'login.php'; ?> 

</body>
</html>
