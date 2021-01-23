<?php
/**
 * The template for displaying search results pages
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="search-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<div class="col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10 offset-xxl-1 col-xxl-10">
				<main class="site-main" id="main">

					<?php
					if ( have_posts() ) :
					?>
					<header class="page-header">
						<?php
							echo '<h1>';
							printf(

								/* translators: %s: query term */
								esc_html__( 'Resultados da pesquisa por: %s', 'understrap' ),
								'<span>' . get_search_query() . '</span>'
							);
							echo '</h1>';
						?>
					</header><!-- .page-header -->

					<div class="card-columns">
						<?php
						// Start the loop.
						$index = 0;
						while ( have_posts() ) :
							the_post();
							?>
							<a href="<?php the_permalink(); ?>">
								<div class="latest-item box card card-decoration category-<?php

								/* Banner Category Color*/
								$categories = get_the_category();
								echo $categories[0]->slug;
								?>">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="latest-image">
									<h2><?php echo get_the_title(); ?></h2>
									<span class="author"><em>Por</em> <?php echo get_the_author(); ?></span>
									<p class="excerpt">
										<?php
										$excerpt = get_the_post_summary(256);

										$excerpt = substr($excerpt, 0, 180);
										echo $excerpt;
										?>
									</p>
								</div>
							</a>
							<?php

							$index++;

						endwhile;

						wp_reset_postdata();

						else :
							echo "<h1>Nenhum resultado foi encontrado para: " .
									'<span>' . get_search_query() . '</span>' .
								"</h1>";
						endif;
						?>
				</main><!-- #main -->
			</div>

			<?php
			// Display the pagination component.
			understrap_pagination();
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #search-wrapper -->

<?php
get_footer();
