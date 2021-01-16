<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-8 offset-xl-2 col-xl-8">
		<header class="entry-header">

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">

				<?php understrap_posted_on(); ?>

			</div><!-- .entry-meta -->

		</header><!-- .entry-header -->
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	</div>

	<div class="row">
			<div class="entry-content">

				<div class="col-12 offset-sm-2 col-sm-8 offset-lg-1 col-lg-6 offset-xl-2 col-xl-6">
					<?php the_content(); ?>
				</div>

				<div class="col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-8 offset-xl-2 col-xl-8">
					<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>

			</div><!-- .entry-content -->
		</div>

	<div class="col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-8 offset-xl-2 col-xl-8">
		<footer class="entry-footer">

			<?php understrap_entry_footer(); ?>

		</footer><!-- .entry-footer -->
	</div>

</article><!-- #post-## -->
