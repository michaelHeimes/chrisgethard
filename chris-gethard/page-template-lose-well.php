<?php
/**
 * Template Name: Lose Well
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
			</div>
			
			<div class="entry-content">
				
				<div class="lw-intro-wrap">

						<p class="wrap-800"><b>Order today at these online retailers:</b></p>
							<ul class="wrap-800">
								<li><a href="http://ads.harpercollins.com/athrweb?isbn=9780062691415&amp;retailer=amazon&amp;locale=US" target="_blank" rel="noopener" data-saferedirecturl="https://www.google.com/url?q=http://ads.harpercollins.com/athrweb?isbn%3D9780062691415%26retailer%3Damazon%26locale%3DUS&amp;source=gmail&amp;ust=1539793437444000&amp;usg=AFQjCNFO8aLJapb7jkYTJtlHMZH7qdeHDw">Amazon</a></li>
								<li><a href="http://ads.harpercollins.com/athrweb?isbn=9780062691415&amp;retailer=barnesandnoble&amp;locale=US" target="_blank" rel="noopener" data-saferedirecturl="https://www.google.com/url?q=http://ads.harpercollins.com/athrweb?isbn%3D9780062691415%26retailer%3Dbarnesandnoble%26locale%3DUS&amp;source=gmail&amp;ust=1539793437444000&amp;usg=AFQjCNEZ6eRvBTKOzdwjDquplEWTdBUR6Q">Barnes & Noble</a></li>
								<li><a href="http://ads.harpercollins.com/athrweb?isbn=9780062691415&amp;retailer=booksamillion&amp;locale=US" target="_blank" rel="noopener" data-saferedirecturl="https://www.google.com/url?q=http://ads.harpercollins.com/athrweb?isbn%3D9780062691415%26retailer%3Dbooksamillion%26locale%3DUS&amp;source=gmail&amp;ust=1539793437444000&amp;usg=AFQjCNHqz6r3CHVH-qBNEq7hBcf0CkBZnA">Books-a-Million</a></li>
								<li><a href="http://ads.harpercollins.com/athrweb?isbn=9780062691415&amp;retailer=indiebound&amp;locale=US" target="_blank" rel="noopener" data-saferedirecturl="https://www.google.com/url?q=http://ads.harpercollins.com/athrweb?isbn%3D9780062691415%26retailer%3Dindiebound%26locale%3DUS&amp;source=gmail&amp;ust=1539793437444000&amp;usg=AFQjCNHtPpPNO0TtyBzTiPUkeJUY211IVQ">IndieBound</a></li>
								<li><a href="http://ads.harpercollins.com/athrweb?isbn=9780062691439&amp;retailer=apple&amp;locale=US" target="_blank" rel="noopener" data-saferedirecturl="https://www.google.com/url?q=http://ads.harpercollins.com/athrweb?isbn%3D9780062691439%26retailer%3Dapple%26locale%3DUS&amp;source=gmail&amp;ust=1539793437444000&amp;usg=AFQjCNGda03P9Bsah6CL70hPrWo-PQoIeg">Apple</a></li>
							</ul>
				</div>
				
<!--
				<div id="how-to-pre-order-wrap" class="wrap-1200">
					<h2 class="boxed-title">How To Preorder</h2>
					<div id="step-card-wrap">
						<div class="step-card" id="step-card-1">
							<p class="step-card-title"><span>1. </span>Preorder <i>Lose Well</i> at one of these retailers:</p>
							<ul>
								<li><a href="http://ads.harpercollins.com/athrweb?isbn=9780062691415&retailer=amazon&locale=US" target="_blank">Amazon</a></li>
								<li><a href="http://ads.harpercollins.com/athrweb?isbn=9780062691415&retailer=barnesandnoble&locale=US" target="_blank">Barnes & Noble</a></li>
								<li><a href="http://ads.harpercollins.com/athrweb?isbn=9780062691415&retailer=booksamillion&locale=US" target="_blank">Books-a-Million</a></li>
								<li><a href="http://ads.harpercollins.com/athrweb?isbn=9780062691415&retailer=indiebound&locale=US" target="_blank">IndieBound</a></li>
								<li><a href="http://ads.harpercollins.com/athrweb?isbn=9780062691439&retailer=apple&locale=US" target="_blank">Apple</a></li>
							</ul>
						</div>
						<div class="step-card" id="step-card-2">
							<p class="step-card-title"><span>2. </span>Send proof of purchase to <a href="mailto:loseproudlylosewell@gmail.com">loseproudlylosewell@gmail.com</a> and include one of the below words in the subject line to choose your thank-you gift.</p>
							<div id="connect-3" class="connect-box"><span class="connect-line"></span><i class="fas fa-caret-down"></i></div>
							<div id="connect-4" class="connect-box"><span class="connect-line"></span><i class="fas fa-caret-down"></i></div>
							<div id="connect-5" class="connect-box"><span class="connect-line"></span><i class="fas fa-caret-down"></i></div>
						</div>
						<div class="step-card" id="step-card-3">
							<p class="step-card-title">For The Chris Gethard Show Fans:<span>3.<span class="step-number-sub">a</span> </span></p>
							<p>Subject Line: <b>HUNDO</b><br>
						Gift: A recorded video message where Chris encourages you to make your art and follow your dreams.</p>
							<p>Subject Line: GOOGY<br>
						Gift: A recorded video message where Vacation Jason encourages you to only read the funny chapters of this book and ignore all the stuff about how you have to work hard.</p>
						</div>
						<div class="step-card" id="step-card-4">
							<p class="step-card-title">For Beautiful/Anonymous Fans:<span>3.<span class="step-number-sub">b</span></p>
							<p>Subject Line: <b>BEAUTIFUL</b><br>
						Gift: A recorded audio file from Chris that you can use as your outgoing voicemail message.</p>
						</div>
						<div class="step-card" id="step-card-5">
							<p class="step-card-title">For Anyone Who Orders 5+ Copies:<span>3.<span class="step-number-sub">c</span></p>
							<p>Subject Line: <b>CALL ME</b><br>
						A personal note from Chris: If for some reason you want five copies of this book – maybe you are giving them away as gifts, maybe you are teaming up with pals to get this incentive, maybe you just like throwing money away – then I owe you big time, and want to step up with a big thank you! Gift: Chris will call you for a two-minute long thank-you chat. This will be like your own mini-Beautiful/Anonymous or TCGS phone-call moment!</p>
						</div>
					</div>
				
				</div>
-->
				
				<div id="about-the-book-wrap">
					<div class="wrap-1200">
						<div class="centered">
							<h2 class="boxed-title">About The Book</h2>
						</div>
						
						<div id="about-copy-img-wrap">
							<img src="/wp-content/uploads/2018/08/LoseWellBook.png" alt="" width="640" height="807" class="alignright size-large wp-image-68 lw-book-img" />
							<?php
							the_content();
					
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'chris-gethard' ),
								'after'  => '</div>',
							) );
							?>
				
						</div>
						
					</div>
				</div>
				
				<div id="quotes-wrap" class="wrap-800">
					<div class="centered">
						<h2 class="boxed-title">What People<br>Are Saying</h2>
					</div>
					
					<div id="quote-cards-wrap">
						<?php if( have_rows('quotes') ):
						    while ( have_rows('quotes') ) : the_row();?>
						    	<div class="single_quote">
									<?php if( have_rows('single_quote') ):
								    	while ( have_rows('single_quote') ) : the_row();?>			    
								    
								        <div class="quote-text-wrap"><?php the_sub_field('text');?></div>
								        <div class="author-title-wrap">
									        <p class="quote-author"><?php the_sub_field('author');?></p>
									        <div class="author-position"><?php the_sub_field('author_position');?></div>
								        </div>
							
							
									    <?php endwhile;
									endif;?>
								</div>				
						    <?php endwhile;
						endif;?>
					</div>
					<h3 style="text-align: center;">For press inquiries regarding this book, please contact <a href="mailto:Courtney.Nobile@harpercollins.com">Courtney.Nobile@harpercollins.com</a></h3>
				</div>
				

			</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
