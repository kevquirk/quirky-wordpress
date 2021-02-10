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

			  <p>Do you want to be successful, respected and rich? Do you want all your dreams to come true? If so, <del>ignore this box because I’m an idiot and can’t help</del> you need my newsletter! <a href="/newsletter">More info</a></p>

			  <p>⚠️ Warning: Reading my newsletter will not make you successful, respected or rich and is likely to significantly reduce your intelligence.</p>

				<p>May contain nuts. 🥜</p>

			  <form action="https://newsletter.kevq.uk/subscribe" method="POST" accept-charset="utf-8">
				<label for="email" class="visuallyhidden">Email</label>
				<input type="email" placeholder="jane@example.com" name="email" id="email"/>
				<input type="hidden" name="list" value="IHoM4A4bdjmF8zo9CNJIvQ"/><br>
				<input type="hidden" name="subform" value="yes"/>
				<input type="submit" name="submit" value="Subscribe!" id="submit"/>
			  </form>
			</div>

			<hr>
			<!-- Adds previous & next post links -->
			<div id="post-links">
				<p class="alignleft">
					<?php previous_post_link('&laquo; %link'); ?>
				</p>
				<p class="alignright">
						<?php next_post_link('%link &raquo;'); ?>
				</p>
			</div>
			<div style="clear: both;"></div>

			<hr>

			<div class="guestbook-notice">
				<h2>💬 Looking for comments?</h2>

				<p>I don't have comments on this site as they're difficult to manage and take up too much time. I'd rather concentrate on producing content than managing comments.</p>

				<p>Instead of leaving a comment, you could 📝 <a href="/guestbook">sign my guestbook</a> or ✉️ <a href="/contact">contact me</a> instead.
			</div>


			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
