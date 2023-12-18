<?php
/**
 * Template part for displaying page breadcrumbs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package En_contraste_fotografia
 */
?>
<!--====== PAGE TITLE  PART START ======-->

<header class="entry-header page-title-area">
	<div class="section__bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-content text-center">
					<h1 class="title entry-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'en-contraste-fotografia' ), '<span>' . get_search_query() . '</span>' );
					?>
					</h1>
					<div class="scroll-to-down">
						<a href="#entry-content"><i class="fal fa-arrow-down"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<!--====== PAGE TITLE  PART ENDS ======-->
