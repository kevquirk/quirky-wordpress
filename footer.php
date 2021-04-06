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
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 55.25"><defs><style>.cls-1{fill:var(--header);}</style></defs><title>triangle-uneven-bottom</title><g id="Layer_3" data-name="Layer 3"><polygon class="cls-1" points="0 0 124.49 36.23 500 0 500 55.24 0 55.24 0 0"/></g></svg>
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
				<br><p>All work licensed under <b>CC BY-SA 4.0</b> unless otherwise stated.<br>

					<div class="kb-club">
						<p><a taget="blank" href="https://512kb.club"><span class="kb-club-no-bg">512KB Club</span><span class="kb-club-bg">Blue Team</span></a></p>
					</div>

				<p><a class="top-link" href="#top">Back to top</a></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
