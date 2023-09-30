<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_fluid' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
	<div class="row">
			<div class="col-12 offset-sm-1 col-sm-10 offset-lg-0 col-lg-12 offset-xl-1 col-xl-10">

				<!-- Latest -->
				<div id="category">
					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">//', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<div class="card-columns">
					<?php

						/*
							Created a custom field that work with php functions on ciranda.php
							to solve the problem that setting offsets breaks pagination.
						
						*/
						// echo var_dump($wp_query);
						$paged = (get_query_var("paged")) ? get_query_var("paged") : 1;
						$args = array(
								'author'		 => get_query_var('author'),
								'orderby' 		 => 'date',
								'order' 		 => 'DESC',
								'posts_per_page' => 8,
								'paged' 		 => $paged,
								'offset_start'	 => 0,         // custom field

						);
						$index = 0;
						// The Query
						$the_query = new WP_Query( $args );
						global $wp_query;
						// Put default query object in a temp variable
						$tmp_query = $wp_query;
						// Now wipe it out completely
						$wp_query = null;
						// Re-populate the global with our custom query
						$wp_query = $the_query;

						// The Loop
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) :
								$the_query->the_post();
					?>
					<a href="<?php the_permalink(); ?>">
						<div class="latest-item box card card-decoration category-<?php

						/* Category Color*/
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

							else :
								// no posts found
							endif;
						?>
					</div>
					<div class="col-12">

						<?php

						understrap_pagination(array(
								'mid_size'  => 2,
						));

						// Restore original query object
						$wp_query = null;
						$wp_query = $tmp_query;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- #archive-wrapper -->

<?php
get_footer();
