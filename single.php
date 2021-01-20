<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">
		<div class="row">
				<main class="site-main category-<?php

					/* Category Color*/
					$categories = get_the_category();
					echo $categories[0]->cat_ID;
					?>" id="main">

					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'loop-templates/content', 'single' );

					?>
					<div class="col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10 offset-xxl-1 col-xxl-6">
						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
							endwhile;
						?>

				</main><!-- #main -->
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
