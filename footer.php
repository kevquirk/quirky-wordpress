<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nineteen_Quirky
 */

?>

	<footer id="colophon" class="site-footer">

		<div class="widget-area">
			<div class="widgets">
				<div class="footer-widget footer-left">
					<?php dynamic_sidebar( 'footer_area_one' ); ?>
				</div>
				<div class="footer-widget footer-middle">
					<?php dynamic_sidebar( 'footer_area_two' ); ?>
				</div>
				<div class="footer-widget footer-right">
					<?php dynamic_sidebar( 'footer_area_three' ); ?>
				</div>
			</div>
		</div>

			<p>All work licensed under <b>CC BY-SA 4.0</b> unless otherwise stated.<br>

			<a href="https://kevq.uk/disclaimer">Disclaimer</a> | <a href="https://kevq.uk/license-information">License Info</a> | <a href="https://kevq.uk/privacy">Privacy</a> | <a href="https://kevq.uk/buy-me-a-coffee">Coffee</a> | <a href="https://kevq.uk/rss-feeds">RSS</a><br>

			<p><a target="blank" href="https://512kb.club"><img alt="512 Club orange team banner" src="/wp-content/themes/quirky/images/orange-team.svg" /></a></p>

			<p><a class="top-link" href="#top">^ TOP ^</a></p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
