<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nineteen_Quirky
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

			$mycontent = $post->post_content; // wordpress users only
			$word = str_word_count(strip_tags($mycontent));
			$m = floor($word / 200);
			$est = $m . ' min' . ($m == 1 ? '' : 's');
		?>
			<div class="entry-meta">
				📅
				<span class="post-meta"><?php
				nineteen_quirky_posted_on();
				?></span> ⏱ <span class="post-meta"><?php echo $est; ?></span>
			</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php nineteen_quirky_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if ( is_home() or is_front_page() or is_category() ) :
			get_the_title();
		else:
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nineteen-quirky' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
	endif;
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nineteen-quirky' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<?php if ( is_single() ) : ?>
	<footer class="entry-footer">
		🏷️ <?php nineteen_quirky_entry_footer(); ?>
	</footer><!-- .entry-footer -->
<?php endif ?>
</article><!-- #post-<?php the_ID(); ?> -->
