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

		?>
					

		<section class="service-area pb-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-9">
						<div class="section-title text-center">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-line.png" alt="">
							<h3 class="title">Nuestros servicios</h3>
							<p>Cada detalle no pasará desapercibido por nuestras cámaras...JAMÁS.</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<?php

					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							?>

							<div class="col-lg-4 col-md-6 col-sm-8">
								<div class="service-item-wrap mb-5">
									<div class="service-meta text-center">
										<h2 class="title"><?php the_title(); ?></h2>
										<a href="<?php the_permalink(); ?>" class="service-meta-link">Paquetes</a>
									</div>
									<?php echo wp_get_attachment_image( get_post_meta( get_the_ID(), 'services_image_image_id', true ), 'services-grid', false, array( 'class' => 'service-img-grid' ) ); ?>
								</div>
							</div>

							<?php

						endwhile;

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</div>
		</section>

		<!--====== SERVICE PART ENDS ======-->

	</main><!-- #main -->

<?php
get_footer();
