 
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
			<h1>About the Company</h1>
			<p>The SnowGate founders all met in a classroom at the Leeds School of Business in beautiful Boulder, CO. After hearing about the frustrating stories of having skis and snowboards stolen at resorts, we set out to make securing skis and other equipment convenient, easy, and fast. We believe that people shouldn’t have to worry about the security of their equipment or belongings when they are outside doing the things they love. Whether you’re biking, skiing, snowboarding, or just need a place to store anything SnowGate wants to help out! If it were up to us, we'd prefer a 365 day ski season.</p>
		</div>
		</div>
		
		<div class="row">
		
			<ul class="large-block-grid-4 bios">
				<li>
					<img src="images/profile_Christian_Nitu.jpg" alt="Christian Nitu, Founder" />
					<h2>Christian Nitu, Founder</h2>
					<p>Christian is a co-founder and SnowGate evangelist. Having experience in the marketing departments of big corporations like Frontier Airlines and Crocs Inc., Christian leads SnowGate’s marketing efforts and grows the “active lifestyle” brand persona. He is a California transplant that lives spends his winters in the snowy mountains and summers on clear beaches.</p>
				</li>
			
				<li>
					<img src="images/profile_Cory_Finney.jpg" alt="Cory Finney, Founder" />
					<h2>Cory Finney, Founder</h2>
					<p>Cory is a 6th generation Coloradan that comes from an extensive entrepreneurial family. As the CEO of SnowGate, Cory makes sure the company is running like a well-oiled machine. He has a great aptitude in building and maintaing relationships in every aspect of his life. Cory loves to spend his time skiing near his hometown Durango, CO.</p>
				</li>
						
				<li>
					<img src="images/profile_Matt_Hoenecke.jpg" alt="Matt Hoenecke, Founder" />
					<h2>Matt Hoenecke, Founder</h2>
					<p>Matt has been selling most of his life. With a great sense and experience in sales for small companies, Matt is in charge of managing SnowGate’s sales accounts. Matt loves whistling to radio songs and snowboarding.</p>
				</li>
						
				<li>
					<img src="images/profile_Nick_Ramsey.jpg" alt="Nick Ramsey, Founder" />
					<h2>Nick Ramsey, Founder</h2>
					<p>Nick is a graduate from the University of Colorado-Boulder and earned a BS in Business Administration with an emphasis in Operations and Information Management. Nick manages all of SnowGate’s projects and keeps each department working together seamlessly. He loves spending his free time attending concerts and playing hockey.</p>
				</li>
			</ul>	
			
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
