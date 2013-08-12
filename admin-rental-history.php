 
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
 	<title>Admin Rental History</title>
	
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
		
			<h1>Rental History</h1>
			
		</div>
	</div>
		
	<div class="row">
		<div class="large-6 columns">
		
			<form class="custom">
		
				<div class="large-1 column">
					<label for="fromDatepicker" class="inline right">From:</label>
				</div>
				<div class="large-3 columns">
					<input type="text" id="fromDatepicker" />
				</div>
				
				<div class="large-1 columns">
					<label for="toDatepicker" class="inline right">To:</label>
				</div>
				<div class="large-3 columns">
					<input type="text" id="toDatepicker" />
				</div>
				
				<div class="large-4 colunms">
				</div>
				
			</form>
			
		</div>
		
		<div class="large-6 columns">
		
			<form class="custom">
			
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
			  
			</form>
			
		
		</div>
		
		
	</div>
	
	<div class="row">
		<div class="large-12 columns">
		
			<div class="large-1 large-offset-11 columns"><a href="#" class="button" data-reveal-id="exportOptions" data-reveal-ajax="export-options.php">Export</a></div>
			
		</div>
		<div class="large-12 columns"><hr></div>
		
		<div class="large-12 columns">
			<table class="table adminHistory">
				<thead>
					<tr>
					  <th>Date</th>
					  <th>Location</th>
					  <th>Locker #</th>
					  <th>Amount</th>
					</tr>
				  </thead>
				  
				  <tfoot>
					<tr>
					  <th></th>
					  <th></th>
					  <th class="totalLabel">Total:</th>
					  <th>$1234.00</th>
					</tr>
				  </tfoot>
				  
				  
				  <tbody>
					<tr>
					  <td>8/16/2013</td>
					  <td>Vail</td>
					  <td>77</td>
					  <td>$45</td>
					</tr>
					<tr>
					  <td>8/16/2013</td>
					  <td>Vail</td>
					  <td>77</td>
					  <td>$45</td>
					</tr>
					<tr>
					  <td>8/16/2013</td>
					  <td>Vail</td>
					  <td>77</td>
					  <td>$45</td>
					</tr>
				  </tbody>
			</table>
		</div>
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

<script>
	$(function() {
	$( "#fromDatepicker" ).datepicker();
	$( "#toDatepicker" ).datepicker();
	});
</script>

<?php include 'login.php'; ?> 
</body>
</html>
