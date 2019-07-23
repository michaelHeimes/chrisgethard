<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chris_Gethard
 */

?>

	</div><!-- #content -->
	<div id="mailing-list">
		<div class="wrap-800">
			<h3><?php the_field('title', 'option');?></h3>
			<p><?php the_field('copy', 'option');?></p>
				<!-- Begin MailChimp Signup Form -->
					<style type="text/css">
						#mc_embed_signup{background:transparent; clear:left; font:14px Helvetica,Arial,sans-serif; }
						/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
						   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
					</style>
					<div id="mc_embed_signup">
					<form action="https://thechrisgethardshow.us10.list-manage.com/subscribe/post?u=f4e24b4e28a587e11b9823edb&amp;id=f4513afc6d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
						
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email Address </label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f4e24b4e28a587e11b9823edb_f4513afc6d" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
					</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->
		</div>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="footer-social-wrap wrap-1000">
			<a class="menu-social-link" href="https://twitter.com/chrisgethard" target="_blank"><i class="fab fa-twitter"></i></a>
			<a class="menu-social-link" href="https://www.instagram.com/chrisgeth/" target="_blank"><i class="fab fa-instagram"></i></a>
			<a class="menu-social-link" href="https://www.facebook.com/chrisgethard/" target="_blank"><i class="fab fa-facebook"></i></a>
		</div>
		<div class="site-info wrap-1000">
			<p id="site-info">Copyright &copy;<?php echo date("Y"); ?> No Cool Kids, Inc.<br>Site by <a href="https://portfolio.cairndigitalmedia.com/" target="_blank">Cairn</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php if (is_page_template('page-template-deep-dive.php')):?>

					<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
					<script src="//unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
					<script>
					jQuery( document ).ready(function() {
						jQuery('.single_video').imagesLoaded( function() {
							jQuery('#video-2-grid-wrap').isotope({
							  itemSelector: '.single_video',
							  percentPosition: true,
							  masonry: {
							    // use outer width of grid-sizer for columnWidth
								columnWidth: '.single_video',
								gutter: '.gutter1'							  }
							})
						});
					});
					jQuery( document ).ready(function() {
						jQuery('#press-cards-wrap').isotope({
						  itemSelector: '.single_press_link',
						  percentPosition: true,
						  masonry: {
						    // use outer width of grid-sizer for columnWidth
							columnWidth: '.single_press_link',
							gutter: '.gutter2'							  }
						})
					});
					</script>
					
<?php endif;?>
<div id="btt-button-wrap"><a class="btt-button ps2id" href="#top">Back<br><i class="fas fa-angle-up"></i></a></div>
<div id="back-page-load-mask"></div>


</body>
</html>
