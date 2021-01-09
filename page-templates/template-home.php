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
		<div class="row" id="banner-row">
			<div id="banner">
				<div class="col-12 col-sm-10 offset-sm-1 col-md-12 offset-md-0">
					<div id="carousel" class="carousel slide carousel-sync" data-ride="carousel" data-pause="false">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?php echo get_template_directory_uri(); ?>/images/morte.jpg" alt="First slide" class="w100">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/images/vereadores.jpg" alt="Second slide" class="w100">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/images/empregos.jpg" alt="Third slide" class="w100">
							</div>
						</div>
					</div>
					<div id="title-carousel" class="carousel slide carousel-sync" data-ride="carousel" data-pause="false">
						<div class="carousel-inner">
							<div class="carousel-item active category-1">
								<div class="title-carousel-holder">
									<h3><strong>//categoria 1</strong></h3>
									<div class="title-carousel-title-holder">
										<h2>Morte, vida, arte, corpo</h2>
									</div>
									<div class="line category-1-decoration"></div>
								</div>
							</div>
							<div class="carousel-item category-2">
								<div class="title-carousel-holder">
									<h3><strong>//categoria 2</strong></h3>
									<div class="title-carousel-title-holder">
										<h2>Conheça os vereadores de SP que cortaram a gratuidade em ônibus, metrô e trens para idosos</h2>
									</div>
									<div class="line category-2-decoration"></div>
								</div>
							</div>
							<div class="carousel-item category-3">
								<div class="title-carousel-holder">
									<h3><strong>//categoria 3</strong></h3>
									<div class="title-carousel-title-holder">
										<h2>Empregos para a retomada do crescimento em 2021</h2>
									</div>
									<div class="line category-3-decoration"></div>
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
