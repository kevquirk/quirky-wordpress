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

	<footer id="colophon" class="site-footer clear">

		<div class="widget-area">
			<div class="footer-left">
				<?php dynamic_sidebar( 'footer_area_one' ); ?>
			</div>
			<div class="footer-right">
				<?php dynamic_sidebar( 'footer_area_two' ); ?>
			</div>
		</div>

		<div class="footer-three">
			<?php dynamic_sidebar( 'footer_area_three' ); ?>
		</div>

			<div class="footer-base">
				<p>All work licensed under <b>CC BY-SA 4.0</b> unless otherwise stated.<br>

					<div class="kb-club">
						<p><a taget="blank" href="https://512kb.club"><span class="kb-club-no-bg">512KB Club</span><span class="kb-club-bg">Orange Team</span></a></p>
					</div>

				<p><a class="top-link" href="#top">Back to top</a></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
