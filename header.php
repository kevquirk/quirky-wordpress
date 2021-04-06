<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nineteen_Quirky
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Load fonts -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/fonts/londrina/londrina.css' ); ?>">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/fonts/pt-sans/pt-sans.css' ); ?>">
	<!-- Plausible analytics -->
	<script async defer data-domain="kevq.uk" src="https://stats.kevq.uk/js/index.js"></script>
	<script>window.plausible = window.plausible || function() { (window.plausible.q = window.plausible.q || []).push(arguments) }</script>

	<?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead">
	<div class="head-banner">
		<h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<nav id="site-navigation" class="main-navigation">
				<div class="nav">
					<!-- THE HAMBURGER -->
		      <label for="hamburger"><img alt="hamburger icon" src="<?php echo esc_url( get_template_directory_uri() . '/images/hamburger.svg' ); ?>" /></label>
		      <input type="checkbox" id="hamburger"/>

					<!-- MENU ITEMS -->
					<div id="navitems">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</div>
			</nav><!-- #site-navigation -->
</div>

<svg class="header-border" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 55.25"><defs><style>.cls-1{fill:var(--header);}</style></defs><title>triangle-uneven-top</title><g id="Layer_3" data-name="Layer 3"><polygon class="cls-1" points="500 55.24 375.51 19.02 0 55.24 0 0 500 0 500 55.24"/></g></svg>
</header><!-- #masthead -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nineteen-quirky' ); ?></a>
