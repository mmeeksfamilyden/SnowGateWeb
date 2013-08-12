 
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
			<h1>Contact Us</h1>
		</div>
	</div>
		
		<div class="row">
		
			<div class="large-6 columns">
			
			<iframe width="600" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?sll=39.76453571629192,-104.85511140000001&amp;sspn=0.6768878918994281,1.1810618074340076&amp;t=m&amp;q=boulder+co&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=Boulder,+Colorado&amp;ll=40.029323,-105.240011&amp;spn=0.026289,0.051413&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?sll=39.76453571629192,-104.85511140000001&amp;sspn=0.6768878918994281,1.1810618074340076&amp;t=m&amp;q=boulder+co&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=Boulder,+Colorado&amp;ll=40.029323,-105.240011&amp;spn=0.026289,0.051413&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			
			</div>
			
			<div class="large-6 columns">
			<p>Thanks for your interest in SnowGate. Please use this form if you have any questions or comments and we'll get back with you very soon.</p>
			
				<form>
				
					<div class="row">
					  <div class="large-12 columns">
						<input type="text" name="name" placeholder="Name">
					  </div>
					</div>
				
					<div class="row">
					  <div class="large-12 columns">
						<input type="text" name="email" placeholder="email">
					  </div>
					</div>
					
					<div class="row">
					  <div class="large-12 columns">
						<input type="text" name="phone" placeholder="Phone">
					  </div>
					</div>
				
					<div class="row">
					  <div class="large-12 columns">
						<textarea name="message" placeholder="Message"></textarea>
					  </div>
					</div>
					
					<div class="row">
					  <div class="large-12 columns">
						<input class="button" type="submit" value="Send it!" />
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

<?php include 'login.php'; ?> 

</body>
</html>
