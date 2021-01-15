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
		<div class="row" >
			<div class="col-12 col-lg-8">

				<!-- Carousel -->
				<div id="banner">
					<div id="carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">

							<!-- First Slide -->
							<div class="carousel-item active">
								<div style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/morte.jpg" class="carousel-image d-block w-100" alt="..."></div>
								<div class="carousel-caption d-none d-md-block">
									<h2>First slide label</h2>
									<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
								</div>
							</div>

							<!-- First Slide -->
							<div class="carousel-item">
								<div style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/vereadores.jpg" class="carousel-image d-block w-100" alt="..."></div>
								<div class="carousel-caption d-none d-md-block">
									<h2>Second slide label</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>

							<!-- First Slide -->
							<div class="carousel-item">
								<div style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/empregos.jpg" class="carousel-image d-block w-100" alt="..."></div>
								<div class="carousel-caption d-none d-md-block">
									<h2>Third slide label</h2>
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
								</div>
							</div>
						</div>

						<!-- Carousel Controls -->
						<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<p>lekapo</p>
	</div>



<?php
get_footer();
