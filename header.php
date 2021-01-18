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
						<i class="fa fa-search"></i>
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
			</div>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
