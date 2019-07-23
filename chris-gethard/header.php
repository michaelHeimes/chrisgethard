<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chris_Gethard
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php if(is_singular('live_shows')):?>
	<meta name='robots' content='noindex, nofollow' />
	<?php endif;?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - AdWords: 799112279 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-799112279"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'AW-799112279');
	</script>
</head>

<body <?php body_class(); ?>>
<div id="top"></div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'chris-gethard' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="hamburger-menu-wrapper">	
			<a class="ps2id" href="#top">
			<div class="hamburger-menu"></div>	 
			<div id="open-button" class="hamburger-button"></div> 
			<div id="close-button" class="hamburger-button"></div>
			<span>Menu</span>
			</a>
		</div>
		
		
		<nav id="site-navigation" class="main-navigation">
<!-- 			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'chris-gethard' ); ?></button> -->


			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		<?php if (!is_front_page()):?>
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$chris_gethard_description = get_bloginfo( 'description', 'display' );
				if ( $chris_gethard_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $chris_gethard_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
		<?php endif;?>

		
<!--
<div class="cd-overlay-nav"><span></span></div>
<div class="cd-overlay-content"><span></span></div>
-->

	<div id="open-sweep-wrap">
		<div id="open-sweep-in" class="open-sweep"></div>
		<div id="open-sweep-cover" class="open-sweep"></div>
	</div>
	
	<div id="close-sweep-wrap">
		<div id="close-sweep-in" class="close-sweep"></div>
		<div id="close-sweep-cover" class="close-sweep"></div>		
	</div>
	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
