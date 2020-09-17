<?php /* Template Name: Case Studies */ ?>
<?php get_header(); ?>


	<div class="container" id="casestudies">
		<h2>
			We've got some great partners
		</h2>
		<p>
			in all kinds of sectors
		</p>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<?php  
						$n = 0;
					    $args = array(  
					        'post_type' => 'casestudies',
					        'posts_per_page' => 3, 
					    );
					    $loop = new WP_Query( $args );   
					    while ( $loop->have_posts() ) : $loop->the_post();  ?>
							<?php 
							    if ( $n % 3 === 0 ) {
							    	$classs = 'col-md-12';
							    } else {
							    	$classs = 'col-md-6';
							    } ?>

								<div class="<?php echo $classs; ?>">
									<div class="innercontainer">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="bgimage">
										<div class="contentcase">
											<h4 class="titlecase">
												<?php the_title(); ?>
											</h4>
												<?php the_excerpt(); ?>
										</div>
										<a href="<?php the_permalink(); ?>" class="readoutcase">
											Read Our case Study
										</a>
									</div>
								</div>
					    <?php 
					    	$n = $n + 1	; endwhile;
					    wp_reset_postdata(); 
					?>
				</div>
			</div>
			<!-- <div class="col-md-1">
				
				<div class="rightlistcategory">
					<a href="#">
						Designing
					</a>
					<a href="#">
						Developement
					</a>
					<a href="#">
						Chat Support 
					</a>
					<a href="#">
						Email Support
					</a>
				</div>
			</div> -->
		</div>
	</div>

<?php get_footer(); ?>