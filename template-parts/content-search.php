<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nineteen_Quirky
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		
		<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			📅 <?php
			nineteen_quirky_posted_on();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php nineteen_quirky_post_thumbnail(); ?>

	<footer class="entry-footer">
		<p>🏷 <?php nineteen_quirky_entry_footer(); ?></p>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
