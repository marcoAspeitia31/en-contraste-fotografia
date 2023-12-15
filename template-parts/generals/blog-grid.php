<?php
/**
 * Template part for displaying posts in grid
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package En_contraste_fotografia
 */
?>
<div class="col-lg-4 col-md-6 col-sm-9">
	<div class="article-2-item mt-30">
		<div class="article-thumb">
			<?php en_contraste_fotografia_post_thumbnail(); ?>
		</div>
		<div class="article-content">
			<div class="date">
				<div class="item">
					<p class="title"><?php echo esc_html( get_the_date( 'd' ) ); ?></p>
					<span><?php echo esc_html( get_the_date( 'M' ) ); ?></span>
					<span><?php echo esc_html( get_the_date( 'Y' ) ); ?></span>
				</div>
				<?php
				$categories_list = get_the_category_list( esc_html__( ', ', 'en-contraste-fotografia' ) );
				if ( $categories_list ) :
					/* translators: 1: list of categories. */
					printf( '<span class="cat-links">' . esc_html__( '%1$s', 'en-contraste-fotografia' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				endif;
				?>
			</div>
			<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<a href="<?php the_permalink(); ?>">
				Ver más 
				<span class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
						<path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5"></path>
					</svg>
				</span>
			</a>
		</div>
	</div>
</div>
