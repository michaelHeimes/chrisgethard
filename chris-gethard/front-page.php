<?php
/**
 * The template for Front Page
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
		
		<div id="chris" class="cubes-wrap">				
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
					<div class="site-branding">
						<?php
						if ( is_front_page() ) :
							?>
							<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
							<?php
						else :
							?>
							<p class="site-title"><?php bloginfo( 'name' ); ?></p>
							<?php
						endif;
						$chris_gethard_description = get_bloginfo( 'description', 'display' );
						if ( $chris_gethard_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $chris_gethard_description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
					<div id="header-copy-wrap"><?php the_field('header_copy');?></div>
				</div>
			</div>
			
			<div class="cube lr-image-wrap desktop-cube-img">
			<?php 
				$image = get_field('header_photo');
				$size = 'cube-img'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
			?>
			</div>
			<div class="cube hr-image-wrap desktop-cube-img">
			<?php 
				$image = get_field('header_photo');
				$size = 'cube-img-2x'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
			?>
			</div>

<!--
			<?php 
				$image = get_field('header_photo');
				$size = 'cube'; // (thumbnail, medium, large, full or custom size)
				$imgArr = wp_get_attachment_image_src( $image, $size );

			?>
			<div class="cube lr-image-wrap desktop-cube-img" style="background-image: url(<?php echo $imgArr[0]; ?> ); background-repeat: no-repeat; background-size: cover;"></div>
			
			<?php 
				$image = get_field('header_photo_2x');
				$size = 'cube-2x'; // (thumbnail, medium, large, full or custom size)
				$imgArr = wp_get_attachment_image_src( $image, $size );
			?>
			<div class="cube hr-image-wrap desktop-cube-img" style="background-image: url(<?php echo $imgArr[0]; ?> ); background-repeat: no-repeat; background-size: cover;"></div>
-->
			
		</div>



		<?php if( have_rows('standup_cubes') ): 
			while( have_rows('standup_cubes') ): the_row();?>		
				<div id="standup" class="cubes-wrap">
					
					<div class="cube lr-image-wrap mobile-cube-img">
					<?php 
						$image = get_sub_field('photo');
						$size = 'cube-img'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
					</div>
					<div class="cube hr-image-wrap mobile-cube-img">
					<?php 
						$image = get_sub_field('photo');
						$size = 'cube-img-2x'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
					</div>		
					
					
					<div class="cube lr-image-wrap desktop-cube-img">
					<?php 
						$image = get_sub_field('photo');
						$size = 'cube-img'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
					</div>
					<div class="cube hr-image-wrap desktop-cube-img">
					<?php 
						$image = get_sub_field('photo');
						$size = 'cube-img-2x'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
					</div>				
					
					
					
<!--
					<?php 
						$image = get_sub_field('photo');
						$size = 'cube-img'; // (thumbnail, medium, large, full or custom size)
						$imgArr = wp_get_attachment_image_src( $image, $size );
					?>
					<div class="cube lr-image-wrap" style="background-image: url(<?php echo $imgArr[0]; ?> ); background-repeat: no-repeat; background-size: cover;"></div>
					<?php 
						$image = get_sub_field('photo_2x');
						$size = 'cube-img-2x'; // (thumbnail, medium, large, full or custom size)
						$imgArr = wp_get_attachment_image_src( $image, $size );
					?>
					<div class="cube hr-image-wrap" style="background-image: url(<?php echo $imgArr[0]; ?> ); background-repeat: no-repeat; background-size: cover;"></div>
-->
					
					<div class="cube">
								<div class="cube-inner-float">
									<?php if( have_rows('copy') ): 
										while( have_rows('copy') ): the_row();?>
											<h2 class="cube-title"><?php the_sub_field('title');?></h2>
											<div id="header-copy-wrap"><?php the_sub_field('copy');?></div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>

					</div>
					
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		
		
					<div id="schedule-wrap">
						<div id="live-shows" class="wrap-1000"</div>
							<div class="centered">
								<h2 class="boxed-title"><?php the_field('live_standup_title');?></h2>
							</div>
							
							<?php if ( have_posts() ) : ?>
							<div id="schedule-table-wrap">
								<div id="schedule-table">
		
									<?php 
								
									$currentdate = current_time('Ymd');
									
									// get posts
									$posts = get_posts(array(
								        'post_type' => 'live_shows',
								       	'meta_key'	=> 'date_time',
										'orderby'	=> 'meta_value',
										'order'		=> 'ASC',
								        'posts_per_page' => -1,
										'meta_query'=> array(
							            array(
							              'key' => 'date_time',
							              'compare' => '>=',
							              'value' => date("Y-m-d", strtotime("0 day")),
							              'type' => 'DATE'	))
									));
		
									if( $posts ) {
										foreach( $posts as $post ) {
											$date = new DateTime(get_field('date_time'));
											$enddate = new DateTime(get_field('end_date'));
											
	
											setup_postdata( $post );?>
											
											<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		
												<?php if( get_field('multiple_dates_at_the_same_venue') ): ?>
												
													<div scope="col" class="schedule-cell date-time"><span class="date"><?php echo $date->format('M j, Y'); ?></span>
		<span class="time"> – <?php echo $enddate->format('M j, Y'); ?></span></div>
											
													<div scope="col" class="schedule-cell venue"><a href="<?php the_field('venue_website'); ?>" target="blank"><?php the_field('venue_name'); ?></a><br><?php the_field('city_and_state'); ?><br><?php the_field('additional_info'); ?></div>
													<div scope="col" class="schedule-cell location-gps"><a href="<?php the_field('location_gps'); ?>" target="blank"><?php the_field('street_address'); ?></a></div>
													<?php if( get_field('ticket_links_for_multiple_dates') ): ?>
													
													
													
													<?php if( have_rows('ticket_links_for_multiple_dates') ):?>
														<div scope="col" class="multi-ticket-wrap">
															<h3><span class="show-all">All Dates</span><i class="fas fa-angle-down"></i></h3>
															<div class="all-dates-wrap">
															<?php while ( have_rows('ticket_links_for_multiple_dates') ) : the_row();?>
														<div scope="col" class="schedule-cell tickets multi-day-tickets"><span class="multi-dt"><?php $multidaytime = new DateTime(get_sub_field('day_and_time')); echo $multidaytime->format('M j, Y'); ?></span><br><span class="multi-dt"><?php $multidaytime = new DateTime(get_sub_field('day_and_time')); echo $multidaytime->format('g:i A'); ?></span><br><a href="<?php the_sub_field('link_to_buy_tickets'); ?>" target="blank">Buy <i class="fas fa-ticket-alt"></i></a></div>
														    <?php endwhile;?>
														</div>
														
														  <script>
														  jQuery( function() {
														    jQuery( ".multi-ticket-wrap" ).accordion({
																animated: 'bounceslide',
																easing: 'swing',
																active: false,
																heightStyle: content,
																collapsible: true
														    });
														  } );
														  </script>
														</div>
													<?php endif;?>											
													
													
													
													<?php else: ?>
													<div scope="col" class="schedule-cell tickets">Tickets On<br>Sale Soon!!!</div>
													<?php endif; ?>
		
												
												<?php else: ?>
												
		
													<div scope="col" class="schedule-cell date-time"><span class="date"><?php echo $date->format('M j, Y'); ?></span>
		@<span class="time"><?php echo $date->format('g:i A'); ?></span></div>
											
													<div scope="col" class="schedule-cell venue"><a href="<?php the_field('venue_website'); ?>" target="blank"><?php the_field('venue_name'); ?></a><br><?php the_field('city_and_state'); ?><br><?php the_field('additional_info'); ?></div>
													<div scope="col" class="schedule-cell location-gps"><a href="<?php the_field('location_gps'); ?>" target="blank"><?php the_field('street_address'); ?></a></div>
													<?php if( get_field('link_to_purchase_tickets') ): ?>
													<div scope="col" class="schedule-cell tickets"><a href="<?php the_field('link_to_purchase_tickets'); ?>" target="blank">Buy <i class="fas fa-ticket-alt"></i></a></div>
													<?php else: ?>
													<div scope="col" class="schedule-cell tickets">Tickets On<br>Sale Soon!</div>
													<?php endif; ?>
		
												
												<?php endif;?>
												</div><!-- #post-## -->
												
									<?php } 
										
										wp_reset_postdata();}?>		
										<?php endif; ?>
									<?php if( !$posts ) :?>
									<h5>No live dates right now. <br>Check back soon!</h5>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
					
					<div class="below-schedule-cubes-wrap">
						
						
						<?php if( have_rows('below_schedule_cubes') ): 
							while( have_rows('below_schedule_cubes') ): the_row();?>	

								<?php if( get_row_index() % 2 == 0 ):?>
								
									<?php if( have_rows('below_schedule_cube_row') ): 
										while( have_rows('below_schedule_cube_row') ): the_row();?>
										
											<div id="<?php the_sub_field('id_for_nav');?>" class="cubes-wrap">
												
												<div class="cube lr-image-wrap mobile-cube-img">
												<?php 
													$image = get_sub_field('photo');
													$size = 'cube-img'; // (thumbnail, medium, large, full or custom size)
													if( $image ) {
														echo wp_get_attachment_image( $image, $size );
													}
												?>
												</div>
												<div class="cube hr-image-wrap mobile-cube-img">
												<?php 
													$image = get_sub_field('photo');
													$size = 'cube-img-2x'; // (thumbnail, medium, large, full or custom size)
													if( $image ) {
														echo wp_get_attachment_image( $image, $size );
													}
												?>
												</div>

												<div class="cube">
													<div class="cube-inner-float">
														<h2 class="cube-title"><?php the_sub_field('title');?></h2>
														<div id="header-copy-wrap"><?php the_sub_field('copy');?></div>
													</div>
												</div>

												<div class="cube lr-image-wrap desktop-cube-img">
												<?php 
													$image = get_sub_field('photo');
													$size = 'cube-img'; // (thumbnail, medium, large, full or custom size)
													if( $image ) {
														echo wp_get_attachment_image( $image, $size );
													}
												?>
												</div>
												<div class="cube hr-image-wrap desktop-cube-img">
												<?php 
													$image = get_sub_field('photo');
													$size = 'cube-img-2x'; // (thumbnail, medium, large, full or custom size)
													if( $image ) {
														echo wp_get_attachment_image( $image, $size );
													}
												?>
												</div>
												
											</div>
									
										<?php endwhile; ?>
									<?php endif; ?>	
							        
							    <?php else:?>
							    
									<?php if( have_rows('below_schedule_cube_row') ): 
										while( have_rows('below_schedule_cube_row') ): the_row();?>
										
											<div id="<?php the_sub_field('id_for_nav');?>" class="cubes-wrap">

												<div class="cube lr-image-wrap">
												<?php 
													$image = get_sub_field('photo');
													$size = 'cube-img'; // (thumbnail, medium, large, full or custom size)
													if( $image ) {
														echo wp_get_attachment_image( $image, $size );
													}
												?>
												</div>
												<div class="cube hr-image-wrap">
												<?php 
													$image = get_sub_field('photo');
													$size = 'cube-img-2x'; // (thumbnail, medium, large, full or custom size)
													if( $image ) {
														echo wp_get_attachment_image( $image, $size );
													}
												?>
												</div>
												
												<div class="cube">
													<div class="cube-inner-float">
														<h2 class="cube-title"><?php the_sub_field('title');?></h2>
														<div id="header-copy-wrap"><?php the_sub_field('copy');?></div>
													</div>
												</div>
												
											</div>
								
										<?php endwhile; ?>
									<?php endif; ?>										
								
								<?php endif; ?>										
																
							<?php endwhile; ?>
						<?php endif; ?>						

					</div>
					
					
					

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
