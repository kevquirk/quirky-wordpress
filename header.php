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
	<!-- START PLAUSIBLE ANALYTICS -->
	<script async defer data-domain="kevq.uk" src="https://stats.kevq.uk/js/index.js"></script>
	<!-- END PLAUSIBLE ANALYTICS -->

	<?php wp_head(); ?>
</head>

<body href="#top" <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead">
	<div class="head-banner">
		<h1 class="site-logo"><a href="https://kevq.uk">🚀kq</a></h1>
		<div class="nav">
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
</div>
</header><!-- #masthead -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nineteen-quirky' ); ?></a>
