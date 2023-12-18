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

?>
	
	<footer id="colophon" class="site-footer footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-top d-block d-sm-flex  justify-content-between align-items-center">
						<div class="footer-logo">
							<a href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt=""></a>
						</div>
						<div class="footer-social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
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
							<h4 class="title">Quick links</h4>
							<ul>
								<li><a href="#">Creative</a></li>
								<li><a href="#">General</a></li>
								<li><a href="#">Insights</a></li>
								<li><a href="#">Tech</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="footer-list mt-30">
							<h4 class="title">Categories</h4>
							<ul>
								<li><a href="#">About us</a></li>
								<li><a href="#">Terms and conditions</a></li>
								<li><a href="#">Privacy policy</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-info mt-30">
							<h3 class="title">Categories</h3>
							<ul>
								<li><i class="fal fa-map-marker-alt"></i> 445 Main Street, New York CA-12325, USA </li>
								<li><i class="fal fa-phone"></i> +00 125 456 888 </li>
								<li><i class="fal fa-envelope"></i> contact@aball.com </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-copyright d-lg-flex justify-content-center justify-content-md-between site-info">
						<p><?php echo _e( 'Derechos reservados', 'en-contraste-fotografia' ); ?> @<?php bloginfo( ); ?>
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

	<a class="back-to-top">
		<i class="fal fa-angle-up"></i>
	</a>

	<!--====== BACK TO TOP ENDS ======-->

</div><!-- #page -->

	

<?php wp_footer(); ?>

</body>
</html>
