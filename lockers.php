 
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
 	<title>SnowGate | Find a Locker</title>

  
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
		<div class="large-12 columns intro">
			<h1>Find a Locker</h1>
		</div>
	</div>
		
		<div class="row">
		
		<div class="large-6 columns">
			
				<form class="custom">
				  <label for="customDropdown">Resorts</label>
				  <select id="customDropdown">
					<option>Vail</option>
					<option>Copper</option>
					<option>Snowmass</option>
				  </select>
				</form>
				
				<table>
				  <thead>
					<tr>
					  <th width="200">Lockers in Vail</th>
					  <th></th>
					  <th></th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>Locker #37</td>
					  <td>Available</td>
					  <td><a href="#" class="button" data-reveal-id="rentalConfirmation" data-reveal-ajax="rental-confirmation.php">Rent It</a></td>
					</tr>
					<tr>
					  <td>Locker #23</td>
					  <td>Available</td>
					  <td><a href="#" class="button" data-reveal-id="rentalConfirmation" data-reveal-ajax="rental-confirmation.php">Rent It</a></td>
					</tr>
					<tr class="inUse">
					  <td>Locker #75</td>
					  <td>In Use</td>
					  <td></td>
					</tr>
				  </tbody>
				</table>

			
			</div>
		
			<div class="large-6 columns">
			
			<iframe width="600" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=boulder+co&amp;aq=&amp;sll=37.6,-95.665&amp;sspn=130.459565,233.261719&amp;ie=UTF8&amp;hq=&amp;hnear=Boulder,+Colorado&amp;t=m&amp;ll=40.041021,-105.266533&amp;spn=0.105137,0.20565&amp;z=12&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=boulder+co&amp;aq=&amp;sll=37.6,-95.665&amp;sspn=130.459565,233.261719&amp;ie=UTF8&amp;hq=&amp;hnear=Boulder,+Colorado&amp;t=m&amp;ll=40.041021,-105.266533&amp;spn=0.105137,0.20565&amp;z=12" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			
			</div>
			
			
			
		</div>
	
</div>

<div id="rentalConfirmation" class="reveal-modal small">

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

<script src="javascripts/Parallax-Scrolling-master/js/script.js"></script>

<?php include 'login.php'; ?> 

</body>
</html>
