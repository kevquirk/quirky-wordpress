<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nineteen_Quirky
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			?>

			<!-- Add newsletter to the bottom of all posts. -->
			<div class="subscribe-form">
				<h2>📰 Cool people get newsletters!</h2>

			  <p>Do you want to be successful, respected and rich? Do you want all your dreams to come true? If so, <del>ignore this box because I’m an idiot and can’t help</del> you need my newsletter! <a class="small" href="/newsletter">More info</a></p>

			  <p><b>⚠️ Warning:</b> Reading my newsletter <b>will not</b> make you successful, respected or rich and is likely to significantly reduce your intelligence. May contain nuts. 🥜</p>

			  <form action="https://newsletter.kevq.uk/subscribe" method="POST" accept-charset="utf-8">
				<label for="email" class="visuallyhidden">Email</label>
				<input type="email" placeholder="jane@example.com" name="email" id="email"/>
				<input type="hidden" name="list" value="IHoM4A4bdjmF8zo9CNJIvQ"/><br>
				<input type="hidden" name="subform" value="yes"/>
				<input type="submit" name="submit" value="Subscribe!" id="submit"/>
			  </form>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

	<!-- Adds previous & next post links -->
	<div id="post-nav-links">
		<div class="post-nav-links-previous">
			<svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 13v-2H8l4-4-1-2-7 7 7 7 1-2-4-4z" fill="currentColor"></path></svg> The one before<br>
				<?php previous_post_link('%link'); ?>
		</div>
		<div class="post-nav-links-next">
			Up next <svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m4 13v-2h12l-4-4 1-2 7 7-7 7-1-2 4-4z" fill="currentColor"></path></svg><br>
					<?php next_post_link('%link'); ?>
		</div>
	</div>

<?php
get_footer();
