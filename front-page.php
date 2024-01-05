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

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				
				the_content();
				?>

				<!--====== OVERVIEW PART START ======-->
				
				<section class="overview-area pb-100">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="overview-content">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-line.png" alt="">
									<span>overview</span>
									<h3 class="title">About our company insight</h3>
									<p>Triplet I award-winning interdisciplinary architectural studio cultural, residential and commercial projects built worldwide. We pride ourselves on being builders creating architectural.</p>
									<a class="main-btn" href="#">Let’s Chat</a>
									<div class="brand-item d-flex align-items-center mt-70">
										<div class="item">
											<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand-1.png" alt=""></a>
										</div>
										<div class="item">
											<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand-2.png" alt=""></a>
										</div>
										<div class="item">
											<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand-3.png" alt=""></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="overview-counter-area">
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="overview-counter-item mt-10 animated wow fadeInUp" data-wow-duration="3000ms" data-wow-delay="0ms">
												<div class="icon">
													<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/overview-1.png" alt="">
												</div>
												<h3 class="title count">63</h3>
												<span>Years of experience</span>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="overview-counter-item mt-10 animated wow fadeInUp" data-wow-duration="3000ms" data-wow-delay="300ms">
												<div class="icon">
													<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/overview-2.png" alt="">
												</div>
												<h3 class="title count">79</h3>
												<span>Project taken</span>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="overview-counter-item mt-30 animated wow fadeInUp" data-wow-duration="3000ms" data-wow-delay="600ms">
												<div class="icon">
													<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/overview-3.png" alt="">
												</div>
												<h3 class="title count">27</h3>
												<span>Awards won</span>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="overview-counter-item mt-30 animated wow fadeInUp" data-wow-duration="3000ms" data-wow-delay="900ms">
												<div class="icon">
													<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/overview-4.png" alt="">
												</div>
												<h3 class="title"><span class="count">32</span>k</h3>
												<span>Twitter followers</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!--====== OVERVIEW PART ENDS ======-->

				<!--====== PRICING PART START ======-->
				
				<section class="pricing-area">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 col-md-9">
								<div class="section-title section-title-2 text-center">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-line.png" alt="">
									<h3 class="title">Pricing Plan</h3>
									<p>Our focus is on delivering you the absolute best support guiding you through training and providing.</p>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-4 col-md-6 col-sm-9 order-1">
								<div class="pricing-item mt-30 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0ms">
									<h3 class="title">Free</h3>
									<span>Personal Plan</span>
									<p>Aussehen ist nicht alles, aber ein guter Anfang! Sei schön mit…</p>
									<ul>
										<li>Logos & Branding</li>
										<li>2D Visuals</li>
										<li>3D Animations</li>
										<li>Social Media</li>
									</ul>
									<a class="main-btn" href="#">Get Started</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-9 order-3 order-lg-2">
								<div class="pricing-item mt-30 center animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0ms">
									<h3 class="title">$249.00</h3>
									<span>Professional Plan</span>
									<p>Aussehen ist nicht alles, aber ein guter Anfang! Sei schön mit…</p>
									<ul>
										<li>Logos & Branding</li>
										<li>2D Visuals</li>
										<li>3D Animations</li>
										<li>Social Media</li>
									</ul>
									<a class="main-btn" href="#">Get Started</a>
									<div class="tag">Popular</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-9 order-2 order-lg-3">
								<div class="pricing-item mt-30 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="0ms">
									<h3 class="title">$249.00</h3>
									<span>Premium Plan</span>
									<p>Aussehen ist nicht alles, aber ein guter Anfang! Sei schön mit…</p>
									<ul>
										<li>Logos & Branding</li>
										<li>2D Visuals</li>
										<li>3D Animations</li>
										<li>Social Media</li>
									</ul>
									<a class="main-btn" href="#">Get Started</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!--====== PRICING PART ENDS ======-->



				<!--====== SUB ITEM PART START ======-->
				
				<section class="sub-item-area">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-3 col-md-6 col-sm-8">
								<div class="sub-item">
									<div class="icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="62.001" height="70" viewBox="0 0 62.001 70">
										<g id="Group_6" data-name="Group 6" transform="translate(-270 -1139)">
											<path data-name="Union 2" d="M-5,322.218.218,317l1.8,1.8-2.145,2.145H15.685V323.5H-.109l2.131,2.131-1.8,1.8Z" transform="translate(275 855.366)"/>
											<g data-name="Group 9" transform="translate(277.025 1139)">
											<path data-name="Path 19" d="M127.959,440.246H81.286V428.611h46.673v11.635Zm-44.165-2.551h41.657v-6.532H83.795Z" transform="translate(-81.286 -370.246)" fill="#fff"/>
											<path data-name="Path 20" d="M146.328,199.2H106.764l1.088-1.873c5.87-10.114,8.973-22.572,8.973-36.027v-1.248h19.443V161.3c0,13.457,3.1,25.914,8.973,36.027Zm-35.269-2.5h30.974c-5.241-9.813-8.081-21.551-8.257-34.157H119.316C119.141,175.152,116.3,186.89,111.059,196.7Z" transform="translate(-103.209 -138.284)" fill="#fff"/>
											<path data-name="Path 21" d="M151.5,19.4H132.928L124.97,0h11.275V4.835h2.316V0h7.3V4.835h2.316V0h11.276ZM134.6,16.924H149.82L155.744,2.48H150.67V7.315h-7.3V2.48h-2.315V7.315h-7.3V2.48h-5.072Z" transform="translate(-118.875)" fill="#fff"/>
											<path data-name="Path 22" d="M174.109,131.565H145.3v-6.778h28.81Zm-26.329-2.314h23.846V127.1H147.781Z" transform="translate(-136.367 -107.479)" fill="#fff"/>
											</g>
											<path data-name="Path 23" d="M219.916,244.71a6.1,6.1,0,1,1-6.094-6.1A6.1,6.1,0,0,1,219.916,244.71Z" transform="translate(86.549 932.872)" fill="#fff"/>
											<path data-name="Union 1" d="M15.841,326.379l-3.41-3.408H-5v-2.551H12.421L15.841,317H26.792L22.1,321.69l4.692,4.689Zm-1.082-4.689,2.138,2.138h3.733l-2.138-2.138,2.138-2.137H16.9Z" transform="translate(305.208 855.895)"/>
										</g>
										</svg>
									</div>
									<h3 class="title">Business Stratagy</h3>
									<span>We have the technology and industry expertise to solutions.</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-8">
								<div class="sub-item">
									<div class="icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="93.8" height="70" viewBox="0 0 93.8 70">
										<defs>
											<clipPath id="clip-path">
											<rect width="93.8" height="70" fill="none"/>
											</clipPath>
										</defs>
										<g  data-name="Repeat Grid 9" clip-path="url(#clip-path)">
											<g  data-name="Group 4549" transform="translate(-635 -1820)">
											<g  data-name="Group 30" transform="translate(637.972 1820)">
												<path data-name="Path 126" d="M420.336,203.743l-1.992-1.992,1.409-1.409a20.992,20.992,0,0,0,6.363-11.882l2.789.4a23.73,23.73,0,0,1-7.16,13.474Z" transform="translate(-347.973 -165.146)" fill="#fff"/>
												<path data-name="Path 127" d="M58.235,235.736l-33.4-33.4a23.731,23.731,0,0,1-7.16-13.474l2.788-.4a20.992,20.992,0,0,0,6.363,11.882l31.4,31.4,15.908-15.908,1.992,1.992Z" transform="translate(-17.539 -165.736)" fill="#fff"/>
												<path data-name="Path 128" d="M56.042,72.114a18.384,18.384,0,0,0-36.375,0L16.88,71.7a21.2,21.2,0,0,1,41.949,0Z" transform="translate(-16.88 -53.596)" fill="#fff"/>
												<path data-name="Path 129" d="M280.042,72.114a18.384,18.384,0,0,0-36.375,0l-2.788-.41a21.2,21.2,0,0,1,41.95,0Z" transform="translate(-201.757 -53.596)" fill="#fff"/>
											</g>
											<g data-name="Group 31" transform="translate(635 1836.341)">
												<rect data-name="Rectangle 66" width="4.2" height="4.2" transform="translate(41.838 27.896)" fill="#fff"/>
												<rect data-name="Rectangle 71" width="4.2" height="4.2" transform="translate(41.838 36.296)" fill="#fff"/>
												<rect data-name="Rectangle 67" width="4.2" height="2.8" transform="translate(41.838 19.496)" fill="#fff"/>
												<path data-name="Path 130" d="M8.452,158.048H0V149.6H8.452Zm-5.635-2.817H5.635v-2.817H2.817Z" transform="translate(0 -149.596)" fill="#fff"/>
												<path data-name="Union 3" d="M15.095,8.452V5.415H0V3.386H15.095V0h8.452V3.386h16.02V5.415H23.546V8.452Zm2.818-2.818h2.817V2.818H17.912Z" transform="translate(24.185 0)"/>
												<path data-name="Path 132" d="M456.452,158.048H448V149.6h8.452Zm-5.635-2.817h2.817v-2.817h-2.817Z" transform="translate(-369.435 -149.596)" fill="#fff"/>
											</g>
											<path data-name="Path 133" d="M342.18,287.795,330.5,256.1,362.2,267.776l4.229,1.759-18.3,4.19L343.5,291.343Zm-6.922-26.941,7.855,21.32,2.693-10.771,10.771-2.693Z" transform="translate(362.372 1598.541)"/>
											</g>
										</g>
										</svg>
									</div>
									<h3 class="title">Promotion design</h3>
									<span>We have the technology and industry expertise to solutions.</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-8">
								<div class="sub-item">
									<div class="icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="56.911" height="70.55" viewBox="0 0 56.911 70.55">
										<g transform="translate(0.25 0.25)">
											<path data-name="Path 10777" d="M56.033,70l3.224-19.556L53.832,32.628a22.7,22.7,0,1,1,44.162-7.392l.016,3.092,4.813,14.08H97.179l-1.2,15.051-11.975-1.1-1.638,13.28,2.519.31L86.227,59.11l12.084,1.11,1.214-15.275h6.847L100.546,27.9l-.014-2.67a25.236,25.236,0,1,0-49.114,8.18l5.239,17.207L53.528,69.588Z" transform="translate(-50.06)" fill="#fff" stroke="#fff" stroke-width="0.5"/>
											<path data-name="Path 10778" d="M150.726,64.3A4.614,4.614,0,0,1,157,58.021a4.618,4.618,0,0,1,8.887,0A4.614,4.614,0,0,1,172.17,64.3a4.616,4.616,0,0,1-1.256,9.06h-7.683a4.62,4.62,0,0,0-4.62,4.62v31.6H156.6v-31.6a4.617,4.617,0,0,0-4.617-4.62,4.616,4.616,0,0,1-1.256-9.06Z" transform="translate(-135.811 -39.283)"/>
											<g id="Group_2290" data-name="Group 2290" transform="translate(19.392 24.177)">
											<rect data-name="Rectangle 3474" width="2.415" height="2.415" transform="translate(9.661)" fill="#fff"/>
											<rect data-name="Rectangle 3475" width="2.415" height="2.415" transform="translate(4.829)" fill="#fff"/>
											<rect  data-name="Rectangle 3476" width="2.415" height="2.415" transform="translate(0)" fill="#fff"/>
											</g>
										</g>
										</svg>
									</div>
									<h3 class="title">Marketing Stratagy</h3>
									<span>We have the technology and industry expertise to solutions.</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-8">
								<div class="sub-item">
									<div class="icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
										<g transform="translate(-0.014)">
											<path data-name="Path 15" d="M31.037,62.047A31.023,31.023,0,1,1,62.06,31.021H59.348A28.311,28.311,0,1,0,31.037,59.335v2.712h0Z" transform="translate(0 0)" fill="#fff"/>
											<g id="Group_7" data-name="Group 7" transform="translate(9.732 9.725)">
											<path data-name="Path 16" d="M92.514,71.368a21.182,21.182,0,1,0,0,42.364v-6.9A14.284,14.284,0,1,1,106.8,92.548h6.909A21.213,21.213,0,0,0,92.514,71.368Z" transform="translate(-71.328 -71.368)" stroke="#2aa38c" stroke-width="1.5"/>
											<path data-name="Path 17" d="M187.375,179.982a7.388,7.388,0,1,1-7.388-7.386A7.386,7.386,0,0,1,187.375,179.982Z" transform="translate(-158.799 -158.802)" stroke="#2aa38c" stroke-width="1.5"/>
											</g>
											<g data-name="Group 8" transform="translate(31.154 31.139)">
											<path id="Path_18" data-name="Path 18" d="M242.492,265.68l-15.677-38.861,38.86,15.684-16.129,7.045ZM231.7,231.7l10.893,27,4.9-11.211L258.7,242.6Z" transform="translate(-226.815 -226.819)" fill="#fff"/>
											<rect id="Rectangle_9" data-name="Rectangle 9" width="13.584" height="2.701" transform="translate(30.352 32.263) rotate(-135)" fill="#fff"/>
											</g>
										</g>
										</svg>
									</div>
									<h3 class="title">Digital Marketing</h3>
									<span>We have the technology and industry expertise to solutions.</span>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!--====== SUB ITEM PART ENDS ======-->

				<?php

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
