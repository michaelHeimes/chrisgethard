<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Chris_Gethard
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if( get_field('alternative_page_title') ): ?>
			<?php the_title( '<h1 class="entry-title" style="display:none;">', '</h1>' ); ?>
			<p class="entry-title"><?php the_field('alternative_page_title'); ?></p>
		<?php else:?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php endif; ?>
				
		<?php if( get_field('tagline') ): ?>
			<p id="tagline"><?php the_field('tagline');?></p>
		<?php endif; ?>
	</header><!-- .entry-header -->




</article><!-- #post-<?php the_ID(); ?> -->
