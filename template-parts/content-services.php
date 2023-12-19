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

	<?php get_template_part( 'template-parts/generals/cpt', 'breadcrumbs' ); ?>

	<!--====== SINGLE POST PART START ======-->

	<section class="single-post-area pt-70">
		<div class="container">
			<div id="entry-content" class="row justify-content-center">
				<div class="col-lg-8">
					<div class="single-post-topbar">
						<span><i class="far fa-calendar mr-2"></i><?php echo esc_html( the_date( 'F j, Y' ) ); ?></span>
						<?php en_contraste_fotografia_entry_footer( false ); ?>
					</div>
					<?php
					en_contraste_fotografia_post_thumbnail();

					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'en-contraste-fotografia' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'en-contraste-fotografia' ),
							'after'  => '</div>',
						)
					);
					?>
					<div class="post-next">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="prev-post">
									<?php
									if ( get_previous_post( true ) ) :
										printf( esc_html__( '%s', 'en-contraste-fotografia' ), '<span>' . 'Post anterior' . '</span>' );
										previous_post_link( '%link', '<p>%title</p>', true );
									endif;
									?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="prev-post">
									<?php 
									if ( get_next_post( true ) ) :
										printf( esc_html__( '%s', 'en-contraste-fotografia' ), '<span>' . 'Post siguiente' . '</span>' );
										next_post_link( '%link', '<p>%title</p>', true );
									endif;
									?>
								</div>
							</div>
						</div>
					</div>

					<footer class="entry-footer">
						<?php en_contraste_fotografia_entry_footer( true ); ?>
					</footer><!-- .entry-footer -->

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :

						comments_template();
						
					endif;
					?>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
	
	<!--====== SINGLE POST PART ENDS ======-->

</article><!-- #post-<?php the_ID(); ?> -->
