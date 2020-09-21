<?php /* Template Name: contact */ ?>
<?php get_header(); ?>

<div class="contactcontainer">
	<div class="bannercontainercontact">
		<div class="container">
			<h2>
				GET IN TOUCH
			</h2>
			<p>
				Have a little something, something you wanna talk to us about? Well give us a ring, send us an email, or fill out that nifty form below.
			</p>
			<a href="#">
				Or, Start a Project
			</a>
		</div>
	</div>
	<div class="row" id="from">
		<div class="col-md-6">
			<div class="contentasdw">
				<h3>
					URBAN INFLUENCE
				</h3>
				<p>
					1508 10th Ave. <br> Seattle, WA 98122
				</p>
				<a href="" id="mail">
					info@urbaninfluence.com
				</a>
				<a href="" id="telno">
					206.973.5350
				</a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="contencform">
				<h4>
					Hit Us Up
				</h4>
				<?php echo do_shortcode('[contact-form-7 id="87" title="Contact form 1"]') ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>