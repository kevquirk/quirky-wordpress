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
<svg class="drips" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4687 549"><path fill="#212121" fill-opacity="1" d="M 0.00,0.00
           C 0.00,0.00 4687.00,0.00 4687.00,0.00
             4687.00,0.00 4687.00,204.05 4687.00,204.05
             4687.00,204.05 4598.75,204.05 4598.75,204.05
             4490.33,204.05 4610.88,397.89 4543.14,398.77
             4475.40,399.66 4576.50,204.05 4481.96,204.05
             4481.96,204.05 4418.01,204.05 4418.01,204.05
             4276.00,204.05 4387.47,329.23 4309.56,329.23
             4231.65,329.23 4393.58,204.05 4223.36,204.05
             4223.36,204.05 4186.10,201.48 4167.75,204.05
             4107.60,212.48 4064.97,213.06 3992.56,254.12
             3920.15,295.19 3886.94,212.49 3831.28,204.05
             3812.04,201.13 3772.89,204.05 3772.89,204.05
             3677.95,204.05 3803.18,551.28 3708.93,548.99
             3614.68,546.70 3790.51,204.05 3658.88,204.05
             3658.88,204.05 3584.60,200.99 3547.65,204.05
             3452.13,211.96 3386.00,250.72 3264.02,251.34
             3142.05,251.97 3041.80,151.22 2880.29,170.67
             2718.78,190.13 2717.72,198.48 2635.59,204.05
             2612.47,205.62 2566.07,204.05 2566.07,204.05
             2406.57,204.05 2533.64,396.39 2465.97,390.43
             2398.30,384.46 2526.74,204.05 2404.79,204.05
             2404.79,204.05 2340.10,204.05 2340.10,204.05
             2153.73,204.05 2296.21,341.40 2215.71,335.84
             2135.20,330.29 2288.72,204.05 2121.85,204.05
             2121.85,204.05 2082.45,203.22 2062.77,204.05
             1985.63,207.30 1921.72,208.16 1831.97,223.53
             1742.22,238.89 1636.26,308.32 1531.66,312.54
             1427.06,316.76 1453.14,235.93 1403.75,215.18
             1380.06,205.23 1348.28,204.05 1327.49,204.05
             1141.05,204.05 1304.07,471.81 1206.32,471.56
             1108.57,471.32 1298.27,204.05 1086.75,204.05
             1086.75,204.05 980.24,246.09 890.99,251.26
             801.73,256.43 753.07,204.05 753.07,204.05
             648.27,168.18 728.34,297.66 672.43,295.85
             616.52,294.04 712.29,204.05 605.69,204.05
             605.69,204.05 500.03,204.05 500.03,204.05
             344.77,204.05 501.48,409.90 408.26,409.90
             315.05,409.90 458.22,204.05 316.50,204.05
             251.81,204.05 216.93,226.84 132.92,267.00
             48.91,307.16 -0.00,204.05 -0.00,204.05
             -0.00,204.05 0.00,0.00 0.00,0.00 Z"></path></svg><!--END DRIPS -->
</header><!-- #masthead -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nineteen-quirky' ); ?></a>
