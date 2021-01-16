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
						<?php
						$args = array(
								'posts_per_page' => 3,
						);
						$index = 0;
						// The Query
						$the_query = new WP_Query( $args );

						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								?>
							<!-- First Slide -->
							<div class="carousel-item category-1  <?php if ( $index == 0) { echo 'active'; }?>">
								<h3>//categoria 1</h3>
								<div style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>" class="carousel-image d-block w-100" alt="..."></div>
								<div class="carousel-caption">
									<h2><?php echo get_the_title(); ?></h2>
								</div>
							</div>


							<?php
								$index++;
									}
								} else {
									// no posts found
								}
								/* Restore original Post Data */
								wp_reset_postdata();
								?>

							<!-- Second Slide -->
							<!--<div class="carousel-item category-2 ">
								<h3>//categoria 2</h3>
								<div style="background-image:url(<?php /*echo get_template_directory_uri(); */?>/images/vereadores.jpg" class="carousel-image d-block w-100" alt="..."></div>
								<div class="carousel-caption">
									<h2>Conheça os vereadores de SP que cortaram a gratuidade em ônibus, metrô e trens para idosos</h2>
								</div>
							</div>-->

							<!-- Third Slide -->
							<!--<div class="carousel-item category-3">
								<h3>//categoria 3</h3>
								<div style="background-image:url(<?php /*echo get_template_directory_uri(); */?>/images/empregos.jpg" class="carousel-image d-block w-100" alt="..."></div>
								<div class="carousel-caption">
									<h2>Empregos para a retomada do crescimento para 2021</h2>
								</div>
							</div>-->
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

					<?php
					$args = array(
							'posts_per_page' => 3,
							'offset' => 3,

					);
					$index = 0;
					// The Query
					$the_query = new WP_Query( $args );

					// The Loop
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							?>

						<div class="spotlight-item category-1" style="<?php if ($index == 0 ) { echo 'border-top: none;'; } ?>">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							<div class="spotlight-caption">
								<span>//categoria 1</span>
								<h4><?php echo get_the_title(); ?></h4>
								<span>Nome Autor</span>
							</div>
						</div>
							<?php
							$index++;
						}
					} else {
						// no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
							<!--
						<div class="spotlight-item category-2">
							<img src="<?php /*echo get_template_directory_uri(); */?>/images/vereadores.jpg" alt="">
							<div class="spotlight-caption">
								<span>//categoria 1</span>
								<h4>Conheça os vereadores de SP que cortaram a gratuidade em ônibus, metrô e trens para idosos</h4>
								<span>Nome Autor</span>
							</div>
						</div>
						<div class="spotlight-item category-3">
							<img src="<?php /*echo get_template_directory_uri(); */?>/images/empregos.jpg" alt="">
							<div class="spotlight-caption">
								<span>//categoria 1</span>
								<h4>Volare patienter ducunt ad raptus fluctui. Dexter, grandis nutrixs semper. </h4>
								<span>Nome Autor</span>
							</div>
						</div>-->
					</div>

			</div>
		</div>
		<div class="row">
			<div class="col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-10 offset-xl-2 col-xl-8">
				<div id="latest">
					<h3>//todas</h3>
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-6 col-xl-4">
							<div class="latest-item box">
								<img src="<?php echo get_template_directory_uri(); ?>/images/morte.jpg" alt="" class="latest-image">
								<h4>Titulo</h4>
								<span class="author"></span>
								<p class="excerpt">
									Decors sunt parmas de secundus fluctus.Eheu, bi-color armarium!Gratis, fatalis speciess absolute convertam de placidus, fortis fluctus.
								</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-6 col-xl-4">
							<div class="latest-item box">
								<img src="<?php echo get_template_directory_uri(); ?>/images/morte.jpg" alt="" class="latest-image">
								<h4>Titulo</h4>
								<span class="author">Por <em>Nome do Autor</em></span>
								<p class="excerpt">
									Decors sunt parmas de secundus fluctus.Eheu, bi-color armarium!Gratis, fatalis speciess absolute convertam de placidus, fortis fluctus.
								</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-6 col-xl-4">
							<div class="latest-item box">
								<img src="<?php echo get_template_directory_uri(); ?>/images/morte.jpg" alt="" class="latest-image">
								<h4>Titulo</h4>
								<span class="author"></span>
								<p class="excerpt">
									Decors sunt parmas de secundus fluctus.Eheu, bi-color armarium!Gratis, fatalis speciess absolute convertam de placidus, fortis fluctus.
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-6 col-xl-4">
							<div class="latest-item box">
								<img src="<?php echo get_template_directory_uri(); ?>/images/morte.jpg" alt="" class="latest-image">
								<h4>Titulo</h4>
								<span class="author"></span>
								<p class="excerpt">
									Decors sunt parmas de secundus fluctus.Eheu, bi-color armarium!Gratis, fatalis speciess absolute convertam de placidus, fortis fluctus.
								</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-6 col-xl-4">
							<div class="latest-item box">
								<img src="<?php echo get_template_directory_uri(); ?>/images/morte.jpg" alt="" class="latest-image">
								<h4>Titulo</h4>
								<span class="author">Por <em>Nome do Autor</em></span>
								<p class="excerpt">
									Decors sunt parmas de secundus fluctus.Eheu, bi-color armarium!Gratis, fatalis speciess absolute convertam de placidus, fortis fluctus.
								</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-6 col-xl-4">
							<div class="latest-item box">
								<img src="<?php echo get_template_directory_uri(); ?>/images/morte.jpg" alt="" class="latest-image">
								<h4>Titulo</h4>
								<span class="author"></span>
								<p class="excerpt">
									Decors sunt parmas de secundus fluctus.Eheu, bi-color armarium!Gratis, fatalis speciess absolute convertam de placidus, fortis fluctus.
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>




<?php
get_footer();
