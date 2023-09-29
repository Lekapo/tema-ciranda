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

	<div class="m-auto col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10 offset-xxl-2 col-xxl-5">
		<header class="entry-header">


			<div class="entry-date">


				<?php echo get_the_date() . ' - ' . get_the_time(); ?>

			</div>

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-author">
				<span>Por </span><a href="/author/<?php echo get_the_author(); ?>"><?php echo get_the_author(); ?></a>
			</div>

		</header><!-- .entry-header -->
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	</div>

	<div class="row">
			<div class="entry-content">

				<div class="m-auto col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-10 offset-xl-1 col-xl-7 offset-xxl-2 col-xxl-5">
					<?php the_content(); ?>
				</div>

				<div class="col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-10 offset-xl-1 col-xl-7 offset-xxl-2 col-xxl-5">
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

	<div class="m-auto col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-10 offset-xl-1 col-xl-7 offset-xxl-2 col-xxl-5">
		<footer class="entry-footer">

			<?php understrap_entry_footer(); ?>

		</footer><!-- .entry-footer -->
	</div>

</article><!-- #post-## -->
