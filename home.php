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
		if ( have_posts() ) :
			?>
			<header class="entry-header page-title-area">
				<div class="section__bg"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="page-title-content text-center">
								<h1 class="title entry-title"><?php single_post_title(); ?></h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
										<li class="breadcrumb-item active" aria-current="page"><?php single_post_title(); ?></li>
									</ol>
								</nav>
								<div class="scroll-to-down">
									<a href="#entry-content"><i class="fal fa-arrow-down"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<section class="article-page-area pt-70 pb-100">
				<div class="container">
					<div class="row justify-content-center">
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

						the_posts_navigation();
						?>
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
