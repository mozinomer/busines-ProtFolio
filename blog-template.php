<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>



	<div id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8 paddingNull">
					<?php  
					    $koko = array(  
					        'post_type' => 'post',
					        'posts_per_page' => 1,
					    );
					    $opop = new WP_Query( $koko );   
					    while ( $opop->have_posts() ) { 
					    	$opop->the_post();  ?>
								<div class="biggerPost">
									<div class="biggerimage">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="biggerpostImage">
									</div>
									<span class="recomendedPost">
										recomended
									</span>
									<h2>
										<?php the_title(); ?>
									</h2>
									<?php the_excerpt(); ?>
									<div class="authorinfo">
										<img src="https://www.outsourcedesigning.com/wp-content/uploads/2019/03/4.jpg">
										<h5><?php echo get_the_author(); ?></h5>
									</div>
									<a href="<?php the_permalink(); ?>">read more</a>
								</div>
						    <?php }
					    wp_reset_query(); 
					?>
				</div>
				<div class="col-md-4 smallpostcontainer	">
					<?php  
					    $qwe = array(  
					        'post_type' => 'post',
					        'posts_per_page' => 3, 
					    );
					    $asd = new WP_Query( $qwe );   
					    while ( $asd->have_posts() ) : $asd->the_post();  ?>
								<div class="columnpostsmaller">
									<div class="editable">
										<i class="fa fa-pencil"></i>
										<span><?php echo get_the_date(); ?></span>
									</div>
									<h4>
										<?php the_title(); ?>
									</h4>
									<div class="authorinfo">
										<img src="https://www.outsourcedesigning.com/wp-content/uploads/2019/03/4.jpg">
										<h5><?php echo get_the_author(); ?><span></span></h5>
									</div>
								</div>
					    <?php endwhile;
					    wp_reset_query(); 
					?>
				</div>
			</div>
			<div class="secondroBlog">
				<div class="row">
					<?php  
					    $yui = array(  
					        'post_type' => 'post',
					        'posts_per_page' => -1, 
					    );
					    $zxc = new WP_Query( $yui );   
					    while ( $zxc->have_posts() ) : $zxc->the_post();  ?>
								<div class="col-md-6">
									<div class="boxcontainerineerBLogpost">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
										<h2>
											<?php the_title(); ?>
										</h2>
										<p>
											<?php the_excerpt(); ?>
										</p>
										<a href="<?php the_permalink(); ?>" id="startProject">
											Read Post
										</a>
									</div>
								</div>
					    <?php endwhile;
					    wp_reset_query(); 
					?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>