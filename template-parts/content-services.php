<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package En_contraste_fotografia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!--====== SINGLE POST PART START ======-->

	<section class="single-post-area">
		<div id="entry-content" class="entry-content mt-0">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'en-contraste-fotografia' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
	</section>
	
	<!--====== SINGLE POST PART ENDS ======-->

</article><!-- #post-<?php the_ID(); ?> -->
