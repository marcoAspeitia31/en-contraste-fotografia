<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package En_contraste_fotografia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary" aria-label="<?php echo esc_attr__( 'Skip to content', 'en-contraste-fotografia' ); ?>"><?php esc_html_e( 'Skip to content', 'en-contraste-fotografia' ); ?></a>

	<!--====== HEADER PART START ======-->

	<header id="masthead" class="header-area site-header">
		<div class="header-nav">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="navigation">
							<nav class="navbar navbar-expand-lg navbar-light ">

								<a class="navbar-brand" aria-label="<?php echo esc_attr__( 'Logo del negocio', 'en-contraste-fotografia' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt=""></a> <!-- logo -->

								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="toggler-icon"></span>
									<span class="toggler-icon"></span>
									<span class="toggler-icon"></span>
								</button> <!-- navbar toggler -->

								<?php
								/**
								 * Displays a navigation menu.
								 * 
								 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
								 */
								wp_nav_menu( 
									array(
										'theme_location'  => 'primary-menu',
										'container_class' => 'collapse navbar-collapse sub-menu-bar',
										'container_id'    => 'navbarSupportedContent',
										'menu_class'      => 'navbar-nav ml-auto',
										'menu_id'         => 'primary-menu',
									)
								);
								?>

								<div class="navbar-btn d-none d-sm-block">
									<a class="main-btn" aria-label="<?php echo esc_attr__( 'Contactar', 'en-contraste-fotografia' ); ?>" href="#">Contactar</a>
								</div>
							</nav>
						</div> <!-- navigation -->
					</div>
				</div> <!-- row -->
			</div>
		</div>
	</header>

	<!--====== HEADER PART ENDS ======-->
