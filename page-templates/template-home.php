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
	<div class="container-fluid">
		<div class="row" >
			<div class="col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-6 offset-xl-2 col-xl-5">

				<!-- Carousel -->
				<div id="banner" class="box">
					<div id="carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">

							<!-- First Slide -->
							<div class="carousel-item category-1  active">
								<h3>//categoria 1</h3>
								<div style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/morte.jpg" class="carousel-image d-block w-100" alt="..."></div>
								<div class="carousel-caption">
									<h2>Morte, vida, arte, corpo</h2>
								</div>
							</div>

							<!-- Second Slide -->
							<div class="carousel-item category-2 ">
								<h3>//categoria 2</h3>
								<div style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/vereadores.jpg" class="carousel-image d-block w-100" alt="..."></div>
								<div class="carousel-caption">
									<h2>Conheça os vereadores de SP que cortaram a gratuidade em ônibus, metrô e trens para idosos</h2>
								</div>
							</div>

							<!-- Third Slide -->
							<div class="carousel-item category-3">
								<h3>//categoria 3</h3>
								<div style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/empregos.jpg" class="carousel-image d-block w-100" alt="..."></div>
								<div class="carousel-caption">
									<h2>Empregos para a retomada do crescimento para 2021</h2>
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

			<div class="col-12 offset-sm-1 col-sm-10 offset-lg-0 col-lg-4 col-xl-3">
					<div id="spotlight" class="box">
						<div class="spotlight-item category-1" style="border-top: none;">
							<img src="<?php echo get_template_directory_uri(); ?>/images/empregos.jpg" alt="">
							<div class="spotlight-caption">
								<span>//categoria 1</span>
								<h4>Conheça os vereadores de SP que cortaram a gratuidade em ônibus, metrô e trens para idosos</h4>
								<span>Nome Autor</span>
							</div>
						</div>
						<div class="spotlight-item category-2">
							<img src="<?php echo get_template_directory_uri(); ?>/images/vereadores.jpg" alt="">
							<div class="spotlight-caption">
								<span>//categoria 1</span>
								<h4>Conheça os vereadores de SP que cortaram a gratuidade em ônibus, metrô e trens para idosos</h4>
								<span>Nome Autor</span>
							</div>
						</div>
						<div class="spotlight-item category-3">
							<img src="<?php echo get_template_directory_uri(); ?>/images/empregos.jpg" alt="">
							<div class="spotlight-caption">
								<span>//categoria 1</span>
								<h4>Conheça os vereadores de SP que cortaram a gratuidade em ônibus, metrô e trens para idosos</h4>
								<span>Nome Autor</span>
							</div>
						</div>
					</div>

			</div>
		</div>
	</div>



<?php
get_footer();
