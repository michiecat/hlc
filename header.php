<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Motif
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="outer-wrapper" style="background: url( <?php header_image(); ?> ); height: 380px; background-size: cover; background-repeat: no-repeat;"></div>


	<div class="inner-wrapper">
		<div id="page" class="hfeed site">
			<?php do_action( 'before' ); ?>
			<header id="masthead" class="site-header" role="banner">

				<div class="site-branding">

					<?php motif_the_site_logo(); ?>

					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

					<?php if ( '' != get_bloginfo( 'description' ) ) : ?>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php endif; ?>

					<div class="donate-button">
						<a href="http://donate.com/"><span><?php _e( 'Donate', 'hlc' ); ?></span></a>
					</div><!-- .donate-button-->
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<h1 class="menu-toggle"><?php _e( 'Menu', 'motif' ); ?></h1>
					<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'motif' ); ?>"><?php _e( 'Skip to content', 'motif' ); ?></a></div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
