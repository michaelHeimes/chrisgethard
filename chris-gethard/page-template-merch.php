<?php
/**
 * Template Name: Merch
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
			

			<div id="merch-cards-wrap">
				<div class="wrap-1200">
				
				<?php if( have_rows('item_cards') ):
				    while ( have_rows('item_cards') ) : the_row();?>
						<?php if( have_rows('single_item') ):
						    while ( have_rows('single_item') ) : the_row();?>
						    
						    <div class="single_item">
							    
			    				<div class="lr-image-wrap single_item-img-wrap">
								<?php 
									$image = get_sub_field('image');
									$size = 'merch-card'; // (thumbnail, medium, large, full or custom size)
									if( $image ) {
										echo wp_get_attachment_image( $image, $size );
									}
								?>
								</div>
								<div class="hr-image-wrap single_item-img-wrap">
								<?php 
									$image = get_sub_field('image');
									$size = 'merch-card-2x'; // (thumbnail, medium, large, full or custom size)
									if( $image ) {
										echo wp_get_attachment_image( $image, $size );
									}
								?>
								</div>
							    
							    <div class="single_item-text-wrap">
								    <h2><?php the_sub_field('title');?></h2>
								    <?php the_sub_field('copy');?>
								    <div class="centered link_to_buy-wrap">
								    	<a href="<?php the_sub_field('link_to_buy');?>" target="_blank">Buy It!</a>
								    </div>
							    </div>
							    
							    
							    
						    </div>
						    				    
						    <?php endwhile;
						endif;?>				    
				    <?php endwhile;
				endif;?>
				
				</div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
