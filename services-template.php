<?php /* Template Name: services */ ?>
<?php get_header(); ?>


	<div class="bannerservices">
		<div class="container">
			<h2>
				Communication and IT Solutions
			</h2>
			<p>
				We manage hundreds of clients with tens of thousands of users with best in class tools and processes. See what we can do for your company. 
			</p>
			<a href="#">
				EXPLORE OUR SERVICES NOW
			</a>
		</div>
	</div>


	<div class="secondsectionservices">
		<div class="container">
			<h6>
				IT is what we do
			</h6>
			<h2>
				CRAFTED UNIQUELY FOR YOUR BUSINESS
			</h2>
			<div class="row">
				<div class="col-md-6">
					<p>
						Implemented correctly, IT is your greatest ally.  A strategic IT management plan will improve productivity, reduce downtime, detect problems early, secure critical information, and much more.
					</p>
				</div>
				<div class="col-md-6">
					<p>
						We have over 40 years of experience in tech support, tech management, computer networking, and infrastructure strategy.  We craft IT solutions that propel your business forward.
					</p>
				</div>
			</div>
		</div>
	</div>



	<div class="servicescontainr">
		<div class="containers">
			<div class="row">
				<?php  
				    $args = array(  
				        'post_type' => 'services',
				        'posts_per_page' => -1, 
				    );
				    $loop = new WP_Query( $args );   
				    while ( $loop->have_posts() ) : $loop->the_post();  ?>
						<div class="col-md-6">
							<div class="servicesinnrcontainer">
								<img src="<?php the_field('icons') ?>">
								<h2><?php the_title(); ?></h2>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink() ?>" id="startProject">
									learn more	
								</a>
							</div>
						</div>
				    <?php endwhile;
				    wp_reset_query(); 
				?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>