<?php
/**
 * Template Name: Deep Dive
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Chris_Gethard
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="cubes-wrap">
				
				<div class="cube lr-image-wrap mobile-cube-img">
					<?php 
						$image = get_field('header_photo');
						$size = 'cube-img'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
				</div>
				<div class="cube hr-image-wrap mobile-cube-img">
					<?php 
						$image = get_field('header_photo');
						$size = 'cube-img-2x'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
				</div>
			
				<div class="cube">
					<div class="cube-inner-float">
						<?php
						while ( have_posts() ) :
							the_post();
				
							get_template_part( 'template-parts/content', 'page' );
				
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
				
						endwhile; // End of the loop.
						?>
						<div id="header-copy-wrap"><?php the_field('header_copy');?></div>
					</div>
				</div>
				<div class="cube lr-image-wrap desktop-cube-img">
				<?php 
					$image = get_field('header_photo');
					$size = 'cube'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
				</div>
				<div class="cube hr-image-wrap desktop-cube-img">
				<?php 
					$image = get_field('header_photo');
					$size = 'cube-2x'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
				</div>
			</div>
			

			<div id="videos" class="ddgs">
				<div class="centered">
					<h2 class="boxed-title">Videos</h2>
				</div>
				<div id="video-2-grid-wrap" class="wrap-1200">
				<div class="gutter1"></div>
				<?php if( have_rows('videos') ):
				    while ( have_rows('videos') ) : the_row();?>
						<?php if( have_rows('single_video') ):
						    while ( have_rows('single_video') ) : the_row();?>
						    
							    <?php if( get_sub_field('link_to_another_site?') ): ?>
						    
								    <div class="single_video">
									<a href="<?php the_sub_field('link_to_the_site_with_the_video');?>" target="_blank">
										<?php 
										$image = get_sub_field('image_for_video_on_another_site');
										$size = 'video-thumb'; // (thumbnail, medium, large, full or custom size)
										if( $image ) {
											echo wp_get_attachment_image( $image, $size );
										}
										?>	
										<i class="fas fa-external-link-alt"></i>
									</a>
									<h3><?php the_sub_field('title');?></h2>
										<div class="description-wrap">
									    	<p><?php the_sub_field('description');?></p>
										</div>
								    </div>
								    
								    <?php else:?>
								    
								    <div class="single_video">
									    <div class="video-wrap">
									    	<?php the_sub_field('video_link');?>
									    </div>
										<h3><?php the_sub_field('title');?></h2>
										<div class="description-wrap">
									    	<p><?php the_sub_field('description');?></p>
										</div>
								    </div>
								    
								<?php endif;?>
						    				    
						    <?php endwhile;
						endif;?>				    
				    <?php endwhile;
				endif;?>
				
				</div>
			</div>
			
			<div class="gradient-gap"></div>
			
			<div id="writing" class="ddgs">
				<div class="wrap-1200">
				<div class="centered">
					<h2 class="boxed-title">Writing</h2>
				</div>
				<?php if( have_rows('writing_cards') ):
				    while ( have_rows('writing_cards') ) : the_row();?>
						<?php if( have_rows('single_writing') ):
						    while ( have_rows('single_writing') ) : the_row();?>
						    
						    <div class="single_item">
							    
			    				<div class="single_item-img-wrap">
								<?php 
									$image = get_sub_field('logo');
									$size = 'full'; // (thumbnail, medium, large, full or custom size)
									if( $image ) {
										echo wp_get_attachment_image( $image, $size );
									}
								?>
								</div>
							    
							    <div class="single_item-text-wrap">
								    <h2><?php the_sub_field('title');?></h2>
								    <?php the_sub_field('description');?>
								    <div class="centered link_to_buy-wrap">
								    	<a href="<?php the_sub_field('link_to_read');?>" target="_blank">Read It!</a>
								    </div>
							    </div>
							    
							    
							    
						    </div>
						    				    
						    <?php endwhile;
						endif;?>				    
				    <?php endwhile;
				endif;?>
				
				</div>
			</div>
			
			<div class="gradient-gap"></div>
			
			<div id="press" class="ddgs">
				<div class="wrap-1200">
				<div class="centered">
					<h2 class="boxed-title">Press</h2>
					<p id="press_intro"><?php the_field('press_intro');?></p>
				</div>
				<?php if( have_rows('press') ):?>
					<div id="press-cards-wrap">
						<div class="gutter2"></div>
									
				    <?php while ( have_rows('press') ) : the_row();?>
						<?php if( have_rows('single_press_link') ):
						    while ( have_rows('single_press_link') ) : the_row();?>

						
						    <div class="single_press_link">
							    <div class="single_press_link-wrap">
								    <p class="source_name"><?php the_sub_field('source_name');?></p>
								    <h2><?php the_sub_field('article_title');?></h2>
								    <div class="centered link_to_buy-wrap">
								    	<a href="<?php the_sub_field('link');?>" target="_blank">Read It!</a>
								    </div>
							    </div>
						    </div>
						    				    
						    <?php endwhile;
						endif;?>	
				    <?php endwhile;?>
					</div>
				<?php endif;?>
				
				</div>
			</div>
			
			<div class="gradient-gap"></div>
			
			<div id="photos">
				<div class="wrap-1200">
					<div class="centered">
						<h2 class="boxed-title">Photos</h2>
					</div>				
					<?php echo do_shortcode('[unitegallery photos]');?>
				</div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
