<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/7f18fff2d8.js" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<div class="top-header">
		<div class="container-fluid">
			<div class="row align-items-center">

				<div class="col-4 order-sm-7 search-column">
					<a
							class="searchIcon"
							data-toggle="collapse"
							href="#searchFormCollapse"
							role="button"
							aria-expanded="false"
							aria-controls="searchFormCollapse"
					>
						<i class="fa fa-search search-icon-mobile"></i>
				</div>

				<div class="col-4 col-sm-6 offset-sm-1 offset-md-1 col-md-4 offset-lg-0 offset-xl-1">
					<a href="/">
						<div class="logo">
							<div class="logo-circle">
								<img src="<?php echo get_template_directory_uri(); ?>/images/outside-logo.png" alt="" class="logo-circle-outside">
								<img src="<?php echo get_template_directory_uri(); ?>/images/inside-logo.png" alt="" class="logo-circle-inside">
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/ciranda.png" alt="" class="logo-ciranda">
							<img src="<?php echo get_template_directory_uri(); ?>/images/20-anos.png" alt="" class="logo-vinte-anos">
						</div>
					</a>
				</div>

				<div class="col-4 col-md-6 justify-right d-lg-none">
					<div class="mobile-menu-dropdown">
						<button
								class="navbar-toggler"
								type="button"
								data-toggle="collapse"
								data-target="#navbarNavDropdown"
								aria-controls="navbarNavDropdown"
								aria-expanded="false"
								aria-label="<?php esc_attr_e(
										'Toggle navigation',
										'understrap'); ?>"

						>
							<i class="fa fa-bars float-right"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">




		<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">


			<div class="container-fluid">
				<div class="offset-lg-0 offset-xl-1">
					<!-- The WordPress Menu goes here -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav mr-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>


				</div>
				<div class=" d-none d-sm-flex align-items-center search-form col-5">

					<svg>
						<use xlink:href="#search-icon" />
					</svg>
					<?php get_search_form(); ?>
				</div>
			</div>


			<div class="collapse w-100 search-form" id="searchFormCollapse">

				<?php get_search_form(); ?>

			</div>
		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->


	<svg display="none">
		<symbol width="24" height="24" viewBox="0 0 24 24" id="search-icon">
		<?xml version="1.0" encoding="iso-8859-1"?>
		<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve">
<g>
	<g>
		<path class="search-icon" d="M508.885,493.784L353.109,338.008c32.341-35.925,52.224-83.285,52.224-135.339c0-111.744-90.923-202.667-202.667-202.667
			S0,90.925,0,202.669s90.923,202.667,202.667,202.667c52.053,0,99.413-19.883,135.339-52.245l155.776,155.776
			c2.091,2.091,4.821,3.136,7.552,3.136c2.731,0,5.461-1.045,7.552-3.115C513.045,504.707,513.045,497.965,508.885,493.784z
			 M202.667,384.003c-99.989,0-181.333-81.344-181.333-181.333S102.677,21.336,202.667,21.336S384,102.68,384,202.669
			S302.656,384.003,202.667,384.003z"/>
	</g>
</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
			<g>
			</g>
</svg>

	</svg>
