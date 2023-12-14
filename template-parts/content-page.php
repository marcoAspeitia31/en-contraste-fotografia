<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package En_contraste_fotografia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--====== PAGE TITLE  PART START ======-->

	<header class="entry-header page-title-area">
		<div class="section__bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-title-content text-center">
						<h1 class="title entry-title"><?php the_title(); ?></h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
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
	
	<!--====== PAGE TITLE  PART ENDS ======-->

	<?php en_contraste_fotografia_post_thumbnail(); ?>

	<!--====== SINGLE POST PART START ======-->

	<section class="single-post-area pt-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div id="entry-content" class="entry-content mt-30">
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
				</div>
			</div>
		</div>
	</section>

	<!--====== SINGLE POST PART ENDS ======-->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'en-contraste-fotografia' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
