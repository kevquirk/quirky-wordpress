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

<body href="#top" <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead">
	<div class="head-banner">
		<h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<nav id="site-navigation" class="main-navigation">
				<div class="nav">
					<!-- THE HAMBURGER -->
		      <label for="hamburger"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/hamburger.svg' ); ?>" /></label>
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

<!-- ADD THE DRIPS! -->
<svg class="drips" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4687 447"><path fill="var(--header)" fill-opacity="1" d="M 0.00,0.00
	 C 0.00,0.00 4687.00,0.00 4687.00,0.00
		 4687.00,0.00 4687.00,102.30 4687.00,102.30
		 4687.00,102.30 4598.75,102.30 4598.75,102.30
		 4490.33,102.30 4610.88,296.00 4543.14,296.88
		 4475.40,297.77 4576.50,102.30 4481.96,102.30
		 4481.96,102.30 4418.01,102.30 4418.01,102.30
		 4276.00,102.30 4387.47,227.39 4309.56,227.39
		 4231.65,227.39 4393.58,102.30 4223.36,102.30
		 4223.36,102.30 4186.10,99.73 4167.75,102.30
		 4107.60,110.73 4064.97,111.31 3992.56,152.34
		 3920.15,193.37 3886.94,110.74 3831.28,102.30
		 3812.04,99.39 3772.89,102.30 3772.89,102.30
		 3677.95,102.30 3803.18,449.27 3708.93,446.99
		 3614.68,444.70 3790.51,102.30 3658.88,102.30
		 3658.88,102.30 3584.60,99.25 3547.65,102.30
		 3452.13,110.21 3386.00,148.94 3264.02,149.56
		 3142.05,150.18 3032.44,95.86 2915.64,104.29
		 2821.60,111.08 2737.56,182.72 2643.29,180.64
		 2559.63,178.80 2487.42,115.53 2404.79,102.30
		 2340.31,91.99 2208.87,102.30 2208.87,102.30
		 2022.50,102.30 2164.98,239.55 2084.47,234.00
		 2003.97,228.45 2157.48,102.30 1990.62,102.30
		 1990.62,102.30 1934.23,98.01 1906.54,102.30
		 1795.33,119.53 1681.73,228.58 1584.78,204.47
		 1467.68,171.20 1468.17,133.73 1403.75,113.42
		 1379.25,105.70 1348.28,102.30 1327.49,102.30
		 1141.05,102.30 1304.07,369.86 1206.32,369.62
		 1108.57,369.38 1330.22,102.30 1086.75,102.30
		 844.04,102.30 981.29,235.09 914.64,235.09
		 854.75,235.09 1012.68,102.30 753.07,102.30
		 620.96,102.30 728.34,195.84 672.43,194.03
		 616.52,192.23 712.29,102.30 605.69,102.30
		 605.69,102.30 500.03,102.30 500.03,102.30
		 344.77,102.30 501.48,308.00 408.26,308.00
		 315.05,308.00 458.22,102.30 316.50,102.30
		 251.81,102.30 216.93,125.07 132.92,165.20
		 48.91,205.33 0.00,102.30 0.00,102.30
		 0.00,102.30 0.00,0.00 0.00,0.00 Z"></path></svg><!--END DRIPS -->
</header><!-- #masthead -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nineteen-quirky' ); ?></a>
