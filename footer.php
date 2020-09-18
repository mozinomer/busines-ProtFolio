	
	<footer>
		  <svg id="svg" xmlns="http://www.w3.org/2000/svg" viewBox="-300 0 950 270" >
			    <path d="M-314,267 C105,364 400,100 812,279" fill="none" stroke="white" stroke-width="120" stroke-linecap="round"/>
		  </svg>
		  <div class="container">
		  		<div class="row">
		  			<div class="logofooter">
		  				<img src="https://www.supportliveagent.com/wp-content/uploads/2015/12/logo-2.png" width="300px">
		  			</div>
		  		</div>
		  </div>
		  <div class="containernew">
		  		<div class="footerbuttons">
		  			<a href="#" id="startProject">
		  				start a projects
		  			</a>
		  			<a href="#" id="startProject">
		  				see our work
		  			</a>
		  		</div>
		  		<div class="contentasd">
		  			<p>
		  				Orbit is a proud member of the Chicago community. We strive to educate and collaborate with like-minded businesses to make a difference environmentally and socially. Let’s collaborate.
		  				<a href="#">LEARN ABOUT OUR BCORP VALUES</a>
		  			</p>
		  		</div>
		  		<div class="newsletter">
		  			<p>
		  				Join over 16,000 people who receive web marketing tips every two weeks.
		  			</p>
		  			<div class="signupnewsletter">
		  				<input type="email" name="" placeholder="Email Adress">
		  				<button type="submit" id="newslettersubmit">Sign me up</button>
		  			</div>
		  			<p id="privacypolicy">  
		  				By signing up you agree to our <a href="">Privacy Policy.</a> 
		  			</p>
		  		</div>
		  </div>
	</footer>
	<div class="copyrights">
		<div class="container">
			<div class="flexedcopyrights">
				<p>
					&copy; All Right Reserved Support Live Agent 2020 | Designed and Devloped 
					<a href="#">
						<strong>Mozin Omer</strong>
					</a>
				</p>
			</div>
		</div>
	</div>


	<div class="getintouchwithus">
		<div class="overlayclose"></div>
		<div class="container">
			<div class="innercontainergtc">
				<h2>
					Contact Us
				</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<form>
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="" placeholder="Name" required>
						</div>
						<div class="col-md-6">
							<input type="email" name="" placeholder="Name" required>
						</div>
						<div class="col-md-12">
							<textarea placeholder="Message"></textarea>
						</div>
						<div class="col-md-12">
							<button type="submit">
								Submit
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
<script type="text/javascript">
	$(".slidersrvices").slick({
	    infinite: false,
	    slidesToShow: 4.5,
	    slidesToScroll: 4,
	    arrows: true,
	    rows: false,
	    centerMode: false,
	    responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 767,
	      settings: {
	        slidesToShow: 1.2,
	        slidesToScroll: 1
	      }
	    },
	  ]
	});
	$(".slidertestimonials").slick({
	    infinite: false,
	    slidesToShow: 1.4,
	    slidesToScroll: 1,
	    arrows: true,
	    rows: false,
	    centerMode: false,
	    responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 1.5,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 767,
	      settings: {
	        slidesToShow: 1.1,
	        slidesToScroll: 1
	      }
	    },
	  ]
	});
	$(".sliderHome").slick({
	    infinite: true,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: true,
	    rows: false,
	    centerMode: false,
	});

	// Hide header on scroll down
	var didScroll;
	var lastScrollTop = 5;
	var delta = 5;
	var navbarHeight = jQuery('header').outerHeight();
	jQuery(window).scroll(function(event){
	    didScroll = true;

	});

	setInterval(function() {
	    if (didScroll) {
	        hasScrolled();
	        didScroll = false;
	    }
	}, 250);


	jQuery()
	function hasScrolled() {
	    var st = jQuery(this).scrollTop();
	    
	    // Make scroll more than delta
	    if(Math.abs(lastScrollTop - st) <= delta)
	        return;
	    
	    // If scrolled down and past the navbar, add class .nav-up.
	    if (st > lastScrollTop && st > navbarHeight){
	        // Scroll Down
	        jQuery('header').removeClass('scroll-down').addClass('scroll-up');

	         // console.log('Scroll down'+lastScrollTop);		         
	    } else {
	        // Scroll Up
	        if(st + jQuery(window).height() < jQuery(document).height()) {
	            jQuery('header').removeClass('scroll-up').addClass('scroll-down');
	           
	            if(jQuery(window).scrollTop() <= 50){
	            	 jQuery('header').removeClass('scroll-down'); 	
	              }	
	        }
	    }
	  
	    lastScrollTop = st;
	}
	$('#getintouch').click( function(e) {
		e.preventDefault();
		$('body').css({'overflow' : 'hidden'});
		$('.getintouchwithus').addClass('active');
		$('.innercontainergtc').css({'border': '1px solid #fff'}).animate({
			'width': 100+'%',
		}, 800);
		$('.innercontainergtc').animate({
			'height': '640px',
			'padding': '40px',
		}, 1000);
	});
	$('.overlayclose').click( function(e) {
		e.preventDefault();
		$('body').css({'overflow-y' : 'scroll'});
		$('.getintouchwithus').removeClass('active');
		$('.innercontainergtc').css({'border': '1px solid transparent'}).animate({
			'height': 0 +'px',
			'padding': '0px',
		}, 800);
		$('.innercontainergtc').animate({
			'width': '0px',
		}, 500);
	});
	$('.hamburger').click( function(e) {
		$(this).toggleClass('active');
		$('.nav-menu').toggleClass('active');
	})
</script>
</html>