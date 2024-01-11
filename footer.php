<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package En_contraste_fotografia
 */
$theme_options = get_option('efp_theme_options');
?>
    <!--The div element for the map -->
    <div id="map"></div>
	
	<footer id="colophon" class="site-footer footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-top d-block d-sm-flex  justify-content-between align-items-center">
						<div class="footer-logo">
							<a href="<?php echo esc_url( home_url( '/' ) );?>" aria-label="<?php echo esc_attr__( 'Ir al home', 'en-contraste-fotografia' ); ?>">
							<?php
							if( ! empty( $theme_options['footer_logo'] ) ) :
								echo wp_get_attachment_image( $theme_options['footer_logo_id'], 'logo', false, array( 'class' => 'img-fluid' ) );
							endif;
							?>
							</a>
						</div>
						<div class="footer-social">
							<ul>
								<?php
								if ( $theme_options[ 'facebook_url' ] ) :
									echo sprintf( '<li><a href="%s" target="_blank" aria-label="visitar perfil facebook"><i class="fab fa-facebook-f"></i></a></li>', esc_url( $theme_options[ 'facebook_url' ] ) );
								endif;
								if ( $theme_options[ 'instagram_url' ] ) :
									echo sprintf( '<li><a href="%s" target="_blank" aria-label="visitar perfil instagram"><i class="fab fa-instagram"></i></a></li>', esc_url( $theme_options[ 'instagram_url' ] ) );
								endif;
								if ( $theme_options[ 'youtube_url' ] ) :
									echo sprintf( '<li><a href="%s" target="_blank" aria-label="visitar perfil youtube"><i class="fab fa-youtube"></i></a></li>', esc_url( $theme_options[ 'youtube_url' ] ) );
								endif;
								if ( $theme_options[ 'tiktok_url' ] ) :
									echo sprintf( '<li><a href="%s" target="_blank" aria-label="visitar perfil tiktok"><i class="fab fa-tiktok"></i></a></li>', esc_url( $theme_options[ 'tiktok_url' ] ) );
								endif;
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-item">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="footer-about mt-30">
							<h4 class="title">Acerca de</h4>
							<p>DNP Installations can carry out all maintenance on phone and data and phone points in DNP Installations can carry out all maintenance on phone and data and phone.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="footer-list mt-30 ml-95">
							<h4 class="title">Enlaces rápidos</h4>
							<?php
							wp_nav_menu( array(
								'menu_id' => 'secondary-menu',
								'theme_location' => 'secondary-menu',
								'container' => 'nav',
							) );
							?>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="footer-list mt-30">
							<h4 class="title">Servicios</h4>
							<?php
							wp_nav_menu( array(
								'menu_id' => 'tertiary-menu',
								'theme_location' => 'tertiary-menu',
								'container' => 'nav',
							) );
							?>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-info mt-30">
							<h3 class="title">Contacto</h3>
							<ul>
								<li><i class="fal fa-map-marker-alt"></i>
								<?php echo ! empty( $theme_options['business_address'] ) ? $theme_options['business_address'] : '' ; ?>
								</li>
								<li><i class="fal fa-phone"></i>
								<?php echo ! empty( $theme_options['business_phone'] ) ? $theme_options['business_phone'] : '' ; ?>
								</li>
								<li><i class="fal fa-envelope"></i>
								<?php echo ! empty( $theme_options['contact_email'] ) ? $theme_options['contact_email'] : '' ; ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-copyright d-lg-flex justify-content-center justify-content-md-between site-info">
						<p><?php echo _e( 'Derechos reservados', 'en-contraste-fotografia' ); ?> © <?php bloginfo( ); ?>
							<?php
								echo date_i18n(
									/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
									_x( 'Y', 'copyright date format', 'en-contraste-fotografia' )
								);
							?>
						</p>
						<p><?php echo _e( 'Diseño realizado por:', 'en-contraste-fotografia' ); ?> <a href="https://devitm.com/">DevITM</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<!--====== FOOTER PART ENDS ======-->

	<!--====== BACK TO TOP START ======-->

	<a class="back-to-top" href="#" aria-label="Back to top">
		<i class="fal fa-angle-up"></i>
	</a>

	<!--====== BACK TO TOP ENDS ======-->

</div><!-- #page -->

	

<?php wp_footer(); ?>

</body>
</html>
