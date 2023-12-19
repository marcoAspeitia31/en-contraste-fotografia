<?php
/**
 * Template part for displaying page breadcrumbs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package En_contraste_fotografia
 */

$post      = get_queried_object();
$post_type = get_post_type_object( get_post_type( get_the_ID() ) );
?>
<!--====== PAGE TITLE  PART START ======-->

<header class="entry-header page-title-area">
	<div class="section__bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-content text-center">
					<h1 class="title entry-title"><?php the_title(); ?></h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
							<li class="breadcrumb-item"><a href="<?php echo esc_url( get_post_type_archive_link( $post->post_type ) ); ?>"><?php echo esc_html( $post_type->labels->name ); ?></a></li>
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
