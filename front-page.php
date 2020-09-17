<?php get_header(); ?>




	<div class="section1homepage" style="background: url('<?php the_field('bannerbg'); ?>');">
		<div class="container">
			<div class="sliderHome">
				<?php
					if( have_rows('sliderbanner') ):
					    while( have_rows('sliderbanner') ) : the_row(); ?>
								<div class="slidesContent">
									<h6>
										<?php the_sub_field('smallheading'); ?>
									</h6>
									<h4>
										<?php the_sub_field('heading'); ?>
									</h4>
									<p>
										<?php the_sub_field('contentslilder'); ?>
									</p>
									<a href="<?php the_sub_field('linkslider'); ?>">
										<?php the_sub_field('linktetx'); ?>
									</a>
								</div>
					    <?php endwhile;
					endif; 
				?>
			</div>
		</div>

		<div class="socials displayFlex">
			<div class="container">
				<span>
					Follow us on: 
				</span>
				<ul class="displayFlex alignCenter">
					<li>
						<a href="#">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-linkden"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-dribble"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="section2homepage">
		<div class="container">
			<h2>
				<?php the_field('heading2'); ?>
			</h2>
			<p>
				<?php the_field('content2'); ?>
			</p>
			<a href="<?php the_field('url2'); ?>">
				<?php the_field('button2'); ?>
			</a>
			<div class="row">
				<img id="image1cons" src="<?php the_field('imag21'); ?>">
				<img id="image2cons" src="<?php the_field('imag22'); ?>">
				<img id="image3cons" src="<?php the_field('imag23'); ?>">
			</div>
		</div>
	</div>
	<div class="serviceshomepage">
		<div class="container">
			<h2>
				Our Services
				<a href="#">
					read more
				</a>
			</h2>
			<div class="servicescontainer">
				<div class="slidersrvices">
					<?php  
					    $args = array(  
					        'post_type' => 'services',
					        'post_status' => 'publish',
					        'posts_per_page' => 8, 
					    );
					    $loop = new WP_Query( $args );   
					    while ( $loop->have_posts() ) : $loop->the_post();  ?>
								<div class="silideservice">
									<a href="<?php the_permalink(); ?>">
										<img src="<?php the_field('icons'); ?>">
										<div href="#">
											<h5>
												<?php the_title(); ?>
											</h5>
											<p>
												<?php the_excerpt(); ?>
											</p>
											<span id="readmore">
												read More
											</span>
										</div>
									</a>
								</div>
					    <?php endwhile;
					    wp_reset_postdata(); 
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="section4homepage">
		<div class="container">
			<div class="row" id="row1section4">
				<div class="col-md-6">
					<h2>
						<?php the_field('heading3'); ?>
					</h2>
					<p>
						<?php the_field('content3'); ?>
					</p>
				</div>
				<div class="col-md-6"> 
					<img src="<?php the_field('icon3'); ?>">
				</div>
			</div>
			<div class="row" id="row2section4">
				<div class="col-md-8">
					<div class="boxcotainermd8">
						<h6>
							Mobile App
						</h6>
						<div class="neechaycontent">
							<h4>
								<a href="https://www.tivix.com/case-studies/dovemed" title="Read more" target="">
									Reliable medical information for everyone
								</a>
							</h4>
							<a href="https://www.tivix.com/case-studies/dovemed" title="Read more" target="" class="more more--white more--underline">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="boxcontainersmallsection4">
						<h6>
							mobile app
						</h6>
						<h4><a href="https://www.tivix.com/case-studies/best-egg" title="Read more" target="">Building an $8 billion loan platform to bypass retail banks.</a></h4>
						<a href="https://www.tivix.com/case-studies/best-egg" title="Read more" target="" class="more more--white more--underline">Read more</a>
					</div>
					<div class="boxcontainerminisection4">
						<h6>
							mobile app
						</h6>
						<h4><a href="https://www.tivix.com/case-studies/best-egg" title="Read more" target="">Building an $8 billion loan platform to bypass retail banks.</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clientsays">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>
						<?php the_field('heading4'); ?>
					</h3>
					<p>
						<?php the_field('contentas'); ?>
					</p>
				</div>
				<div class="col-md-8">
					<div class="slidertestimonials">
						<?php
							if( have_rows('testimonials') ):
							    while( have_rows('testimonials') ) : the_row(); ?>
										<div class="slidecontentslidertestimonials">
											<div class="boxcontainerslidertestimonials">
												<p><?php the_sub_field('contents'); ?></p>
												<div class="nameconteni">
													<h6>
														<?php the_sub_field('author'); ?>
														<span><?php the_sub_field('position'); ?></span>
													</h6>
												</div>
											</div>
										</div>
							    <?php endwhile;
							endif; 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="calltoaction">
		<div class="container">
			<h2 class="text-center">
				Interested in discussing a project?
			</h2>
			<p>
				Let’s build something great.
			</p>
			<a href="#" id="getintouch">
				Get in touch
			</a>
		</div>
	</div>
	<div class="ourclients">
		<div class="container">
			<h2 class="text-center">
				Our Client’s products
			</h2>
			<p class="text-center">
				were featured in
			</p>
			<div class="row">
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
			</div>	
		</div>
	</div>

<?php get_footer(); ?>