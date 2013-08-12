
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
 	<title>SnowGate</title>

  
  <link rel="stylesheet" href="stylesheets/app.css">
  <style type="text/css">
  body,td,th {
	font-family: HelveticaNeue, "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif;
}
	</style>
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

			<div class="row">
			<section id="topSlider">
				<div id="slideshow" class="slideshow-wrapper">
				
					<div class="preloader"></div>
				
					<ul id="featured" data-orbit data-options="timer_speed:5000; bullets:false; animation: 'fade'; navigation_arrows: false; slide_number: false; timer: false;">
					  <li>
						<img src="images/sgSkiier.jpg" />
						<div class="orbit-caption">Secure storage for an active lifestye</div>
					  </li>
					  <li>
						<img src="images/sgSkiier.jpg" />
						<div class="orbit-caption">Caption number two</div>
					  </li>
					  <li>
						<img src="images/sgSkiier.jpg" />
						<div class="orbit-caption">Caption number three</div>
					  </li>
					</ul>
				</div>
			</section>
			</div>
			
			<div class="row">
			<section id="firstSection">
				<div class="large-6 columns">
					<div class="introText">
						<p>Whether you’re hiking, biking, skiing, snowboarding, or just need a place to store anything, SnowGate keeps your belongings safe and secure.</p>
					</div>
				</div>
				<div class="large-6 columns">
					<div id="findLockers" class="panel radius cf">
						<p>Find Lockers</p>	
						
						<a href="#" id="resortsDropButton" class="button secondary dropdown radius" data-dropdown="dropResorts">Resorts</a>
						<ul id="dropResorts" class="f-dropdown" data-dropdown-content="">
							<li><a href="#">Snowmass</a></li>
							<li><a href="#">Copper</a></li>
							<li><a href="#">Winter Park</a></li>
						</ul>
						<br class="clearFix">
					</div>
					
					<div id="connectWithUs">
						<h2>Connect With Us</h2>
						<p>
							<img src="images/emailIcon.png"  alt="Email Us"/>
							<img src="images/facebookIcon.png"  alt="Find us on Facebook"/>
							<img src="images/twitterIcon.png"  alt="Follow us on Twitter"/>
							<img src="images/youTubeIcon.png"  alt="Watch us on YouTube"/>
						</p>
					</div>
				</div>
			</section>
			</div>
			
			
		<div class="row">
			<section id="secondSection">	
				<article>
				<div class="large-12 columns">								
					<div class="large-4 large-offset-8 columns story">
						<p>Find lockers, rent them and see your rental history from your smartphone! </p>
					</div>
				</div>
				</article>
			</section>
		</div>
		
		<div class="row">
			<section id="thirdSection">	
				<article>
				<div class="large-12 columns">								
					<div class="large-4 columns testimonialHeader">
						<h3>Testimonials</h3>
					</div>
					
					<div class="large-8 columns testimonialBody">
					
						<ul id="testimonials" data-orbit data-options="timer_speed:5000; bullets:false; animation:'fade'; navigation_arrows:false; slide_number:false; timer:false;">
					  		<li>
								<p>&#8220;I bring a backpack and extra gear while I’m up skiing. My feet get really sore from skiing all day, which is why I like to bring a pair of extra shoes to slip on after my last run of the day. I used snowgate to store all of my extra gear so I didn't lug around my gear to the hotel. My feet are very thankful.&#8221;</p>
						<p class="testimonialName">Jeff, Skier</p>
							</li>
							
							<li><p>&#8220;I got a brand new snowboard for Christmas; one day my friends and I decided to grab a quick lunch on the mountain. I set my snowboard on the resort racks just like everyone else, knowing I was only going to be gone for 20 minutes. When I came back, my snowboard was missing. After looking around for an hour and contacting resort security I was left snowboard-less, frustrated and angry.&#8221;</p>
								<p class="testimonialName">Dany, Snowboarder</p>
							</li>
							
							<li><p>&#8220;There are moments throughout the day when I need to take my children to the bathroom or take a break for a snack. Finding their rental skis and poles at the base can be the most complicated process. You wouldn't imagine how similar rental equipment looks. SnowGate allows me to spot their equipment right away, and store all of their stuff in one place so we can enjoy a less-stressful day.&#8221;</p>
								<p class="testimonialName">Terry, Skier</p>
							</li>
						</ul>
					</div><!--end #testimonialBody-->
				</div>
				</article>
			</section>
		</div>
		
		<div class="row">
			<section id="fourthSection">	
				<article>
				<div class="large-12 columns">								
					<div class="large-4 columns story">
						<p>Enjoy your aprés ski experience without worrying about your belongings!</p>
					</div>
				</div>
				</article>
			</section>
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
