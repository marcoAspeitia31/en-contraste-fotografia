<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package En_contraste_fotografia
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php

		get_template_part( 'template-parts/generals/archive', 'breadcrumbs' );

		if ( have_posts() ) :
			?>

			<section class="article-page-area pt-70 pb-100">
				<div class="container">
					<div id="entry-content" class="row justify-content-center">
						<?php	  

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

						?>
						<div class="col-12 mt-3">
							<?php the_posts_navigation(); ?>
						</div>
					</div>
				</div>
			</section>
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
