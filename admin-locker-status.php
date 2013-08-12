 
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
 	<title>Admin Search User Profiles</title>
	
	<link rel="stylesheet" href="stylesheets/font-awesome.min.css">
	<link rel="stylesheet" href="stylesheets/font-awesome.min.css-ie7.min.css">
	<link rel="stylesheet" href="javascripts/jquery-ui/css/smoothness/jquery-ui-1.10.3.custom.css" />
	<link rel="stylesheet" href="stylesheets/app.css">

	<script src="javascripts/vendor/custom.modernizr.js"></script>

</head>
<body>

	<div class="row">
		<div id="topBar">
			<?php include 'admin-topbar.php'; ?> 
		</div>
	</div>

	<header class="row">
		<div class="large-12 columns">
			<div class="large-3 columns">
				<a href="index.php"><img src="images/snowGateLogo.png" alt="SnowGate"/> </a>
			</div>
		</div>
		
		<br class="clearFix">
	</header>

	<div class="row">
		<div class="large-12 columns intro">
		
			<?php include 'admin-subnav.php'; ?>
		
			<h1>Locker Status</h1>
			
		</div>
	</div>
		<div class="row">
		<form class="custom">
				<div class="large-12 columns">
						
							<div class="large-6 columns">
							
								<div class="large-2 columns">
									<label for="customDropdown" class="inline right">Location</label>
								</div>
					  
							  <div class="large-10 columns">
								  <select id="customDropdown">
									<option>Vail</option>
									<option>Copper</option>
									<option>Snowmass</option>
								  </select>
							  </div>
							  
						</div>
						
						<div class="large-6 columns">
						
						
						</div>
	</div>
				
</form></div>

		<div class="row">
		
		<div class="large-12 columns">
		
		<h3>Lockers</h3>
		
			<table class="table userProfiles">
				<thead>
					<tr>
					  <th>Location</th>
					  <th>Locker</th>
					  <th>Status</th>

					</tr>
				  </thead>				  
				  
				  <tbody>
					<tr>
					  <td>Vail</td>
					  <td>#77</td>
					  <td>Availble</td>
					</tr>
					<tr>
					  <td>Vail</td>
					  <td>#77</td>
					  <td>Availble</td>
					</tr>
					<tr>
					  <td>Vail</td>
					  <td>#77</td>
					  <td>Availble</td>
					</tr>
				  </tbody>
			</table>
		</div>
	</div>
		
<div class="row"></div>

<div id="exportOptions" class="reveal-modal small">

</div>
	
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

  
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<?php include 'login.php'; ?> 
</body>
</html>
