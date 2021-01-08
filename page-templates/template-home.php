<?php
/**
 * Template Name: Home Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>
	<div class="container">
		<div class="row">
			<div id="banner">
				<div class="col-12 col-sm-8 offset-sm-2 col-md-12 offset-md-0">
					<div id="carousel" class="carousel slide carousel-sync" data-ride="carousel" data-pause="false">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?php echo get_template_directory_uri(); ?>/img/plain.jpg" alt="First slide" class="d-block w100">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/mountain.png" alt="Second slide" class="d-block w100">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/beach.jpg" alt="Third slide" class="d-block w100">
							</div>
						</div>
					</div>
					<div id="title-carousel" class="carousel slide carousel-sync" data-ride="carousel" data-pause="false">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="carousel-title">
									<h2 class="carousel-title-1">Species de dexter era, tractare gabalium!</h2>
								</div>
							</div>
							<div class="carousel-item">
								<div class="carousel-title">
									<h2 class="carousel-title-2">Species de dexter era, tractare gabalium!</h2>
								</div>
							</div>
							<div class="carousel-item">
								<div class="carousel-title">
									<h2 class="carousel-title-3">Bubos sunt byssuss de peritus silva!</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php
get_footer();
