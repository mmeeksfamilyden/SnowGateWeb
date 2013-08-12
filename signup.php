 
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
		<div class="large-12 columns intro">
			<h1>Sign Up</h1>
		</div>
	</div>
		
		<div class="row">
			
			<div class="large-6 columns">
			<p>Sign up below and start feeling secure about your gear.</p>
			
				<form>
				
					<div class="row">
					  <div class="large-12 columns">
						<input type="text" name="firstName" placeholder="First Name">
					  </div>
					</div>
					
					<div class="row">
					  <div class="large-12 columns">
						<input type="text" name="lastName" placeholder="Last Name">
					  </div>
					</div>
				
					<div class="row">
					  <div class="large-12 columns">
						<input type="text" name="email" placeholder="email">
						<p class="caption">This is also your username"</p>
					  </div>
					</div>
					
					<div class="row">
					  <div class="large-12 columns">
						<input type="text" name="phone" placeholder="Phone">
					  </div>
					</div>
				
					<div class="row">
					  <div class="large-12 columns">
						<input type="text" name="password" placeholder="Password">
					  </div>
					</div>
					
					<div class="row">
					  <div class="large-12 columns">
						<input type="text" name="passwordConfirm" placeholder="Confirm Password">
					  </div>
					</div>
					
					<div class="row">
					  <div class="large-12 columns">
						<label for="agreeTerms"><input type="checkbox" id="agreeTerms" style="display: none;"><span class="custom checkbox"></span> I agree to the <a href="terms-and-conditions.php">Terms and Conditions</a></label>
					  </div>
					</div>
					
					
					<div class="row">
					  <div class="large-12 columns">
						<input class="button" type="submit" value="Sign Up" />
					  </div>
					</div>
				
				</form>

			
			</div>
			
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

<script src="javascripts/Parallax-Scrolling-master/js/script.js"></script>
  
<!--<script>
	$(document).ready(function(){
		// Cache the Window object
		$window = $(window);
					
	   $('section[data-type="background"]').each(function(){
		 var $bgobj = $(this); // assigning the object
						
		  $(window).scroll(function() {
						
			// Scroll the background at var speed
			// the yPos is a negative value because we're scrolling it UP!								
			var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
			
			// Put together our final background position
			var coords = '50% '+ yPos + 'px';
	
			// Move the background
			$bgobj.css({ backgroundPosition: coords });
			
	}); // window scroll Ends
	
	 });	
	
	}); 
	/* 
	 * Create HTML5 elements for IE's sake
	 */
	
	document.createElement("article");
	document.createElement("section"); 
</script>-->

<?php include 'login.php'; ?> 
</body>
</html>
