<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package En_contraste_fotografia
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php get_template_part( 'template-parts/generals/search', 'breadcrumbs' ); ?>

		<section class="article-page-area pt-70 pb-100">
			<div id="entry-content">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<?php

								if ( have_posts() ) :

									/* Start the Loop */
									while ( have_posts() ) :
										the_post();

										/*
										* Include the Post-Type-specific template for the content.
										* If you want to override this in a child theme, then include a file
										* called content-___.php (where ___ is the Post Type name) and that will be used instead.
										*/
										get_template_part( 'template-parts/generals/blog', 'grid' );

									endwhile;

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif;
								
								?>
								<div class="col-12 mt-3">
									<?php the_posts_navigation(); ?>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<?php get_sidebar();?>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
